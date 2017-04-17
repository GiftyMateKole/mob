<?php
if (isset($_REQUEST['id'])){
$Id=$_REQUEST['id'];

}

include_once "func.php";

	$obj= new func();
    $result=$obj->editdel($Id);
	
	echo "Successfully Deleted";

?>