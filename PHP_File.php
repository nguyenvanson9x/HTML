<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdic.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}

fclose($myfile);

$file2 = fopen("file2.txt", "a") or die("Unable to open file!");
$txt = "Hello Son\n";
fwrite($file2, $txt);
$txt = "Hi hi hi\n";
fwrite($file2, $txt);
fclose($file2);
?>

</body>
</html>
