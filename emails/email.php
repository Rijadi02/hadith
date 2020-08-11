<?php
use PHPMailer\PHPMailer\PHPMailer;
include("../includes/init.php");
require '../vendor/autoload.php';

function send_email($email, $hadith)
{
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'hadith@tachyondev.tech';
    $mail->Password = 'Blender3&';
    $mail->setFrom('hadith@tachyondev.tech', 'onehadith.org');
    $mail->addAddress($email);
    $mail->Subject = 'Daily Hadith';
    
    
    $message = file_get_contents(dirname(__FILE__).'/email.html');
    $message = str_replace('%hadith_id%', $hadith->id , $message);
    $message = str_replace('%transmetimi%', narr_format($hadith->Transmetimi), $message);
    $message = str_replace('%hadith%', narr_format($hadith->Hadithi) , $message);
    $message = str_replace('%chapter%', $hadith->get_chapter()->NrKapitulli , $message);
    $message = str_replace('%book%', $hadith->get_book()->Libri , $message);
    $message = str_replace('%grade%', $hadith->Shkalla , $message);

    $mail->msgHTML($message);
    $mail->isHTML(true);

    if (!$mail->send()) {
        return 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return 'The email message was sent.';
    }
}



$email_list = EmailList::find_by_type(0);
$email = Email::find_by_date(date("Y-m-d", time()),0);

foreach($email_list as $mail)
{
    echo(send_email($mail->email, $email->get_hadith()));
}

