<?php
header("Access-Control-Allow-Origin: *");

require_once("../includes/init_head.php");

$hadith = Hadithet::get_random();

$array = ["Hadithi" => $hadith->Hadithi,
        "Transmetimi" => $hadith->Transmetimi,
        "Libri" => $hadith->get_chapter()->NrKapitulli . ", " .$hadith->get_book()->Libri,
        "Shkalla" => $hadith->Shkalla];

echo json_encode($array);