<?php
header("Access-Control-Allow-Origin: *");

require_once("../includes/init_head.php");

$hadith = Hadithet::get_random();

$fileList = glob('../images/new_n/*');
$random = array_rand($fileList);
$img = $fileList[$random];

$array = ["id" => $hadith->id,
        "Hadithi" => narr_format($hadith->Hadithi),
        "Transmetimi" => narr_format($hadith->Transmetimi),
        "Libri" => $hadith->get_chapter()->NrKapitulli . ", " .$hadith->get_book()->Libri,
        "Shkalla" => $hadith->Shkalla,
        "image" => substr($img,2)];

echo json_encode($array);