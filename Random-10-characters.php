<?php
function generateRandomString($length = 10) {
$characters = 'abcdefghijklmnopqrstuvwxyz';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
$randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;
}
$random = generateRandomString(10); // 10 Character
echo $random;
?>
