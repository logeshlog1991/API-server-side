<?php
//-----process the client url------//
	//$name = $_GET['name'];
header("content-type:application/json");
include 'function.php';

if(!empty($_GET['name'])){

	$name = $_GET['name'];

	$price =get_price($name);

	//
	if(empty($price)){
		//book not found
		deliver_response(404,"book not found",NULL);

	}else{
		//response the data
		deliver_response(200,"price",$price);
	}

}else{
	//---throw the error---//
	deliver_response(400,"Bad Authountication",NULL);
}
//------deliver response function------------//
function deliver_response($status,$status_message,$data){
	header("HTTP/1.1 $status $status_message");
	//convert the message to array----------
	$response['status'] = $status;
	$response['status_message']=$status_message;
	$response['data']=$data;

	//encode to json format---------
	$json_encode = json_encode($response);
	echo $json_encode;
}
?>