<?php
require 'function.php';
require 'lib/nusoap.php';
$server = new nusoap_server;
$server->configureWSDL("demo","urn:demo");
$server->register(
	"price",
	array("name"=>"xsd:string"),
	array("return"=>"xsd:integer")
	);
	
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);

?>