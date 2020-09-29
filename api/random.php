<?php
header("Access-Control-Allow-Origin: *");

require_once("../includes/init_head.php");

$fileList = glob('../images/new_n/*');
$random = array_rand($fileList);
$img = $fileList[$random];

if(isset($_GET['lan'])){
        if($_GET['lan'] == "al")
        {
                $hadith = Hadiths::get_random();

                $array = ["id" => $hadith->id,
                        "hadith" => $hadith->text_al,
                        "book" => $hadith->hadith_no . ", Kapitulli: " . $hadith->chapter_no . ", " . $hadith->get_book()->book_al,
                        "grade" => $hadith->grade_al];

        }else if($_GET['lan'] == "en")
        {
               $hadith = Hadiths::get_random();

                $array = ["id" => $hadith->id,
                        "hadith" => $hadith->text_en,
                        "book" => $hadith->hadith_no . ", Chapter: " . $hadith->chapter_no . ", " . $hadith->get_book()->book_en,
                        "grade" => $hadith->grade_en];

        }else if($_GET['lan'] == "ar")
        {

                $hadith = Hadiths::get_random();

                $array = ["id" => $hadith->id,
                        "hadith" => $hadith->text_ar,
                        "book" => $hadith->hadith_no . ", الفصل: " . $hadith->chapter_no . ", " . $hadith->get_book()->book_ar,
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