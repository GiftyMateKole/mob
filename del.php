<?php
$cmd=$_REQUEST['cmd'];

	switch($cmd){
		case 1:
			del();		
			break;
			
		case 2:
			upload();		
			break;
		
		case 3:
			add();		
			break;
			
		case 4:
			reg();		
			break;
		
		case 5:
			update();		
			break;
			
		case 6:
			decline();		
			break;
			
		case 7:
			addC();		
			break;
			
		case 8:
			adreg();		
			break;
		
		default:
			echo "wrong cmd";
			break;
	}
	
	
	function del(){
		
		include_once("func.php");
		$obj=new func();
		$ob=new func();
		
		$id=$_REQUEST['id'];
		$can=$_REQUEST['can'];
		
		$ob->del1($id,$can);
		$obj->del($id,$can);
	}
	
	function upload(){
		
		include_once "func.php";
	
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$des=$_REQUEST['des'];
	$file=$_REQUEST['file'];
	$price=$_REQUEST['price'];
	$type=$_REQUEST['type'];
	$size=$_REQUEST['size'];
	$cat=$_REQUEST['cat'];
	
	
	
	$obj=new func();
		$result=$obj->menu($file,$type,$size,$name,$des,$price,$id,$cat);
	
	}
	
	function add(){
		
		include_once("func.php");
		$obj=new func();
		$ob=new func();
		
		$cid=$_REQUEST['cid'];
		$fid=$_REQUEST['fid'];
		$eid=$_REQUEST['eid'];
		$id=$_REQUEST['id'];
		$quant=$_REQUEST['quant'];
		$can=$_REQUEST['can'];
		$mid=$_REQUEST['mid'];


		
		$obj->c_orders($cid,$fid,$eid,$quant,date("Y-m-d"),$can,$mid);
		$ob->pDel($id);
		 
		 echo "Order Confirmed";
		// header('Location: orders.php');
	}

	function reg(){
		
		include_once("func.php");
		$obj=new func();
		
		$dot=".";
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$email=$_REQUEST['email'];
		$can=$_REQUEST['can'];
		$uname=strtolower($fname.$dot.$lname);
		$cat="Employee";
		$pword="employee";
		$count=0;
		
		$s=" ";
		$name=$fname.$s.$lname;

		$obj->reg($uname,$name,$cat,$pword,$count,$email,$can);
		
	}
	
	function adreg(){
		
		include_once("func.php");
		$obj=new func();
		
		$dot=".";
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$email=$_REQUEST['email'];
		$can=$_REQUEST['can'];
		$uname=strtolower($fname.$dot.$lname);
		$cat="Admin";
		$pword="admin";
		$count=0;
		
		$s=" ";
		$name=$fname.$s.$lname;

		$obj->Areg($uname,$name,$cat,$pword,$count,$email,$can);
		
	}
	
	function update(){
		
		include_once("func.php");
		$obj=new func();
		
		$uname=$_REQUEST['uname'];
		$pword=$_REQUEST['pword'];
		$log=$_REQUEST['log'];
		

		$obj->upd($uname,$pword,$log);


	}
	
	function decline(){
		
		include_once("func.php");
		$ob=new func();
		
		$id=$_REQUEST['id'];
		
		$ob->decline($id);
	}
	
	function addC(){
		
		include_once("func.php");
		$obj=new func();
		
		$name=$_REQUEST['name'];
		$pic="canteen.jpg";

		
		$obj->can($name,$pic);
		 
		 echo "Order Confirmed";
		// header('Location: orders.php');
	}
?>
