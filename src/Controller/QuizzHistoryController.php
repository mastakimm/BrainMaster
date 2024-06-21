<?php

namespace App\Controller;



use App\Entity\Quizzhistory;
use App\Repository\QuizzHistoryRepository;
use Doctrine\DBAL\Exception\DatabaseDoesNotExist;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;




#[Route('/history')]
class QuizzHistoryController extends AbstractController
{
    private $logger;
    private $security;

    public function __construct(LoggerInterface $logger, Security $security) {
        $this->logger = $logger;
        $this->security = $security;
    }

    #[Route('/', name: 'app_history', methods: ['GET'])]
    public function index( SessionInterface $session, LoggerInterface $logger, QuizzhistoryRepository $quizzhistoryRepository, EntityManagerInterface $entityManager): Response
    {

        $user = $this->security->getUser();
        if($user) {
            $Userdata = $entityManager->getRepository(QuizzHistory::class);

            $data = $Userdata->findby(['user' => $user]);
             $scoreAll = [];
             $nameAll = [];
             $totalAll = [];
             $dateAll = [];

             for ($i = 0; $i < count($data); $i++) {
                $scoreAll[] = $data[$i]->getScore();
                $nameAll[] = $data[$i]->getCategoryName();
                $totalAll[] = $data[$i]->getTotalQuestions();
                $dateAll[] = $data[$i]->getRealisedAt();
             }






            return $this->render('history/index.html.twig', [
                'scores' => $scoreAll,
                'names' => $nameAll,
                'totals' => $totalAll,
                'dates' => $dateAll,
            ]);
        }else {


            if (!$session->has('all-score') || !$session->has('all-total') || !$session->has('all-name') || !$session->has('all-date')) {
                $session->set('all-score', []);
                $session->set('all-total', []);
                $session->set('all-name', []);
                $session->set('all-date', []);
            }

            $score = $session->get('score');
            $name = $session->get('name');
            $total = $session->get('total');

            $session->remove('score');
            $session->remove('name');
            $session->remove('total');

            $scoreAll = $session->get('all-score', 'default value if not set');
            $nameAll = $session->get('all-name', 'default value if not set');
            $totalAll = $session->get('all-total', 'default value if not set');
            $dateAll = $session->get('all-date', 'default value if not set');


            if ($score || $name || $total) {
                $scoreAll[] = $score;
                $nameAll[] = $name;
                $totalAll[] = $total;
                $dateAll[] = new \DateTime();
            }


            $session->set('all-score', $scoreAll);
            $session->set('all-total', $totalAll);
            $session->set('all-name', $nameAll);
            $session->set('all-date', $dateAll);

            return $this->render('history/index.html.twig', [
                'scores' => $scoreAll,
                'names' => $nameAll,
                'totals' => $totalAll,
                'dates' => $dateAll,
            ]);

        }
    }
}