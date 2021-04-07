<?php $msg = "" ?>
<?php $msg_type = "success" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <script src="assets/js/dom-to-image.min.js"></script>
  <script scr="assets/js/FileSaver.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>onehadith.org</title>
  
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
  <link href="assets/font/stylesheet.css" rel="stylesheet">
  <link href="assets/font/kitab/stylesheet.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/main.min.css">
  
  <html prefix="og: https://ogp.me/ns#">
  <?php if(isset($_GET['hadith'])) : ?>
    <meta property="og:image" content="assets/screenshots/<?php echo $folder ?>/<?php echo $_GET['hadith'] ?>.png" />
  <?php endif; ?>

  <script src="assets/js/feather.min.js" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body {
      overflow: overlay;
    }

    /* width */
    ::-webkit-scrollbar {
      width: 6px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: transparent;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.25);
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: rgba(255, 255, 255, 0.5);
    }
  </style>


</head>

<style>
  html { 
    height:100%;
}
body { 
    min-height:100%;
}
</style>

<body class="df">

  <?php if (count($_GET) > 0) : ?>
    <form action="<?php echo pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) ?>" style="display: none;" method="POST" id="get_to_post">
      <?php foreach ($_GET as $key => $value) : ?>
        <input type="hidden" name="<?php echo $key ?>" value="<?php echo $value ?>">
      <?php endforeach; ?>
    </form>

    <script>
      document.getElementById("get_to_post").submit();
    </script>
  <?php endif; ?>


