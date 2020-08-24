<?php
header("Access-Control-Allow-Origin: *");

require_once("../includes/init_head.php");

$fileList = glob('../images/new_n/*');
$random = array_rand($fileList);
$img = $fileList[$random];

if(isset($_GET['lan'])){
        if($_GET['lan'] == "al")
        {
                $hadith = Hadithet::get_random();

                $array = ["id" => $hadith->id,
                        "Hadithi" => narr_format($hadith->Hadithi),
                        "Transmetimi" => narr_format($hadith->Transmetimi),
                        "Libri" => $hadith->get_chapter()->NrKapitulli . ", " .$hadith->get_book()->Libri,
                        "Shkalla" => $hadith->Shkalla];
        }else if($_GET['lan'] == "en")
        {
                $hadith = Hadith::get_random();

                $array = ["id" => $hadith->id,
                        "Hadithi" => narr_format($hadith->get_en_hadith()),
                        "Transmetimi" => narr_format($hadith->get_en_narration()),
                        "Libri" => $hadith->get_en_book(),
                        "Shkalla" => $hadith->source];

        }else if($_GET['lan'] == "ar")
        {

                $hadith = Hadith::get_random();

                $array = ["id" => $hadith->id,
                        "Hadithi" => $hadith->text_ar,
                        "Transmetimi" => "",
                        "Libri" => $hadith->get_ar_book(),
                        "Shkalla" => $hadith->source];

        }else
        {
                $array = ["message" => "language doesnt exist!"];   
        }


$array["image"] = substr($img,2);
}
else
{
        $array = ["message" => "language not specified!"];   
}


echo json_encode($array);