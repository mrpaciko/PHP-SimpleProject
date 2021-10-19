<?php
set_time_limit(0);
error_reporting(0);
function generateRandomString($length = 10) {
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
$randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;
}
$dua = generateRandomString(2);
echo $dua;
?>
