<?php

//error_reporting(0);
header("Access-Control-Allow-Origin: *");

require_once("../includes/init_head.php");

$fileList = glob('../assets/img/backgrounds/*');
$random = array_rand($fileList);
$img = $fileList[$random];

if(isset($_GET['lan'])){
        if($_GET['lan'] == "al")
        {
                $hadith = Hadiths::get_random();

                $array = ["id" => $hadith->id,
                        "hadith" => al_hadith_split($hadith->text_al, "transmetuesi"),
                        "book" =>  $hadith->hadith_no .", ". numberToRoman($hadith->chapter_no) .", ". $hadith->get_book()->book_en,
                        "grade" => $hadith->grade_al];

        }else if($_GET['lan'] == "en")
        {
               $hadith = Hadiths::get_random();

                $array = ["id" => $hadith->id,
                        "hadith" => hadith_split($hadith->text_en, "transmetuesi"),
                        "book" => $hadith->hadith_no .", ". numberToRoman($hadith->chapter_no) .", ". $hadith->get_book()->book_en,
                        "grade" => $hadith->grade_en];

        }else if($_GET['lan'] == "ar")
        {

                $hadith = Hadiths::get_random();

                $array = ["id" => $hadith->id,
                        "hadith" => ar_hadith_split($hadith->text_ar, "transmetuesi"),
                        "book" => $hadith->hadith_no .", ". numberToRoman($hadith->chapter_no) .", ". $hadith->get_book()->book_ar,
                        "grade" => $hadith->grade_ar];

        }else
        {
                $array = ["error" => "language doesnt exist!"];   
        }


$array["image"] = substr($img,2);
}
else
{
        $array = ["error" => "language not specified!"];   
}


echo json_encode($array);