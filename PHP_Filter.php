<?php
$str = "<h1>Hello World</h1>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newStr . "<br>";

$int = 0;

if ( filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
echo "<br>";

$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo ("$ip is a valid IP address");
} else {
  echo ("$ip is not a valid IP address");
}
?>