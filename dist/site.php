<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    img {
      w100%$_COOKIE
    }
  </style>
</head>
<body>

<?php
  $image = $_GET['img'];

  if (isset($image)) {
    echo '<img src="./img/portfolio/big/' . $image . '" />';
  }
?>

</body>
</html>