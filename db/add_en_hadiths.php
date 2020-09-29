<link href="css/styles.css" rel="stylesheet" />
<?php
require_once("includes/init.php");
?>
<span class="text-success" style="color: green;">
<?php
global $database;

$string = file_get_contents("csvjson.json");
$json_a = json_decode($string, true);
$i = 0;

foreach($json_a as $file)
{

    $i++;
    if($i > 21599)
    {

    
    $id = $file['id'];
    $hadith_id = $file['hadith_id'];
    $source = $file['source'];
    $chapter_no = $file['chapter_no'];
    $hadith_no = $file['hadith_no'];
    $chapter = $file['chapter'];
    $chain_indx = $file['chain_indx'];
    $text_ar =  $file['text_ar'];
    $text_en = $file['text_en'];

    $sql = "INSERT INTO hadith (`id_book`,`hadith_id`,`source`,`chapter_no`,`hadith_no`,`chapter`,`chain_indx`,`text_ar`,`text_en`)
    VALUES (\"$id\", \n
    \"$hadith_id\", \n
    \"$source\", \n
    \"$chapter_no\", \n
    \"$hadith_no\", \n
    \"$chapter\", \n
    \"$chain_indx\", \n
    \"$text_ar\", \n
    \"$text_en\");";
    echo "hadith($i) has been sucessfully registred in database...";
    echo "<br>";
    $database->query($sql);}

}
?>
</span>




