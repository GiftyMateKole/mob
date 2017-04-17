<?php
error_reporting(E_ALL ^ E_DEPRECATED);

session_start();
	if(!isset($_SESSION['user']['Id'])){
		header("Location: login.php");
		exit();
	}

$con=mysql_connect("localhost","root","") or die("Failed to connect");
mysql_select_db("akorno", $con); 

$can=$_SESSION['user']['canteen'];

if(!isset($_REQUEST['to'])){
	$da=date("Y-m-d");	
	$dat=date("Y-m-d");
}
else{
$da=$_REQUEST['from'];	
$dat=$_REQUEST['to'];	
}

$query = mysql_query("SELECT foodlist.fName,sum(Quantity) AS Numbers FROM c_orders inner join foodlist on foodlist.Id=c_orders.F_Id where order_date >='$da' and order_date <='$dat' and can_Id='$can' group by foodlist.fName");


						

$rows = array();
$table = array();
$table['cols'] = array(

    array('label' => 'Food', 'type' => 'string'),
    array('label' => 'Percentage', 'type' => 'number')

);

while($r = mysql_fetch_assoc($query)) {
    $temp = array();
    $temp[] = array('v' => (string) $r['fName']); 

    $temp[] = array('v' => (int) $r['Numbers']); 
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);

$que = mysql_query("SELECT mealtype.mName,sum(Quantity) AS Num FROM c_orders inner join mealtype on mealtype.Id=c_orders.M_Id where order_date >='$da' and order_date <='$dat' and c_orders.can_Id='$can' group by mealtype.mName");


						

$row = array();
$tab = array();
$tab['cols'] = array(

    array('label' => 'Meal Type', 'type' => 'string'),
    array('label' => 'Percentage', 'type' => 'number')

);

while($ro = mysql_fetch_assoc($que)) {
    $tem = array();
    $tem[] = array('v' => (string) $ro['mName']); 

    $tem[] = array('v' => (int) $ro['Num']); 
    $row[] = array('c' => $tem);
}

$tab['rows'] = $row;
$jsonTab = json_encode($tab);

$qu = mysql_query("select order_date,sum(Price) As Pr from c_orders where can_Id='$can' group by order_date");


						

$r = array();
$ta = array();
$ta['cols'] = array(

    array('label' => 'Meal Type', 'type' => 'string'),
    array('label' => 'Sales', 'type' => 'number')

);

while($Ro = mysql_fetch_assoc($qu)) {
    $te = array();
    $te[] = array('v' => (string) $Ro['order_date']); 

    $te[] = array('v' => (int) $Ro['Pr']); 
    $r[] = array('c' => $te);
}

$ta['rows'] = $r;
$jsonTa = json_encode($ta);

$q = mysql_query("select order_date,count(C_Id) As Cust from c_orders where can_Id='$can' group by order_date");


						

$rr = array();
$t = array();
$t['cols'] = array(

    array('label' => 'Meal Type', 'type' => 'string'),
    array('label' => 'Customers', 'type' => 'number')

);

while($res = mysql_fetch_assoc($q)) {
    $tempo = array();
    $tempo[] = array('v' => (string) $res['order_date']); 

    $tempo[] = array('v' => (int) $res['Cust']); 
    $rr[] = array('c' => $tempo);
}

$t['rows'] = $rr;
$jsonT = json_encode($t);
?>
<html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">
	 
	<head>
   <style>
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
<?php
  date_default_timezone_set("Africa/Accra");
$d=date("Y-m-d");
?>

		<form action="index.php" method="post">
    From: <input type="date" id="from" name="from" style="width:30;margin-top:2em" value= <?php echo $d ?> >
	 To: <input type="date" id="to" name="to" style="width:10%" value= <?php echo $d ?> >
	 <button class='btn waves-effect waves-teal' type="submit" style="margin-left:2em">Change</button>
	</form>
	<table class="columns">
	
      <tr style="margin-left:2em">
        <td><div id="piechart_3d" style="border: 1px solid #ccc;margin-left:0em;width:100">
		</div></td>
      </tr>
	  
	  <tr style="margin-left:2em">
		<td><div id="mealchart_3d"></div></td>
      </tr>
	  
	  <tr style="margin-left:2em">
	  <td><div id="curve_chart" style="margin-left:0em"></div>
	</td>
	   	  </tr>
		  
	  <tr style="margin-left:2em">
	   <td><div id="Anthony_chart_div" style="width:100"></div></td>
	  </tr>
    </table>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	 
	        google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawChart);
	        google.charts.setOnLoadCallback(mealChart);
      google.charts.setOnLoadCallback(custChart);
	        google.charts.setOnLoadCallback(lineChart);


	  
      function drawChart() {
		   var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
				   
        var options = {
          title: 'Food Purchased Today',
		  is3D: true,
		  width:400,
          height:300
        };
		
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
		
      }
	  
	  function mealChart() {
		   var data = new google.visualization.DataTable(<?php echo $jsonTab; ?>);
				   
        var options = {
          title: 'Meal Types Purchased Today',
		  width:400,
          height:300,
		  pieHole: 0.4
        };
		
        var chart = new google.visualization.PieChart(document.getElementById('mealchart_3d'));
        chart.draw(data, options);
		
      }
	  
	  function lineChart() {
        var data = new google.visualization.DataTable(<?php echo $jsonTa; ?>);

        var options = {
          title: 'Sales',
          curveType: 'function',
          legend: { position: 'bottom' },
		  width:400,
          height:300,
		  backgroundColor: '#f1f8e9',
		  animation: {"startup": true,duration: 1000,
        easing: 'inAndOut'}
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

	  
	    function custChart() {
        var data = new google.visualization.DataTable(<?php echo $jsonT; ?>);

        var options = {
          title: 'Number of Customers',
          curveType: 'function',
          legend: { position: 'bottom' },
		  width:400,
          height:300,
		  backgroundColor: '#f1f8e9',
		  animation: {"startup": true,duration: 1000,
        easing: 'inAndOut'}
        };

        var chart = new google.visualization.LineChart(document.getElementById('Anthony_chart_div'));

        chart.draw(data, options);
      }
	  
	
	 
    </script>
	

  <script src="js/init.js"></script>
<script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
	    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-aria.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>

	
    </body>
</html>
