<?php include("includes/init.php");?>

<p class="text-white" style="color:white!important">
<?php
$hadith = new Hadith();
print_r($hadith->en->body);
?>
</p>
