<?php
require_once("includes/init_head.php");

if(isset($_POST['submit'])){
    

    // <p><span narrator="narrator">Abdullah ibn Zubejr Humejdiu na ka thënë: Na ka treguar Sufjani, e këtij i ka treguar Jahja ibn  Seid Ensariu, e ky thotë: më ka rrëfyer Muhamed ibn Ibrahim Tejmiu se e ka dëgjuar Alkame ibn Vekas Lejthiun duke thënë:</span> Omer ibn Hatabi (Allahu qoftë i kënaqur me të) duke ligjëruar në minber, tha: E kam dëgjuar të Dërguarin e Allahut ﷺ duke thënë: <strong>“Me të vërtetë, veprat vlerësohen sipas nijeteve dhe secili do të shpërblehet sipas asaj që ka bërë nijet. Andaj, nëse dikush ka bërë hixhret me qëllim të arritjes së të mirave të dynjasë ose që të martohet me ndonjë femër, hixhreti i tij do të vlerësohet sipas asaj për të cilën ka bërë hixhret.”</strong></p>

    $collection = "nawawi40";

    $request = sunnah_hadith_request($collection, $_POST['nr']);
    $request = json_decode($request);

    
    $hadith = new Hadiths();
    $hadith->collection = $collection;
    $hadith->hadith_no = $_POST['nr'];
    $hadith->chapter_no = $_POST["nr"];
    $hadith->book_no = 1;
    $hadith->text_en = "<p>" . $_POST["ennarr"] . "</p>";
    $hadith->text_en .= "<p>" . $_POST["hadithen"] . "</p>";
    $hadith->text_ar = "</span>" . $_POST["hadithar"];
    $hadith->text_al = $_POST["hadithal"];
    $hadith->selected = 1;

    $hadith->save();
    echo '<a href="http://localhost/hadith_new/en?hadith=nawawi40_'.$_POST['nr'].'">en </a>';
    echo '<a href="http://localhost/hadith_new/al?hadith=nawawi40_'.$_POST['nr'].'">al </a>';
    echo '<a href="http://localhost/hadith_new/ar?hadith=nawawi40_'.$_POST['nr'].'">ar </a>';

}

?>
<form method="POST">
<label>nr</label><br>
<input style="width: 60%;" required name="nr" type="number"><br><br><br>

<label>albanian<label><br>
<textarea style="width: 60%;" required rows="12" name="hadithal" type="text"></textarea><br><br><br>

<label>english narrator<label><br>
<textarea style="width: 60%;" required rows="2" name="ennarr" type="text"></textarea><br>
<label>english<label><br>
<textarea style="width: 60%;" required rows="12" name="hadithen" type="text"></textarea><br><br><br>

<label>arabic<label><br>
<textarea style="width: 60%;" required rows="12" name="hadithar" type="text"></textarea><br><br>

<input type="submit" name="submit" value="submit"/><br>
</form>