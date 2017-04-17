<?php
include_once("adb.php");

class func extends adb{
	function func(){
	}
	
	
	
	function all($id){
		$strQuery="select * from foodlist where Id='$id'";
		return $this->query($strQuery);
	}
	
	function meal_cat(){
		$strQuery="select * from meal_cat";
		return $this->query($strQuery);
	
	}
	
	function canteen(){
		$strQuery="select * from canteens";
		return $this->query($strQuery);
	
	}
	
	function search($sr,$can){
		$strQuery="select * from foodlist where fName like '%$sr%' and canteen='$can'";
		return $this->query($strQuery);
	
	}
	
	function food($cat,$can){
		$strQuery="select * from foodlist where category='$cat' and canteen='$can'";
		return $this->query($strQuery);
	
	}
	
	function P_orders($can){
		$strQuery="select customers.cName,foodlist.fName,mealtype.mName,p_orders.Quantity,
					p_orders.C_Id,p_orders.F_Id,p_orders.M_Id,p_orders.Id from p_orders
					join customers on customers.Id=p_orders.C_Id join foodlist on foodlist.Id=
					p_orders.F_Id join mealtype on mealtype.Id=p_orders.M_Id where p_orders.can_Id='$can'";
		return $this->query($strQuery);
	
	}
	
	function Con_orders($can){
		$strQuery="select c_orders.Id,c_orders.Quantity,customers.cName,c_orders.C_Id,foodlist.fName,employees.eName from c_orders
					join customers on customers.Id=c_orders.C_Id join foodlist on foodlist.Id=
					c_orders.F_Id join employees on employees.Id=c_orders.E_Id where can_Id='$can'";
		return $this->query($strQuery);
	
	}
	
	function mn($cat,$can){
		$strQuery="select * from menu where category='$cat' and can_Id='$can'";
		return $this->query($strQuery);
	
	}
	
	function mc($id){
		$strQuery="select * from foodlist where Id='$id'";
		return $this->query($strQuery);
	
	}
	
	function Smenu($id){
		$strQuery="select * from menu where F_Id='$id'";
		return $this->query($strQuery);
	
	}
	
	function del($id,$can){
		$strQuery="delete from foodlist where Id='$id' and canteen='$can'";
		return $this->query($strQuery);
	}
	
	function del1 ($id,$can){
		$strQuery="delete from menu where F_Id='$id' and can_Id='$can'";
		return $this->query($strQuery);
	
	}
	
	function pDel ($id){
		$strQuery="delete from p_orders where Id='$id'";
		return $this->query($strQuery);
	
	}
	
	function menu($id,$cat,$can){
		
		$strQuery="insert into menu set F_Id='$id',
										category='$cat',
										can_Id='$can'
										";
		
	    $result=$this->query($strQuery);
		return $result;
	}

	function update($name,$des,$id,$cat,$can){
		
		$strQuery="update foodlist set 	fName='$name', 
										Description='$des',
										Category='$cat'
										 where Id='$id' and canteen='$can'";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
	
	
	function c_orders($cid,$fid,$eid,$quant,$dat,$can,$mid){
		
		$strQuery="insert into c_orders set C_Id='$cid',
											F_Id='$fid',
											E_Id='$eid',
											Quantity='$quant',
											order_date='$dat',
											can_Id='$can',
											M_Id='$mid'
										";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
		function reg($uname,$name,$cat,$pword,$count,$email,$can){
		
		$strQuery="insert into employees set eName='$name',
											username='$uname',
											category='$cat',
											Password='$pword',
											Login='$count',
											email='$email',
											canteen='$can'
										";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
	function upd($uname,$pword,$log){
		
		$strQuery="update employees set  Password='$pword', 
										Login='$log'
										 where Username='$uname'";
		
	    $result=$this->query($strQuery);
		return $result;
	}

	function mealT($id){
		$strQuery="select * from mealtype where can_Id='$id'";
				return $this->query($strQuery);
	}
	
	function decline($id){
		$strQuery="delete from p_orders where Id='$id'";
		return $this->query($strQuery);
	}
	
	function review($cid){
		$strQuery="select review.F_Id,foodlist.fName,review.can_Id, foodlist.Id, avg(review.rating) AS rat, review.reviews from review join foodlist on foodlist.Id=review.F_Id where can_Id='$cid' group by F_Id ";
		return $this->query($strQuery);
	}
	
	function comm($cid,$id){
		$strQuery="select reviews from review where F_Id='$id' and can_Id='$cid'";
		return $this->query($strQuery);
	}
	
	function lis($can){
		$strQuery="select * from employees where canteen='$can'";
		return $this->query($strQuery);
	}
	
	function Alists(){
		$strQuery="select * from employees where category='Admin'";
		return $this->query($strQuery);
	}
	
	function editemp($eno,$ename,$email){
		$strQuery="update employees set eName='$ename', email='$email' where Id='$eno'";
		
		$result=$this->query($strQuery);
		return $result;
	}
	
	function editdel ($id){
		$strQuery="delete from employees where Id='$id'";
		return $this->query($strQuery);
	
	}
	
	function fcm($cid){
		$strQuery="select fcm from customers where Id='$cid'";
		return $this->query($strQuery);
	}
	
	function upc($fcm,$id){
		$strQuery="update canteens set fcm='$fcm' where Id='$id'";
		
		$result=$this->query($strQuery);
		return $result;
	}
	
	function editprice($mno,$mname,$des,$price){
		$strQuery="update mealtype set mName='$mname', description='$des', Price='$price' where Id='$mno'";
		
		$result=$this->query($strQuery);
		return $result;
	}
	
	
		function addPrice($mname,$price,$des,$can){
		
		$strQuery="insert into mealtype set mName='$mname',
											Price='$price',
											description='$des',
											can_Id='$can'
										";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
	function editdelete ($id){
		$strQuery="delete from mealtype where Id='$id'";
		return $this->query($strQuery);
	
	}
	
	function can($name,$pic){
		
		$strQuery="insert into canteens set canName='$name',pic='$pic'
										";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
	function cant(){
		$strQuery="select Id,canName from canteens";
		return $this->query($strQuery);
	}
	
	function Areg($uname,$name,$cat,$pword,$count,$email,$can){
		
		$strQuery="insert into employees set eName='$name',
											username='$uname',
											category='$cat',
											Password='$pword',
											Login='$count',
											email='$email',
											canteen='$can'
										";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
	function candel ($id){
		$strQuery="delete from canteens where Id='$id'";
		return $this->query($strQuery);
	
	}
	
	function chart($da){
		$strQuery="SELECT foodlist.fName,sum(Quantity) AS Numbers FROM c_orders inner join foodlist on foodlist.Id=c_orders.F_Id where order_date ='$da' and can_Id=1 group by foodlist.fName";
		return $this->query($strQuery);
	}
	
	}

?>

  