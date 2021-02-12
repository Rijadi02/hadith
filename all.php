<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<?php
require_once 'includes/init_head.php';

$hadiths = Hadiths::get_all('al');
?>

<style>
  td p span[narrator]
  {
    display: none;
  }
  p
  {
    margin-bottom: 3px;
  }

  .circle
  {
    border: solid 1px black;
    border-radius: 10px;
    
    padding: 0px 10px;
  }
</style>


<table border="1">
  <thead>
  <th style="padding: 5px 5px;">
    Nr
  </th>
  <th style="padding: 5px 10px;">
    Hadithi
  </th>
  
  </thead>
<?php foreach ($hadiths as $hadith): ?>
  <tr>
  <td style="padding: 0 5px">
  <span class="circle"></span>
    &nbsp; <?php echo $hadith->hadith_no; ?> 
  </td>
  <td style="padding: 5px 10px;">
  <?php echo $hadith->text_al; ?>
  </td>
  </tr>
  <?php endforeach; ?>
</table>