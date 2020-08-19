<?php
header("Access-Control-Allow-Origin: *");
$fileList = glob('../images/new_n/*');
$random = array_rand($fileList);
$img = $fileList[$random];
echo substr($img,2);