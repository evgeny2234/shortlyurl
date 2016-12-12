<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT , "Opera/9.80 (Windows NT 6.1; WOW64) Presto/2.12.388 Version/12.17");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_URL, "http://2ip.ru/");
$data = curl_exec($ch);
curl_close($ch);

echo $data;

?>