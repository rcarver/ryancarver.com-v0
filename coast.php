<?php
  require 'shared/gallery.class.php';
  $gallery = new Gallery("images/photos/coast", $_GET["i"]);
  $current = "coast";
?>
<!html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Ryan Carver Photography</title>
  <link type="text/css" rel="stylesheet" href="stylesheets/main.css">
</head>
<body id="index">
  <div id="wrapper">
    <div class="grid"></div>
    <?php include 'shared/header.php' ?>
    <?php include 'shared/nav.php' ?>
    <?php include 'shared/gallery.php' ?>
    <?php include 'shared/footer.php' ?>
  </div>
  <?php include 'shared/analytics.php' ?>
</body>
</html>
