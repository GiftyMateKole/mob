<?php
if (isset($_REQUEST['ename'])){
$eno=$_REQUEST['eno'];
$eName=$_REQUEST['ename'];
$email=$_REQUEST['email'];
}

include_once "func.php";

	$obj= new func();
    $result=$obj->editemp($eno,$eName,$email);
	
	echo "Successfully Edited";

?>