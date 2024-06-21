<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail(string $to, string $subject, string $body)
    {
        $email = (new Email())
            ->from('antoinefawer39@hotmail.com')
            ->to($to)
            ->subject($subject)
            ->text($body);

        $this->mailer->send($email);
    }
}
