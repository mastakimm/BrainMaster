<?php

// src/EventListener/VisitorListener.php
namespace App\EventListener;

use App\Entity\Visitors;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class VisitorListener
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $ipAddress = $request->getClientIp();
        $userAgent = $request->headers->get('User-Agent');

        $visitorRepository = $this->em->getRepository(Visitors::class);
        $existingVisitor = $visitorRepository->findUniqueVisitor($ipAddress, $userAgent);

        if (!$existingVisitor) {
            $visitor = new Visitors();
            $visitor->setIpAdress($ipAddress);
            $visitor->setUserAgent($userAgent);
            $visitor->setVisitedAt(new \DateTimeImmutable());

            $this->em->persist($visitor);
            $this->em->flush();
        }
    }
}
