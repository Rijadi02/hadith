<?php 

$hadith = Hadiths::get_random();

if (isset($_POST['id'])) {
  $hadith = Hadiths::find_by_id($_POST['id']);
}


// if (isset($_POST['no'])) {
//   $hadith = Hadithet::find_by_nr($_POST['no']);
// }



if (isset($_POST['back']) or isset($_POST['next']) or isset($_POST['res'])) {
 
    if (isset($_POST['next'])) {
  
      if(has_page_next())
      {
        $hadith = Hadiths::find_by_id(page_next());
      }
      else
      { 
        page_start($hadith->id);
      }
  
    }
   
    if (isset($_POST['back'])) {
      $hadith = Hadiths::find_by_id(page_back());
    }
  
    if (isset($_POST['res'])) {
      $hadith = Hadiths::find_by_id(page_current());
    }
    
  } else {
    page_start($hadith->id);
  }


  // // $_SESSION['i'] = -1;
// // $_SESSION['page'] = [];

// // $_SESSION['x'] = $_SESSION['x'] + 1;
// // $fileList = glob('images/new_n/new_2/'.$_SESSION['x']+".jpg");


  $fileList = glob('images/new_n/*');
$random = array_rand($fileList);
$img = $fileList[$random]
  
?>