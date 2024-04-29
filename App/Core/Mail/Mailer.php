<?php

namespace App\Core\Mail;

use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    private $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);
        $this->init();    
    }

    public function init()
    {
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.example.com';  // Specify main and backup SMTP servers
        $this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mailer->Username = 'your_email@example.com';             // SMTP username
        $this->mailer->Password = 'your_email_password';               // SMTP password
        $this->mailer->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mailer->Port = 587;                                    // TCP port to connect to

        // Set From email address and name
        $this->mailer->setFrom('your_email@example.com', 'Your Name');

        // Enable HTML email
        $this->mailer->isHTML(true);
    }
    
    public function send($to, $subject, $body)
    {
        try {
            // Add recipient
            $this->mailer->addAddress($to);

            // Set email subject and body
            $this->mailer->Subject = $subject;
            $this->mailer->Body = $body;

            // Send email
            $this->mailer->send();

            return true;
        } catch (\Exception $e) {
            // Handle email sending error
            return false;
        }
    }
}
