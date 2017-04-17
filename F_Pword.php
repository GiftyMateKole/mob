<html>
	<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>  -->
   
   <head>
   
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
		    width : 400px;	
			height : 400px;	
			opacity: 0.8;
			color:white;
		 } 
</style>
	</head>
	
	<body>
	

	<div class="card-panel  grey darken-4" id="card">
	<form class="col s12" action="mail.php" method="post">
      <div class="row">
	  <center><h3>Reset Password</h3></center>
	  <div class="input-field col s12">
          <input class="validate" required id="email" name="email" type="text">
          <label for="email">Email</label>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <center><button type="submit" class="btn waves-effect waves-teal">Send password reset email</button></center> 
		  </div>
        </div>
      </form>
    </div>
			<a href="login.php">Back to Login Page</a>

	</div>
	
	
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
      </script>

  
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  
  </body>
  </html>	