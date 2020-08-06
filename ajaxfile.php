<?php 

$base64strImg=$_REQUEST['image']; 
header('Content-Disposition: attachment;filename="test.png"');
header('Content-Type: application/force-download'); 
echo base64_decode($base64strImg);