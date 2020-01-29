<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ROOT . DS . 'api/PHPMailer/src/Exception.php';
require ROOT . DS . 'api/PHPMailer/src/PHPMailer.php';
require ROOT . DS . 'api/PHPMailer/src/SMTP.php';

class Mail
{
    private static $_instance = null;
    private $mail;
    public function __construct($smtpHost, $smtpUsername, $smtpPassword, $smtpSecure, $smtpPort)
    {
        $this->mail = new PHPMailer;
        $this->mail->isSMTP();

        $this->mail->Host     = $smtpHost;
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $smtpUsername;
        $this->mail->Password = $smtpPassword;
        $this->mail->SMTPSecure = $smtpSecure;
        $this->mail->Port     = $smtpPort;
    }
    public static function getInstance($smtpHost, $smtpUsername, $smtpPassword, $smtpSecure, $smtpPort)
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Mail($smtpHost, $smtpUsername, $smtpPassword, $smtpSecure, $smtpPort);
        }
        return self::$_instance;
    }
    public function send($subscriber = [], $email, $name, $subject, $body)
    {
        $this->mail->setFrom($email, 'ColoredCow EmailCampaigns');
        $this->mail->addReplyTo($email, 'ColoredCow EmailCampaigns');

        foreach ($subscriber as $sub) {
            $this->mail->addAddress($sub, 'Manish');
        }

        $m = Mail::getInstance(SES_HOST, SESUSERNAME, SESPPASSWORD, SESSECURE, SESPORT);

        /*// Add cc or bcc 
        $this->mail->addCC('cc@example.com');
        $this->mail->addBCC('bcc@example.com');*/

        // Email subject
        $this->mail->Subject = $subject;

        // Set email format to HTML
        $this->mail->isHTML(true);

        // Email body content
        $mailContent = '
    <h2>' . $name . '</h2>
    <p>' . $body . '</p>';
        $this->mail->Body = $mailContent;

        // Send email
        if (!$this->mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->mail->ErrorInfo;
            return false;
        } else {
            return true;
        }
    }
}
