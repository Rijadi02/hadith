<?php
require_once("includes/init.php");
exit();
$strJsonFileContents = file_get_contents("times/mktimes.json");

$array = json_decode($strJsonFileContents, true);

foreach($array as $time){
    $insert = new Timings();

    // "Muaji": 12,
    // "Data": 25,
    // "Imsaku": "5:19",
    // "Lindja e Diellit": "7:01",
    // "Dreka": "11:42",
    // "Ikindia": "14:02",
    // "Akshami": "16:16",
    // "Jacia": "17:55",


    $insert->month = $time['month'];
    $insert->day = $time['day'];
    $insert->country = "mk";

    $insert->imsak = $time['imsak'];
    $insert->sunrise = $time['sunrise'];
    $insert->dhuhr = $time['dhuhr'];
    $insert->asr = $time['dhuhr'];
    $insert->maghrib = $time['maghrib'];
    $insert->isha = $time['isha'];

    $insert->save();

    print_r($insert);
}


?>