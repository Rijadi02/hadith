<?php 
require_once("includes/init.php");
if(isset($_POST['submit']))
{
    $hadith = new Hadithet();

    $hadith->IDKapitulli = "2000";

    $hadith->NrHadithi = $_POST['number'];
    $hadith->Transmetimi = $_POST['tra'];
    $hadith->Hadithi = $_POST['hadith'];
    $hadith->Shkalla = $_POST['shkalla'];

    $hadith->IDFusnota = NULL;
    $hadith->NrHadithiPerseritje = NULL;
    $hadith->Zgjedhur = NULL;
    $hadith->Lexuar = NULL;
    $hadith->KomentTjeter = NULL;
    $hadith->Kudsij = NULL;


    $hadith->save();
}



?>

<html>

<form action="" method="POST">
<label>Number</label>
<br>
<input type="text" name="number" style="width:100%">
<br>
<label>Transmetimi</label>
<br>
<textarea type="text" name="tra" style="width:100%; height:100px"></textarea>
<br>
<label>Hadithi</label>
<br>
<textarea type="text" name="hadith" style="width:100%; height:200px"></textarea>
<br>
<label>Shkalla</label>
<br>
<textarea type="text" name="shkalla" value="[Buhariu dhe Muslimi]" style="width:100%; height:100px">[Buhariu dhe Muslimi]</textarea>
<br>
<br><br>
<input type="submit" name="submit" style="width:100%; height:50px">

</form>

</html>