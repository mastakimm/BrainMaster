<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Question;
use App\Entity\QuizzHistory;
use App\Entity\Reponse;
use App\Entity\User;
use App\Form\QuizCreationType;
use App\Form\QuizType;
use App\Repository\CategorieRepository;
use App\Services\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/quizz')]
class QuizzController extends AbstractController
{
    private $logger;
    private $security;
    private $entityManager;
    private $mailer;

    public function __construct(LoggerInterface $logger,Security $security, EntityManagerInterface $entityManager, MailerService $mailer)
    {
        $this->logger = $logger;
        $this->security = $security;
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
    }

    #[Route('/new', name: 'app_quizz_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $currentUserIdentifier = $this->security->getUser()->getUserIdentifier();
        $subject = 'New quizz created!';
        $body = 'Congratulations you\'ve just created a new quiz! ';

        $categorie = new Categorie();

        for ($i = 0; $i < 10; $i++) {
            $question = new Question();
            for ($j = 0; $j < 3; $j++) {
                $reponse = new Reponse();
                $question->addReponse($reponse);
            }
            $categorie->addQuestion($question);
        }

        $form = $this->createForm(QuizCreationType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('app_quizz', ['id' => $categorie->getId()]);
        }

        return $this->render('quizz/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_quizz_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QuizCreationType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_quizz', ['id' => $categorie->getId()]);
        }

        return $this->render('quizz/new.html.twig', [
            'form' => $form->createView(),
            'categorie' => $categorie,
        ]);
    }

    #[Route('/{id}', name: 'app_quizz', methods: ['GET', 'POST'])]
    public function index(CategorieRepository $categorieRepository, Request $request, SessionInterface $session, int $id, EntityManagerInterface $entityManager): Response
    {
        $categorie = $categorieRepository->find($id);

        if (!$categorie) {
            $this->logger->error('Category not found: ' . $id);
            throw $this->createNotFoundException('La catégorie n\'existe pas');
        }

        $questions = $categorie->getQuestions()->toArray();

        $form = $this->createForm(QuizType::class, null, ['questions' => $questions]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $score = 0;
            $selectedResponses = $form->getData();

            foreach ($questions as $question) {
                $selectedResponseId = $selectedResponses['question_' . $question->getId()];
                $correctResponses = [];

                foreach ($question->getReponses() as $reponse) {
                    if ($reponse->isReponseExpected()) {
                        $correctResponses[] = $reponse->getId();
                    }
                }

                if (in_array($selectedResponseId, $correctResponses)) {
                    $score++;
                }
            }

            $user = $this->security->getUser();

            if($user){

                $quizzHistory = new QuizzHistory;
                $quizzHistory->setUser($user);
                $quizzHistory->setScore($score);
                $quizzHistory->setCategoryName($categorie->getName());
                $quizzHistory->setTotalQuestions(count($questions));
                $quizzHistory->setRealisedAt(new \DateTimeImmutable());

                $entityManager->persist($quizzHistory);
                $entityManager->flush();

            }else{
                $session->set('score', $score);
                $session->set('total', count($questions));
                $session->set('name', $categorie->getName());

            }
            return $this->render('quizz/result.html.twig', [
                'score' => $score,
                'total' => count($questions),
                'id' => $id,
            ]);
        }

        return $this->render('quizz/index.html.twig', [
            'currentRoute' => 'app_quizz',
            'categorie' => $categorie,
            'answerQuizzForm' => $form->createView(),
        ]);



    }
}