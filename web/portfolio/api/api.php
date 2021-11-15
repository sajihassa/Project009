<?php

$con = mysqli_connect("localhost","root","","portfolio");
$con->set_charset("utf8");

//$con->query("SET NAMES utf8");

if($_REQUEST["load"]=="zip_code"){
	
	$result = $con->query("select * from districts where id ='{$_GET["dis_id"]}'");

	$array = array();
	while($row = $result->fetch_object()){
		
		array_push($array, $row);
	}
	echo json_encode($array);
}


?>



