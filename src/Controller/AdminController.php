<?php

namespace App\Controller;

use App\Entity\QuizzHistory;
use App\Entity\User;
use App\Form\AdminUserType;
use App\Form\UserType;
use App\Repository\QuizzHistoryRepository;
use App\Repository\UserRepository;
use App\Repository\VisitorsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;


#[Route('/admin')]
#[IsGranted("ROLE_ADMIN")]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_admin_users', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/users', name: 'app_admin_users')]
    public function getUsersPanel(UserRepository $userRepository): Response
    {
        return $this->render('admin/users.html.twig', [
            'currentRoute' => 'app_admin_users',
            'users' => $userRepository->findAll()
        ]);
    }

    #[Route('/graph', name: 'app_admin_graph')]
    public function getGraphPanel(ChartBuilderInterface $chartBuilder, UserRepository $userRepository): Response
    {
  
        $loginDates = $userRepository->findAllLoginDates();

        $data = [];
        foreach ($loginDates as $loginDate) {
            $date = $loginDate['last_connected_at']->format('Y-m-d');
            if (!isset($data[$date])) {
                $data[$date] = 0;
            }
            $data[$date]++;
        }
  
        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);

        $chart->setData([
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                [
                    'label' => 'Users',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [0, 10, 5, 2, 20, 30, 45],
                ],
                [
                    'label' => 'Quiz',
                    'backgroundColor' => 'rgb(0, 255, 0)',
                    'borderColor' => 'rgb(0, 255, 0)',
                    'data' => [0, 50, 500, 36, 40, 789, 1589],
                ],
            ],
        ]);

        return $this->render('admin/graph.html.twig', [
            'currentRoute' => 'app_admin_graph',
            'chart' => $chart,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit_admin', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $form = $this->createForm(AdminUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'editUserForm' => $form,
        ]);
    }
#[Route('/history/{id}', name: 'app_user_show_history', methods: [ 'GET'])]
public function showHistory(Request $request, EntityManagerInterface $entityManager, QuizzHistoryRepository $quizzHistoryRepository, int $id, UserRepository $repository,QuizzHistory $quizzHistory): Response
{
    $Userdata = $entityManager->getRepository(QuizzHistory::class);

    $user = $repository->find($id);
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
}

    public function countVisitors(VisitorsRepository $visitorRepository): Response
    {
        $uniqueVisitors = $visitorRepository->count([]);
        return new Response('Unique visitors: '.$uniqueVisitors);
    }
}
