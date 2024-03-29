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
                        "grade" => "(" . $hadith->get_collection()->collection_al .", ". $hadith->hadith_no . ")" ];

        }else if($_GET['lan'] == "en")
        {
               $hadith = Hadiths::get_random();

                $array = ["id" => $hadith->id,
                        "hadith" => hadith_split($hadith->text_en, "transmetuesi"),
                        "book" => $hadith->hadith_no .", ". numberToRoman($hadith->chapter_no) .", ". $hadith->get_book()->book_en,
                        "grade" => "(" . $hadith->get_collection()->collection_en .", ". $hadith->hadith_no . ")" ];

        }else if($_GET['lan'] == "ar")
        {

                $hadith = Hadiths::get_random();

                $array = ["id" => $hadith->id,
                        "hadith" => ar_hadith_split($hadith->text_ar, "transmetuesi"),
                        "book" => $hadith->hadith_no .", ". numberToRoman($hadith->chapter_no) .", ". $hadith->get_book()->book_ar,
                        "grade" => "(" . $hadith->get_collection()->collection_ar .", ". $hadith->hadith_no . ")" ];

        }else
        {
                $array = ["error" => "language doesnt exist!"];   
        }


        $array["image"] = substr($img,2);

        if(isset($_GET['timestamp']) && isset($_GET['country'])){
                $hadith = $array;
                $timings = Timings::get_timestamp($_GET['timestamp'], $_GET['country']);
                
                $array = [
                        "hadith" => $hadith,
                        "timings" => $timings
                ];
        }
}
else
{
        $array = ["error" => "language not specified!"];   
}




echo json_encode($array);