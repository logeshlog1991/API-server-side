<?php
$data = $_POST['name'];

$url = "http://localhost/php_rest_api_1/index.php?name=$data";

$client = curl_init($url);

curl_setopt($client,CURLOPT_RETURNTRANSFER,1);

$response = curl_exec($client);
//---json data
echo $response;
echo "<br>";
$result = json_decode($response);
print_r($result);
?>
<form action="rest_consume.php" method="post">
	<input type="text" name ="name">
	<input type="submit" value="send">
</form>
<?php
echo "book price is :".$result->data;
?>