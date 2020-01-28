<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require ROOT.DS.'api/PHPMailer/src/Exception.php';
require ROOT.DS.'api/PHPMailer/src/PHPMailer.php';
require ROOT.DS.'api/PHPMailer/src/SMTP.php';

class Mail
{
    private static $_instance = null;
    private $mail;
    public function __construct()
    {
        $this->mail = new PHPMailer;
        $this->mail->isSMTP();
         
        $this->mail->Host     = SMTP_HOST;
        $this->mail->SMTPAuth = true;
        $this->mail->Username = SMTPUSERNAME;
        $this->mail->Password = SMTPPASSWORD;
        $this->mail->SMTPSecure = SMTPSECURE;
        $this->mail->Port     = SMTPPORT;
    }
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Mail();
        }
        return self::$_instance;
    }
    public function send($subject, $body)
    {
        $this->mail->setFrom('sharma.manish7575@gmail.com', 'ColoredCow EmailCampaigns');
        $this->mail->addReplyTo('sharma.manish7575@gmail.com', 'ColoredCow EmailCampaigns');

       
        $this->mail->addAddress('ms90051@gmail.com','Manish');

        /*// Add cc or bcc 
        $this->mail->addCC('cc@example.com');
        $this->mail->addBCC('bcc@example.com');*/

        // Email subject
        $this->mail->Subject = $subject;

        // Set email format to HTML
        $this->mail->isHTML(true);

        // Email body content
        $mailContent = '
    <h2>Email Campaign</h2>
    <p>'.$body.'</p>';
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
