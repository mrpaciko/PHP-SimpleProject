<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://positionstack.com/geo_api.php?query=COSOLEACAQUE');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: positionstack.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$m = json_decode($result,true);
$latitude = $m['data'][0]['latitude'];
$longitude = $m['data'][0]['longitude'];
echo "".$latitude."".$longitude."";
?>
