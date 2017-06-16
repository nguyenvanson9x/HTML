<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <?php
  $_SESSION["favcolor"] = "red";
  echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
  echo "Favorite animal is " . $_SESSION["favanimal"] . "<br>";

  print_r($_SESSION);
  session_unset();
  session_destroy();
  ?>
  </body>
</html>