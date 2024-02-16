<?php

namespace Core;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    public static function send($to, $subject, $body)
    {
        $mail = new PHPMailer(true);

        try {

            // Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST'); // Your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_PORT') == 465 ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = env('MAIL_PORT');

            // Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($to);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;

            $mail->send();

            return true;
        } catch (Exception $e) {
            // Log the error or handle it as needed
            return false;
        }
    }
}
