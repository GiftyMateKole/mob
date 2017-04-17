
<?php
session_start();
	if(!isset($_SESSION['user']['Id'])){
		header("Location: login.php");
		exit();
	}
	
if (isset($_REQUEST['eName'])){
$eno=$_REQUEST['eno'];
$eName=$_REQUEST['eName'];
$email=$_REQUEST['email'];
}
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>  -->
   
   <head>
  
<style>

form {
    
    vertical-align: middle;
	
}

 /* The Overlay (background) */
.overlay {
    /* Height & width depends on how you want to reveal the overlay (see JS below) */   
    height: 100%;
    width: 0;
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    background-color: rgb(0,0,0); /* Black fallback color */
    background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
    overflow: auto; /* Disable horizontal scroll */
    transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
    position: relative;
    top: 25%; /* 25% from the top */
    width: 100%; /* 100% width */
    margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
	}

/* The navigation links inside the overlay */
.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block; /* Display block instead of inline */
    transition: 0.3s; /* Transition effects on hover (color) */
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

/* Position the close button (top right corner) */
.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

/* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
@media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
    }
}

#srch{
	width:600px;
}

#bg{
	width:300px;

}

#icon{
	margin-top:-75px;
}

.material-icons {
  color: white;
  }
 
 
</style>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js">
	  $(".button-collapse").sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
	  </script>
  </head>
<body>

<ul id="list" class="dropdown-content">
 <li><a href="logout.php">Logout</a></li>
 </ul>
  <ul id="list1" class="dropdown-content">
 <li><a href="logout.php">Logout</a></li>
 </ul>

<nav class="#37474f blue-grey darken-3" role="navigation">
  <center><img src="uploads\<?php echo $_SESSION['user']['pic']?>" style="height:60; background-color:white"></center>

    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      

      <ul id="nav-mobile" class="side-nav #37474f blue-grey darken-3">
        <li><div class="userView">
      <div class="background">
        <img src="uploads\menu1.jpg" id="bg">
      </div>
	  </br>
      <a class="dropdown-button" data-activates="list1"><p style="font-size:15px;color:white"><?php echo $_SESSION['user']['eName']?></p><i id="icon" class="material-icons right">arrow_drop_down</i></a>
	  </br>
	  
	</div></li>
	<li><a href="index.php" style="color:white;font-size:15px">Dashboard</a></li>
		<li><a href="emp.php" style="color:white;font-size:15px">Employee Management</a></li>
		<li><a href="price.php" style="color:white;font-size:15px">Prices</a></li>
		<li><a href="review.php" style="color:white;font-size:15px">Food Reviews</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons" style="margin-top:-2.5em">menu</i></a>
    </div>
  </nav>
  <div id="msg"></div>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
	<div class="card-panel" style="width:350; margin-left:0em">
      <br><br>
        <center><h4>Edit</h4></center>
	    <input  id="eno" name="eno" type="text" value="<?php echo $eno ?>" hidden>
        <div class="row margin">
          <div class="input-field col l12 s12">
        <input class="validate" required id="ename" name="ename" type="text" value="<?php echo $eName ?>">
            <label for="name">Name</label>
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col l12 s12">
          <input class="validate" required id="email" name="email" type="email" value="<?php echo $email ?>">
            <label for="quant">Email</label>
          </div>
        </div>
		
        <div class="row">
          <div class="input-field col s12">
            <center><button name="btn-upload" class="btn waves-effect waves-teal" onclick="add()">Edit</button></center> 
		</div>
        </div>
        

      <br><br>
	</div>
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <!-- <footer class="page-footer orange"> -->
    <!-- <div class="container"> -->
      <!-- <div class="row"> -->
        
      <!-- </div> -->
    <!-- </div> -->
    
  <!-- </footer> -->


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
	function add(){
		var ename = document.getElementById('ename').value;
		var email = document.getElementById('email').value;
		var eno = document.getElementById('eno').value;
	
	 $.ajax({   
          
          type: "POST",  
          url: "ajaxe.php",  
          cache:false,  
          data:{
		  eno:eno,
		  ename:ename,
          email:email
		  },
          dataType: "html",       
          success: function(response)  
          {   
		  Materialize.toast(response, 4000,'rounded')
          }   
        });
	}
      </script>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

