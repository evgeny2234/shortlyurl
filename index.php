<html>

<head>
  <title>Сокращатель ссылок (&copy; Vladimir-AWM)</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
table {
  font-family: Tahoma, Arial, sans-serif;
  font-size: smaller;
}
body {
  font-family: Tahoma, Arial, sans-serif;
}
button {
  font-size: smaller;
}
textarea {
  font-size: 12px;
  border: 1px solid #000000}
td {
  text-align: center;
}
input {
  width:65px;
  text-align: center;
  border: 1px solid #000000}
</style>
</head>

<body>

<?php

set_time_limit(0);
error_reporting(0);
$start_time = microtime(true);

if (isset($_POST['content'])) {

$thear = trim($_POST['thear']);
$timeout = trim($_POST['timeout']);
$shortserv = trim($_POST['shortserv']);
$content = trim($_POST['content']);
$pausot = trim($_POST['pausot']);
$pausdo = trim($_POST['pausdo']);
unset($_POST);

$fp = fopen("in.txt", "w+");
fputs($fp, $content);
fclose($fp);

function str_replace_once($search, $replace, $text){
   $pos = strpos($text, $search);
   return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
}

if($shortserv == 1) $shortserv = "http://chilp.it/api.php?url=";
else if($shortserv == 2) $shortserv = "http://safe.mn/api/shorten?format=text&url=";
else if($shortserv == 3) $shortserv = "https://clck.ru/--?url=";
else if($shortserv == 4) $shortserv = "http://metamark.net/api/rest/simple?long_url=";
else if($shortserv == 5) $shortserv = "http://3w.md/api/";
else if($shortserv == 6) $shortserv = "http://qps.ru/api?url=&format=text&url=";
else if($shortserv == 7) $shortserv = "http://tinyurl.com/api-create.php?url=";
else if($shortserv == 10) {
	$arrini = parse_ini_file("bitly.ini");
	$shortserv = "http://api.bit.ly/shorten?version=2.0.1&login=".$arrini['LOGIN']."&apiKey=".$arrini['APIKEY']."&domain=bit.ly&longUrl=";
}
else if($shortserv == 11) {
      $shortserv = "http://mcaf.ee/api/shorten";
}
else if($shortserv == 12) {
      $shortserv = "http://u.to/";
}
else if($shortserv == 14) {
      $shortserv = "https://www.googleapis.com/urlshortener/v1/url";
}
else if($shortserv == 15) $shortserv = "http://g.ua/?u=";
else if($shortserv == 16) $shortserv = "https://is.gd/create.php?format=simple&url=";
else if($shortserv == 17) $shortserv = "http://6url.ru/?api=";
else if($shortserv == 18) $shortserv = "http://v.gd/create.php?format=simple&url=";
else if($shortserv == 19) $shortserv = "http://tinyarro.ws/api-create.php?url=";
else if($shortserv == 20) $shortserv = "http://urlcorta.es/api/text/?url=";

else if($shortserv == 21) $shortserv = "http://catcut.net/create2.php";




else if($shortserv == 26) $shortserv = "http://shorl.com/create.php?go=Shorlify!&url=";
else if($shortserv == 25) $shortserv = "http://qr.de/api/short?expirein_option=0&longurl=";
else if($shortserv == 24) $shortserv = "http://bit.do/mod_perl/url-shortener.pl";
else if($shortserv == 23) $shortserv = "http://lnk1.ru/makeurl.php";
else if($shortserv == 22) $shortserv = "http://link.ac/";
else if($shortserv == 21) $shortserv = "http://nutshellurl.com/createnut";




require_once('idna_convert.class.php');
$IDN = new idna_convert();

function multirequest($data, $starturl) {

      global $options;

	$curls = array();
	$result = array();
	$mh = curl_multi_init();

	foreach ($data as $id => $d) {
		$curls[$id] = curl_init();
		$url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d;



if($starturl == "http://mcaf.ee/api/shorten") {

      $xml = array(
            'input_url' => $url
      );
      curl_setopt($curls[$id], CURLOPT_POST, 1);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, http_build_query($xml));
      curl_setopt($curls[$id], CURLOPT_URL, $starturl);

} else if($starturl == "http://u.to/") {

      $xml = array(
            'url' => $url,
            'a' => 'add'
      );
      curl_setopt($curls[$id], CURLOPT_POST, 1);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, http_build_query($xml));
      curl_setopt($curls[$id], CURLOPT_URL, $starturl);

}




else if($starturl == "http://nutshellurl.com/createnut") {

$xml = array(
'starturl' => $url,
'submitted' => 'TRUE'
);

      curl_setopt($curls[$id], CURLOPT_POST, 1);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, http_build_query($xml));
      curl_setopt($curls[$id], CURLOPT_URL, $starturl);

}

else if($starturl == "http://link.ac/") {

$xml = array(
'url' => $url,
'qmode' => 'cutlink',
'needurl' => 'undefined'
);

      curl_setopt($curls[$id], CURLOPT_POST, 1);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, http_build_query($xml));
      curl_setopt($curls[$id], CURLOPT_URL, $starturl);

}

else if($starturl == "http://u.to/") {

      $xml = array(
            'url' => $url,
            'a' => 'add'
      );
      curl_setopt($curls[$id], CURLOPT_POST, 1);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, http_build_query($xml));
      curl_setopt($curls[$id], CURLOPT_URL, $starturl);

}

else if($starturl == "http://lnk1.ru/makeurl.php") {

$xml = array(
'url' => $url,
'r_type' => 'redirect'
);
      curl_setopt($curls[$id], CURLOPT_POST, 1);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, http_build_query($xml));
      curl_setopt($curls[$id], CURLOPT_URL, $starturl);

}

else if($starturl == "http://bit.do/mod_perl/url-shortener.pl") {

$xml = array(
'url' => $url,
'action' => 'shorten',
'url2' => 'site2',
'url_stats_is_private' => '0',
'permasession' => 'shorten'
);
      curl_setopt($curls[$id], CURLOPT_POST, 1);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, http_build_query($xml));
      curl_setopt($curls[$id], CURLOPT_URL, $starturl);

}




else if($starturl == "http://catcut.net/create2.php") {

      $xml = array(
            'url' => $url,
            'submit' => '1'
      );
      curl_setopt($curls[$id], CURLOPT_POST, 0);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, http_build_query($xml));
      curl_setopt($curls[$id], CURLOPT_URL, $starturl);



} else if($starturl == "https://www.googleapis.com/urlshortener/v1/url") {

      $arrini = parse_ini_file("googl.ini");
      if($arrini['APIKEY'] != "") $starturlg = "https://www.googleapis.com/urlshortener/v1/url?key=".$arrini['APIKEY'];

      curl_setopt($curls[$id], CURLOPT_POST, 1);
      curl_setopt($curls[$id], CURLOPT_POSTFIELDS, json_encode(array("longUrl"=>$url)));
      curl_setopt($curls[$id], CURLOPT_URL, $starturlg);
      curl_setopt($curls[$id], CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

}

else curl_setopt($curls[$id], CURLOPT_URL, $starturl.$url);

		//curl_setopt($curls[$id], CURLOPT_URL, $starturl.$url);
		curl_setopt($curls[$id], CURLOPT_HEADER, 0);
		curl_setopt($curls[$id], CURLOPT_RETURNTRANSFER, 1);
		@curl_setopt($curls[$id], CURLOPT_FOLLOWLOCATION, 1);
            @curl_setopt($curls[$id], CURLOPT_MAXREDIRS, 3);

$ref = parse_url($starturl);
curl_setopt($curls[$id], CURLOPT_REFERER, $ref['scheme']."://".$ref['host']);

curl_setopt($curls[$id], CURLOPT_USERAGENT , "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36");

            curl_setopt($curls[$id], CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curls[$id], CURLOPT_SSL_VERIFYHOST, 0);

		if (is_array($d)) {
			if (!empty($d['post'])) {
				curl_setopt($curls[$id], CURLOPT_POST, 1);
				curl_setopt($curls[$id], CURLOPT_POSTFIELDS, $d['post']);
			}
		}


		curl_multi_add_handle($mh, $curls[$id]);

	}

	$running = null;

	do {
		usleep(1000);
		curl_multi_exec($mh, $running);
	}
	while($running > 0);

	foreach($curls as $id => $content) {
		$result[$id] = curl_multi_getcontent($content);
		curl_multi_remove_handle($mh, $content);
		$httpcode[$id] = curl_getinfo($content, CURLINFO_HTTP_CODE);
	}

	curl_multi_close($mh);

	$rescurl['result'] = $result;
	$rescurl['http'] = $httpcode;

	return $rescurl;

}

//preg_match_all('/(http:\/\/|https:\/\/)?([^\.\/]+\.)*([а-яА-Яa-zA-Z0-9])([а-яА-Яa-zA-Z0-9-]*)\.([а-яА-Яa-zA-Z]{2,4})([^\s]+)?/ius', $content, $match);
preg_match_all('/(http:\/\/|https:\/\/)([^\.\/]+\.)*([а-яА-Яa-zA-Z0-9])([а-яА-Яa-zA-Z0-9-]*)\.([а-яА-Яa-zA-Z]{2,4})([^\s]+)?/ius', $content, $match);

for ($i = 0; $i < count($match[0]); $i++) {

/*
	if (substr($match[0][$i], 0, 3) !== "htt") {
		$content = str_replace($match[0][$i], "http://".$match[0][$i], $content);
		$match[0][$i] = "http://".$match[0][$i];
	}
*/

	if(preg_match('/[а-яА-Я]{3,}/ius', $match[0][$i], $tmp)) {
            $encoded = $IDN->encode($match[0][$i]);
            $content = str_replace($match[0][$i], $encoded, $content);
            $match[0][$i] = $encoded;
	}
}

$numt = array_chunk($match[0], $thear);
unset($myshort);
$myshort = array();

for ($k = 0; $k < count($numt); $k++) {

	$options = array(
		CURLOPT_TIMEOUT => $timeout
	);

	$rr = multirequest($numt[$k], $shortserv);

	for ($lr = 0; $lr < (count($rr['http'])); $lr++) {

//print_r($rr);

            if(stristr($shortserv, 'mcaf.ee')) {

			$resp = @json_decode($rr['result'][$lr]);
			if($resp->status_code == 200 && $resp->status_txt == "OK") {
                        $myshort[] = $resp->data->url;
			}
			else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }





            else if(stristr($shortserv, 'nutshellurl.com')) {

                  if (preg_match('#id="nutresult" size="30" value="([^"]+)"#is', $rr['result'][$lr], $matchu)) $myshort[] = $matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }


            else if(stristr($shortserv, 'link.ac')) {

                  if (preg_match('#id="shorturl" type="text" value="([^"]+)"/>#is', $rr['result'][$lr], $matchu)) $myshort[] = $matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }

            else if(stristr($shortserv, 'lnk1.ru')) {

                  if (preg_match('#<a target=_blank href="([^"]+)">#is', $rr['result'][$lr], $matchu)) $myshort[] = $matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }

            else if(stristr($shortserv, 'bit.do')) {

                  if (preg_match('#"url_hash":"([^"]+)"#is', $rr['result'][$lr], $matchu)) $myshort[] = "http://bit.do/".$matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }

            else if(stristr($shortserv, 'qr.de')) {

                  if (preg_match('#"url" : "([^"]+)"#is', $rr['result'][$lr], $matchu)) $myshort[] = $matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }

            else if(stristr($shortserv, 'shorl.com')) {

                  if (preg_match('#Shorl: <a href="([^"]+)" #is', $rr['result'][$lr], $matchu)) $myshort[] = $matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }





            else if(stristr($shortserv, 'googleapis.com')) {

			$resp = @json_decode($rr['result'][$lr]);
			if(isset($resp->id)) {
                        $myshort[] = $resp->id;
			}
			else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }

            else if(stristr($shortserv, 'u.to')) {

                  if(preg_match('#.val\(\'([^\']+)\'\).show#is', $rr['result'][$lr], $matchu) AND $rr['http'][$lr] == 200) $myshort[] = $matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }




            else if(stristr($shortserv, 'catcut.net')) {

                  if(preg_match('#\[ "(.+?)", 1 \]#is', $rr['result'][$lr], $matchu) AND $rr['http'][$lr] == 200) $myshort[] = "http://catcut.net/".$matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }


            else if(stristr($shortserv, 'g.ua')) {

                  if(preg_match('#"b-results-link" href="([^"]+)">#is', $rr['result'][$lr], $matchu) AND $rr['http'][$lr] == 200) $myshort[] = $matchu[1];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

            }

		else if(stristr($shortserv, 'bit.ly')) {

			$resp = @json_decode($rr['result'][$lr]);
			if($resp->errorCode == 0 && $resp->statusCode == "OK") {
				$tnn = preg_match('#"shortUrl": "(.+?)"#i', $rr['result'][$lr], $mb);
				$myshort[] = $mb[1];
			}
			else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";

		}

            else if(stristr($shortserv, 'http://6url.ru/?api=')) {

                  if($rr['http'][$lr] == 200 AND $rr['result'][$lr] != "") $myshort[] = "http://6url.ru".$rr['result'][$lr];
                  else $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";


		} else {

            echo "<b>1111111111111111111111111111111111</b>";

			if($rr['http'][$lr] !== 200 OR substr($rr['result'][$lr], 0, 3) !== "htt") $myshort[] = "[|[".trim($numt[$k][$lr])."]|]";
			else $myshort[] = trim($rr['result'][$lr]);

		} 

	}

	sleep(rand($pausot, $pausdo));

}

for ($w = 0; $w < count($match[0]); $w++) {
	$content = str_replace_once($match[0][$w], $myshort[$w], $content);
	//$content = str_replace($match[0], $myshort, $content);
}

$fp = fopen("exit.txt", "w+");
fputs($fp, $content);
fclose($fp);

/*
echo $content;
print_r($match[0]);
print_r($myshort);
*/

unset($myshort);
unset($match);
unset($rr);
unset($numt);

$content = file("exit.txt");
$start = file("in.txt");

$good = "";
$bad = "";
//$rep = array("[|[", "]|]");

for ($i = 0; $i < count($content); $i++) {
	if (stristr($content[$i], '[|[')) $bad.= $start[$i];
	else $good.= $content[$i];
}

$exec_time = microtime(true) - $start_time;

echo '<center><h2>Результат работы ('.round($exec_time).' сек)</h2><table align="center" border="0" cellspacing="10" cellpadding="10">
<tr>

<td><b>Хорошие:</b><br /><textarea name="good" rows="25" cols="60">'.$good.'</textarea></td>

<td><b>С ошибками:</b><br /><textarea name="bad" rows="25" cols="60">'.$bad.'</textarea></td>

</tr>

</table><h2><a href="javascript:history.back()" onMouseOver="window.status=\'Назад\';return true">Назад</a></h2></center>';

}

else {

/*
$base = file_get_contents("base.txt");
$basebad = file_get_contents("base-bad.txt");
$basegood = file_get_contents("base-good.txt");
*/

echo '<center><h2>Сокращатель ссылок (&copy; <a href="http://vladimir-awm.ru/drugie-skripty/sokrashhatel-ssylok/" target="_blank">Vladimir-AWM</a>)</h2><table align=\"center\">
<tr><td colspan="2">

<a href="gen.php" target="_blank"><b>Генератор ссылок</b></a><br><br>

<form name="goshort" action="index.php" method="POST">

<br /><b>Текст с ссылками для сокращения:</b><br />
<textarea name="content" rows="18" cols="60"></textarea>

</td></tr><tr><td>

<br /><b>Сервис сокращения:</b></td><td>
<select size="1" name="shortserv">
  <option value="14">goo.gl</option>
  <option value="10">bit.ly</option>
  <option value="7">tinyurl.com</option>
  <option value="21">catcut.net</option>
  <option value="1">chilp.it</option>
  <option value="2">safe.mn</option>
  <option value="5">3w.md</option>
  <option value="6">qps.ru</option>
  <option value="3">clck.ru</option>
  <option value="4">metamark.net</option>
  <option value="11">mcaf.ee</option>
  <option value="12">u.to</option>
  <!-- <option value="15">g.ua</option> -->
  <!-- <option value="16">is.gd</option> -->
  <option value="17">6url.ru</option>
  <!-- <option value="18">v.gd</option> -->
  <!-- <option value="19">tinyarro.ws</option> -->
  <!-- <option value="20">urlcorta.es</option> -->
  <option value="21">nutshellurl.com</option>
  <option value="22">link.ac</option>
  <option value="23">lnk1.ru</option>
  <option value="24">bit.do</option>
  <option value="25">qr.de</option>
  <option value="26">shorl.com</option>
</select>

</td></tr><tr><td>

<br /><b>Кол-во потоков:</b></td><td>
<input name="thear" type="text" value="50">

</td></tr><tr><td>

<br /><b>Таймаут для одного потока, сек.:</b></td><td>
<input name="timeout" type="text" value="5">

</td></tr>

<tr><td>

<br /><b>Пауза между потоками, сек.:</b></td><td>
От: <input name="pausot" type="text" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
До: <input name="pausdo" type="text" value="5">

</td></tr>

<tr><td colspan="2">

<br /><br /><b>ВИМАНИЕ!</b><br /> Если используется сервис <b>bit.ly</b>, необходимо заполнить файл <b>bitly.ini</b>,
<br /> а если сервис <b>goo.gl</b>, - файл <b>googl.ini</b> (необязательно, но будет меньше лимитов)

<br /><br /><br /><input type="submit" value="Сократить"></td><td>

</form></table></center>';

}


?>

</body>

</html>