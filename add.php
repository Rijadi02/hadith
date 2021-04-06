<?php
require_once("includes/init_head.php");

if(isset($_POST['submit'])){
    

    // <p><span narrator="narrator">Abdullah ibn Zubejr Humejdiu na ka thënë: Na ka treguar Sufjani, e këtij i ka treguar Jahja ibn  Seid Ensariu, e ky thotë: më ka rrëfyer Muhamed ibn Ibrahim Tejmiu se e ka dëgjuar Alkame ibn Vekas Lejthiun duke thënë:</span> Omer ibn Hatabi (Allahu qoftë i kënaqur me të) duke ligjëruar në minber, tha: E kam dëgjuar të Dërguarin e Allahut ﷺ duke thënë: <strong>“Me të vërtetë, veprat vlerësohen sipas nijeteve dhe secili do të shpërblehet sipas asaj që ka bërë nijet. Andaj, nëse dikush ka bërë hixhret me qëllim të arritjes së të mirave të dynjasë ose që të martohet me ndonjë femër, hixhreti i tij do të vlerësohet sipas asaj për të cilën ka bërë hixhret.”</strong></p>

    $collection = "nawawi40";

    $request = sunnah_hadith_request($collection, $_POST['nr']);
    $request = json_decode($request);

    print_r($request);
    exit();

    $hadith = new Hadiths();
    $hadith->collection = $collection;
    $hadith->hadith_no = $_POST['nr'];
    $hadith->chapter_no = $request->hadith[0]->chapterNumber;
    $hadith->book_no = $request->bookNumber;
    $hadith->text_en = $request->hadith[0]->body;
    $hadith->text_ar = $request->hadith[1]->body;
    $hadith->text_al = $_POST["hadith"];
    $hadith->grade_en = grade_join($request->hadith[0]->grades);
    $hadith->grade_al = grade_join($request->hadith[0]->grades);
    $hadith->grade_ar = grade_join($request->hadith[1]->grades);
    $hadith->selected = 1;

    $hadith->save();
    echo "hadithi u rujt";

}

?>
<form method="POST">
<label>nr</label><br>
<input style="width: 60%;" required name="nr" type="number"><br><br>
<label>hadith<label><br>
<textarea style="width: 60%;" required rows="20" name="hadith" type="text"> </textarea><br><br>
<input type="submit" name="submit" value="submit"/><br>
</form>