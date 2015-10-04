<?php
echo "hai";
$handle = curl_init();

/*curl_setopt($handle,CURLOPT_URL,'http://location');

curl_setopt($handle,CURL, value)*/

$key = $_POST['key'];

die();
curl_setopt_array(
	$handle,
	array(
		CURLOPT_URL=>'https://ajax.googleapis.com/ajax/services/search/news?v=1.0&q='.$key,
		CURLOPT_POST=>false
		);
	);

?>
<form action="index.php" method="POST">
<input type="text" name="key">
<input type="submit" value="Send">
</form>