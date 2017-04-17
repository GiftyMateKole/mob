<?php
if (isset($_REQUEST['mname'])){
$mno=$_REQUEST['mno'];
$mname=$_REQUEST['mname'];
$des=$_REQUEST['des'];
$price=$_REQUEST['price'];
}

include_once "func.php";

	$obj= new func();
    $result=$obj->editprice($mno,$mname,$des,$price);
	
	echo "Successfully Edited";

?>