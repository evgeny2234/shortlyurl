<html>

<head>
  <title>Генератор ссылок (&copy; Vladimir-AWM)</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
h2 {
  font-family: Tahoma, Arial, sans-serif;
  font-size: 22px;
}
body {
  font-family: Tahoma, Arial, sans-serif;
  font-size: 12px;
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
  width:100px;
  text-align: center;
  border: 1px solid #000000}
</style>
</head>

<body>

<?php

set_time_limit(0);
error_reporting(0);

echo '<center><h2>Генератор ссылок (&copy; <a href="http://vladimir-awm.ru/drugie-skripty/sokrashhatel-ssylok/" target="_blank">Vladimir-AWM</a>)</h2>';

function genpass($len) {
	$res = '';
	$useChars = 'abcdefghkmnpqrstuvwxyzABCDEFGHKMNPQRSTUVWXYZ12345678900123456789s';
	$useChars .= $useChars;
	for ($i = 0; $i < $len; $i++ ) {
		$res .= $useChars[mt_rand ( 0, strlen ( $useChars)-1)];
	}
	return $res;
}

if (isset($_POST['content'])) {

$content = trim($_POST['content']);
$thear = trim($_POST['thear']);
$content = explode("\n", $content);

echo '<textarea name="content" rows="18" cols="60">';

for ($i = 0; $i < count($content); $i++) {

      for ($y = 0; $y < $thear; $y++) {
            echo trim($content[$i])."#".genpass(10)."\n";
      }

}

echo '</textarea><h2><a href="javascript:history.back()" onMouseOver="window.status=\'Назад\';return true">Назад</a></h2>';

}

else {

echo '<tr><td colspan="2">

<form name="goshort" action="gen.php" method="POST">

<br /><b>Список ссылок для генерации (только URL адреса):</b><br />
<textarea name="content" rows="18" cols="60"></textarea>

</td></tr><tr><td>

<br /><br><b>Кол-во:</b></td><td>
<input name="thear" type="text" value="50">

</td></tr>

<tr><td colspan="2">

<br /><br /><br /><input type="submit" value="Сгенерировать"></td><td>

</form></table></center>';

}


?>

</body>

</html>