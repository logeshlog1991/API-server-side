<?php
require 'lib/nusoap.php';
if(isset($_POST['name'])){
	$name = $_POST['name'];
	$client= new nusoap_client("http://localhost/php_soap_test_1/service.php?wsdl");
	$error = $client->getError();
	$response = $client->call("price",array("name"=>"php"));
	echo $response;

}
?>
<html>
<head>
</head>
<body>
<form action="client.php" method="post">
<input type="text" name="name">
<input type="submit" value="Send">
</form>
</body>
</html>