<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    
    </style>
  </head>
  <body>
  <?php
  $q = intval($_GET['q']);
  $con = mysqli_connect('localhost', 'root', 'root', 'hocphp');
  if (!$con) {
    die ('Could not connect: '. mysqli_error($con));
  }

  mysqli_select_db($con, "MyGuests");
  $sql = "select * from MyGuests where id = '" . $q . "'";
  $result = mysqli_query($con, $sql);

  ?>
  </body>
</html>