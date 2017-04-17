<?php
if (isset($_REQUEST['mname'])){
$des=$_REQUEST['des'];
$mname=$_REQUEST['mname'];
$price=$_REQUEST['price'];
$can=$_REQUEST['can'];
}

include_once "func.php";

	$obj= new func();
    $result=$obj->addPrice($mname,$price,$des,$can);
	
	echo "Successfully Added";

?>