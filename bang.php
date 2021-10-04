<?php
set_time_limit(0);
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
function generateRandomString($length = 10) {
$characters = '0123456789';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
$randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;
}
function getStr($string,$start,$end){
$str = explode($start,$string);
$str = explode($end,$str[1]);
return $str[0];
}
echo "================\n";
echo "  AUTO REF BOT  \n";
echo "================\n";
$jumlah = "10000";
$i=1;
while($i <= $jumlah){
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.random-name-generator.com/indonesia?country=id_ID');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.108 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$name = getstr($result,'<p class="h4 mt-0">','<small class="text-muted">');
$address = getstr($result,'<dt class="col-sm-4 text-muted">Random Address:</dt>
                                                <dd class="col-sm-8">
                                                    ','
                                                </dd>');
$user = getstr($result,'<dt class="col-sm-4 text-muted">Username:</dt>
                                                <dd class="col-sm-8">','</dd>');
$pass = getstr($result,'<dt class="col-sm-4 text-muted">Password:</dt>
                                                <dd class="col-sm-8">','</dd>');

$email = ''.$user.'@penuyul.online';
$bnmr = rand(10000000,99999999);
$nmr = '089'.$bnmr.'';





$ch = curl_init();
$headers = [];
curl_setopt($ch, CURLOPT_URL, 'https://cuzdan.bitranium.com/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// this function is called by curl for each header received
curl_setopt($ch, CURLOPT_HEADERFUNCTION,
  function($curl, $header) use (&$headers)
  {
    $len = strlen($header);
    $header = explode(':', $header, 2);
    if (count($header) < 2) // ignore invalid headers
      return $len;

    $headers[strtolower(trim($header[0]))][] = trim($header[1]);

    return $len;
  }
);

$data = curl_exec($ch);
$cookie = $headers['set-cookie'][0];
$coks = getstr($cookie,'ci_session=',';');






$ch = curl_init();
$headers = [];
curl_setopt($ch, CURLOPT_URL, 'https://cuzdan.bitranium.com/login');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$headers = array();
$headers[] = 'Cookie: '.$cookie.'';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// this function is called by curl for each header received
curl_setopt($ch, CURLOPT_HEADERFUNCTION,
  function($curl, $header) use (&$headers)
  {
    $len = strlen($header);
    $header = explode(':', $header, 2);
    if (count($header) < 2) // ignore invalid headers
      return $len;

    $headers[strtolower(trim($header[0]))][] = trim($header[1]);

    return $len;
  }
);

$data = curl_exec($ch);

$csrf = getstr($data,'<input type="hidden" name="csrf" value="','">  ');

$ganti = 'csrf='.$csrf.'&shortName=en';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://cuzdan.bitranium.com/Auth/setLanguage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $ganti);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');


$headers = array();
$headers[] = 'Authority: cuzdan.bitranium.com';
$headers[] = 'Accept: */*';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Mobile Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://cuzdan.bitranium.com';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://cuzdan.bitranium.com/login';
$headers[] = 'Accept-Language: id-ID,id;q=0.9';
$headers[] = 'Cookie: ci_session='.$coks.'; reference=1A6DF2691F3 currentLanguage=tr';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$d = json_decode($result,true);
$status = $d['status'];
echo "Mengganti Negara... ".$status."\n";

echo "Email :  ".$email."\n";
$cok_en = getstr($result,'set-cookie: ci_session=',';');

$data = 'csrf='.$csrf.'&firstName=Erna&lastName=Roni&email='.$email.'&phone='.$nmr.'&password='.$pass.'&confirmPassword='.$pass.'';
$url = 'https://cuzdan.bitranium.com/Auth/registerAjax';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: cuzdan.bitranium.com';
$headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"89\", \"Chromium\";v=\"89\", \";Not\"A\\Brand\";v=\"99\"';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Mobile Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://cuzdan.bitranium.com';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://cuzdan.bitranium.com/register';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: ci_session='.$cok_en.'; reference=1A6DF2691F3 currentLanguage=en';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$m = json_decode($result,true);
$message = $m['status'];
echo "".$message."\n";



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://generator.email/inbox3/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: generator.email';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Mobile Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Accept-Language: id-ID,id;q=0.9';
$headers[] = 'Cookie: _ga=GA1.2.871802335.1604046584; _gid=GA1.2.785677436.1604046584; __gads=ID=83f046220e0047d2-224bff7473c40037:T=1604046583:RT=1604046583:S=ALNI_MbSzdbOMnlXZ0zltKJB51FXeGPFQg; embx=%5B%22vmadjin%40cokils.com%22%2C%22vmasdjin%40cokils.com%22%5D; surl=penuyul.online/'.$user.'';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
 if(strpos($result, "Membership Activation")){
$kodeverif = getstr($result,'<div class="content">
 <h2>Activation Code</h2>
 <h3>','</h3>
 </div>');
echo "Mendapatkan Code Verifikasi: ".$kodeverif."\n";
echo "Proses Verifikasi...\n";
$verif_code = 'csrf='.$csrf.'&code='.$kodeverif.'';
$url = 'https://cuzdan.bitranium.com/Disabled/activationAjax';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $verif_code);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: cuzdan.bitranium.com';
$headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"89\", \"Chromium\";v=\"89\", \";Not\"A\\Brand\";v=\"99\"';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Mobile Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://cuzdan.bitranium.com';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://cuzdan.bitranium.com/register';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: ci_session='.$cok_en.';  reference=1A6DF2691F3 currentLanguage=en';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$mm = json_decode($result,true);
$mms = $mm['message'];
echo "".$mms."\n";
$file = fopen('akun.txt', 'a+');
fwrite($file, "$email | $pass | $nmr\n");
fclose($file);
echo "\n";


}
else{
  echo "GA ADA VERIF";
}




$i++;
}
