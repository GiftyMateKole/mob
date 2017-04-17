<?php
include_once "func.php";
$obj= new func();
    $result=$obj->canteen();

	if($result==false){
		echo "result is false";
	}else{
		$row=$obj->fetch();
	}
		
		
		
?>

	<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet"  href="css/jquery.mobile.structure.css" />
		<link rel="stylesheet" href="css/jquery.mobile.theme.css" />
		
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>  -->
	  
   
   <head>
   <script>
         $(document).ready(function() {
         $('select').material_select();
      });
      </script>
	  <style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
    background-image: url("uploads/backg.jpg");
}

#card {
		    width : 300px;	
			height : 450px;	
			opacity: 0.8;
			color:white;
		 } 
</style>
	</head>
	
	<body>
	

	<div class="card-panel  grey darken-4" id="card">
	<form class="col s12" action="login.php" method="post">
      <div class="row">
	  <center><h3>Sign In</h3></center>
	  <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" required id="username" name="username" type="text">
          <label for="username">Username</label>
        </div>
        
	  <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
            <input id="pword" name="pword" type="password" class="validate" required>
            <label for="pword">Password</label>
        </div>
        
		<div class="input-field col s12">
          <i class="material-icons prefix">local_dining</i>
            <select name="canteen">
			<option value='' disabled='disabled' selected='selected'>Choose your option</option>
			 <?php
			 while($row){
             echo   "<option value='{$row['Id']}'>{$row['canName']}</option>";
                 $row=$obj->fetch();
			 }
			 ?>
  </select>
        </div>
		
        <div class="row">
          <div class="input-field col s12">
            <center><button type="submit" class="btn waves-effect waves-teal">Login</button></center> 
		  </div>
        </div>
      </form>
    </div>
	<a href="F_Pword.php">Forgot password?</a>
  </div>

<?php
if(isset($_REQUEST['username'])){
			$mysqli= new mysqli('localhost','root','','akorno');

			
			if($mysqli->connect_errno!=0){
				echo "error authenticating-connection {$mysqli->connect_error}";
				exit();
			}
			
			
			$username=$_REQUEST['username'];
			$pword=$_REQUEST['pword'];
			$canteen=$_REQUEST['canteen'];

			
			$query="select employees.Id,eName,username,Password,email,Login,category,employees.canteen,canteens.pic from employees join canteens on employees.canteen=canteens.Id WHERE username='$username' and canteen='$canteen' and Password='$pword'";
			
			$result=$mysqli->query($query);
			
			if(!$result){
				echo "error authenticating";
				header("location:login.php");
			}
			
			$row=$result->fetch_assoc();
			
			if(!$row){
				
			}
			
			
			
			else{
			
				if($row['Login']== 0){
				header("location:cPword.php");
			}
			else{
					session_start();
				$_SESSION['user']=$row;
				header("location: index.php");
				
			}
				
				
		}
}
		?>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">

      </script>

  
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  
  </body>
  </html>	