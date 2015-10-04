<?php
function get_price($find){
	$books = array(
		"java" => 200,
		"php" => 300,
		".net" =>400
		);

	foreach ($books as $book => $price) {
		if($book==$find){
			return $price;
			break;
		}
	}
}
?>