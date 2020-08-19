<?php
header("Access-Control-Allow-Origin: *");

require_once("../includes/init_head.php");

echo json_encode(Hadithet::get_random());