<?php

if (isset($_POST["name"]) 
	&& isset($_POST["email"])
	&& isset($_POST["from"])
	&& isset($_POST["to"])
	&& isset($_POST["tel"])
	&& isset($_POST["date"])
	&& isset($_POST["time"])
	&& isset($_POST["comfort"])
	&& isset($_POST["adults"])
	&& isset($_POST["child"])
	&& isset($_POST["message"])){
    $result = array(
    	'name' => $_POST["name"],
    	'email' => $_POST["email"],
    	'from' => $_POST["from"],
    	'to' => $_POST["to"],
		'tel' => $_POST["tel"],
    	'date' => $_POST["date"],
    	'time' => $_POST["time"],
    	'comfort' => $_POST["comfort"],
    	'adults' => $_POST["adults"],
    	'child' => $_POST["child"],
    	'message' => $_POST["message"]); 
    echo json_encode($result);
	
	$file = fopen("file.txt","at");
    foreach ($result as $key => $value) {
		fwrite($file,"$key\t "." => "."\t$value\n");
	}
	fwrite($file,"\n");
	fclose($file);
}
?>