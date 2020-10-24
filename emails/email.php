<?php

require("../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("../vendor/phpmailer/phpmailer/src/SMTP.php");
require("../vendor/phpmailer/phpmailer/src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;

require_once "../includes/init_head.php";


function send_email($emails, $type, $hadith)
{
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'hadith@tachyondev.tech';
    $mail->Password = 'Blender3&';
    $mail->setFrom('hadith@tachyondev.tech', 'onehadith.org');
    $mail->addAddress($emails[0]);
    $mail->Subject = 'Daily Hadith';
    
    if($type == "ar")
    {
        $message = file_get_contents(dirname(__FILE__).'/ar_email.html');
    }else
    {
        $message = file_get_contents(dirname(__FILE__).'/email.html');
    }
    $message = str_replace('%hadith_id%', $hadith->id , $message);
    $message = str_replace('%type%', $type , $message);

    switch($type)
    {
        case "en":
            $message = str_replace('%hadith%', hadith_split($hadith->text_en, "narrator") , $message);
            $message = str_replace('%book%', $hadith->book_str("en") , $message);
            $message = str_replace('%grade%', $hadith->grade_en , $message);
            $message = str_replace('%text%', "Go to Hadith" , $message);
        case "ar":
            $message = str_replace('%hadith%', ar_hadith_split($hadith->text_ar, "narrator") , $message);
            $message = str_replace('%book%', $hadith->book_str("ar") , $message);
            $message = str_replace('%grade%', $hadith->grade_ar , $message);
            $message = str_replace('%text%', "Go to Hadith" , $message);
        case "al":
            $message = str_replace('%hadith%', al_hadith_split($hadith->text_al, "narrator") , $message);
            $message = str_replace('%book%', $hadith->book_str("al") , $message);
            $message = str_replace('%grade%', $hadith->grade_al , $message);
            $message = str_replace('%text%', "Go to Hadith" , $message);
    }

    

    foreach($emails as $email)
    {
        $mail->addBcc($email);
    }

    $mail->msgHTML($message);
    $mail->isHTML(true);

    if (!$mail->send()) {
        return 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return 'The email message was sent.';
    }
}

$types = ["al", "en", "ar"];
foreach($types as $type)
{

    $email_list = EmailList::find_by_type($type);
    $email = Emails::find_by_date(date("Y-m-d", time()));
    $emails = [];

    foreach($email_list as $mail)
    {
        array_push($emails,$mail->email);
    }

    echo(send_email($emails, $type,$email->get_hadith()));
}

