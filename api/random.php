<?php
header("Access-Control-Allow-Origin: *");

require_once("../includes/init.php");

echo json_encode(Hadithet::get_random());