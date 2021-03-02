<?php
require_once("includes/init.php");

$strJsonFileContents = file_get_contents("xktimes.json");

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

    $insert->month = $time['Muaji'];
    $insert->day = $time['Data'];
    $insert->imsak = $time['Imsaku'];
    $insert->sunrise = $time['Lindja e Diellit'];
    $insert->dhuhr = $time['Dreka'];
    $insert->asr = $time['Ikindia'];
    $insert->maghrib = $time['Akshami'];
    $insert->isha = $time['Jacia'];

    $insert->save();

    print_r($insert);
}


?>