<?php
if (isset($_REQUEST['id'])){
$Id=$_REQUEST['id'];

}

include_once "func.php";

	$obj= new func();
    $result=$obj->editdelete($Id);
	
	echo "Successfully Deleted";

?>