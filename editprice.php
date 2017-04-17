<?php
session_start();
	if(!isset($_SESSION['user']['Id'])){
		header("Location: login.php");
		exit();
	}
	
	if (isset($_REQUEST['mName'])){
$mno=$_REQUEST['mno'];
$mName=$_REQUEST['mName'];
$des=$_REQUEST['des'];
$price=$_REQUEST['price'];
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
  
  </head>
<body>

<ul id="list" class="dropdown-content">
 <li><a href="logout.php">Logout</a></li>
 </ul>
  <ul id="list1" class="dropdown-content">
 <li><a href="logout.php">Logout</a></li>
 </ul>

<nav class="#37474f blue-grey darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul id="slide-out" class="side-nav fixed #37474f blue-grey darken-3" >
	  <li><div class="userView">
      <div class="background">
        <img src="uploads\menu1.jpg" id="bg">
      </div>
	  </br>
     
	  <a class="dropdown-button" data-activates="list"><p style="font-size:18px;color:white"><?php echo $_SESSION['user']['eName']?></p><i id="icon" class="material-icons right">arrow_drop_down</i></a>
      </br>
	</div></li>
	<li><a href="index.php" style="color:white;font-size:15px">Dashboard</a></li>
        <li><a href="emp.php" style="color:white;font-size:15px">Employee Management</a></li>
		<li><a href="price.php" style="color:white;font-size:15px">Prices</a></li>
		<li><a href="review.php" style="color:white;font-size:15px">Food Reviews</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav #37474f blue-grey darken-3">
        <li><div class="userView">
      <div class="background">
        <img src="uploads\menu1.jpg" id="bg">
      </div>
	  </br>
      <a class="dropdown-button" data-activates="list1"><p style="font-size:15px;color:white"><?php echo $_SESSION['user']['eName']?></p><i id="icon" class="material-icons right">arrow_drop_down</i></a>
	  </br>
	  
	</div></li>
	<li><a href="dashboard.php" style="color:white;font-size:15px">Dashboard</a></li>
		<li><a href="emp.php" style="color:white;font-size:15px">Employee Management</a></li>
		<li><a href="price.php" style="color:white;font-size:15px">Prices</a></li>	
		<li><a href="review.php" style="color:white;font-size:15px">Food Reviews</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
	<div class="col s12 card-panel" style="margin-left:8em">
      <br>
      <h5><center>Edit Price</center></h5>
	  <input id="mno" type="text" class="validate" value="<?php echo $mno ?>" hidden>
      <div class="row">        
		<div class="input-field col s12">
          <input id="mName" type="text" class="validate" value="<?php echo $mName ?>" required>
          <label for="mName">Meal Type</label>
        </div>
		<div class="input-field col s12">
          <input id="des" type="text" class="validate" value="<?php echo $des ?>">
          <label for="des">Description</label>
        </div>
		<div class="input-field col s12">
          <input id="price" type="number" class="validate" value="<?php echo $price ?>">
          <label for="price">Price</label>
        </div>
		
		<div class="row">
          <div class="input-field col s12">
            <center><button type="submit" class="btn waves-effect waves-teal" onclick="edt()">Edit</button></center> 
		  </div>
        </div>
	</div>
     </div>
</div>
 
    </div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
function edt(){
		var meal = document.getElementById('mName').value;
		var des = document.getElementById('des').value;
		var price = document.getElementById('price').value;
		var mno = document.getElementById('mno').value;

	
	 $.ajax({   
          
          type: "POST",  
          url: "ajaxedit.php",  
          cache:false,  
          data:{
		  mno:mno,
		  mname:meal,
          price:price,
		  des:des
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