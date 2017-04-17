<?php
session_start();
	if(!isset($_SESSION['user']['Id'])){
		header("Location: login.php");
		exit();
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

.card-image {
    height: 130px;
    width: 500px;
}

.card  {
    margin: 15px 0px;
	margin-left: 300px;
	width: 500px;
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
  
  <div class="section no-pad-bot" id="index-banner" >
    <div class="container" >
	<div class="col s12 card-panel" style="margin-left:0em" >
	<center><h2 style="font-family:Comic Sans MS">Reviews</h2></center>
  <ul class="collection" >
  <?php
  include_once "func.php";

  $object= new func();
    $res=$object->review($_SESSION['user']['canteen']);
	if($res==false){
		echo "result is false";
	}else{
		$r=$object->fetch();
	while($r){
		$id=$r['F_Id'];
		echo "<li class='collection-item avatar'>";
  $star=$r['rat'];
  $x=1;
  $p=$star+1;
    echo "<span class='title' style='font-size:25px;margin-left:0em'>{$r['fName']}</span>";
	echo "</br>";
	 
    while ($x<=$star) {
        echo '<img src="uploads/favorites.png" style="width:30"/>';
        $x++;
    }
	while ($p<=5.5) {
		echo '<img src="uploads/blank.png" style="width:30"/>';
        $p++;
	}
			echo '<a href="read.php?id='.$id.'">
			<p style= "margin-left:0px">Read Reviews</p>
			</a>';
			
			
	
			$r=$object->fetch();
	}
	?>
	</ul>
	<?php
	}
?>
 </div>
  </div>
  </div>
 
            
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">

  
      </script>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  
  </body>
  </html>