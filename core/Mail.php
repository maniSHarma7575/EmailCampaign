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
        $this->mail->SMTPDebug = 0;
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
        $this->mail->setFrom($email, 'Pigeon');
        $this->mail->addReplyTo($email, 'Pigeon');

        foreach ($subscriber as $sub) {
            $this->mail->addAddress($sub, 'Manish');
        }

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
    public function sendVerification($name, $email, $token, $work)
    {
        $this->mail->setFrom('sharma.manish7575@gmail.com', 'Pigeon');



        /*// Add cc or bcc 
        $this->mail->addCC('cc@example.com');
        $this->mail->addBCC('bcc@example.com');*/

        $this->mail->addAddress($email, $name);


        if ($work === "verification") {
            $subject = 'Verify your account';
            $mailContent = "
        <p>Welcome, $name </p>
        <p>Click the following link to verify your account</p>
        <a href='http://localhost/EmailCampaign/verification?email=$email&token=$token'>Click Here</a>
        <br>
        <p>Note If you are not trying to register into Email Campaign, pleases ignore this email</p>
        <br>
        <p>Thankyou,</p>
        <p>Email Campaign team</p>
        ";
        } else {
            $resetPassLink = 'http://localhost/EmailCampaign/ForgotPassword/reset?email=' . $email . '&token=' . $token;
            $subject = 'Password Update Request';
            $mailContent = 'Dear ' . $name . ',
            <br/>Recently a request was submitted to reset a password for your account. If this was a mistake, just ignore this email and nothing will happen.
            <br/>To reset your password, visit the following link: <a href="' . $resetPassLink . '">' . $resetPassLink . '</a>
            <br/><br/>Regards,
            <br/>Pigeon Team';
        }

        // Email subject
        $this->mail->Subject = $subject;
        // Set email format to HTML
        $this->mail->isHTML(true);

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

    public function sendForgotPasswordLink($name, $email, $token)
    {
        $this->mail->setFrom('sharma.manish7575@gmail.com', 'Pigeon');

        $resetPassLink = 'http://localhost/EmailCampaign/ForgotPassword/reset?email=' . $email . '&token=' . $token;

        /*// Add cc or bcc 
        $this->mail->addCC('cc@example.com');
        $this->mail->addBCC('bcc@example.com');*/

        $this->mail->addAddress($email, $name);
        // Email subject
        $this->mail->Subject = 'Password Update Request';

        // Set email format to HTML
        $this->mail->isHTML(true);

        $mailContent = 'Dear ' . $name . ',
        <br/>Recently a request was submitted to reset a password for your account. If this was a mistake, just ignore this email and nothing will happen.
        <br/>To reset your password, visit the following link: <a href="' . $resetPassLink . '">' . $resetPassLink . '</a>
        <br/><br/>Regards,
        <br/>Pigeon Team';




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
