
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
    <form class="col s12">
      <div class="row">   
	  <center><h3>Change password</h3></center>
	 <div class="input-field col s12">
          <input id="username" type="text" class="validate" required>
          <label for="username">Username</label>
        </div>
        
	  <div class="input-field col s12">
          <input id="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
		<div class="input-field col s12">
          <input id="rpassword" type="password" class="validate" required>
          <label for="rpassword">Retype Password</label>
        </div>
        
		
        <div class="row">
          <div class="input-field col s12">
            <center><button type="submit" class="btn waves-effect waves-teal" onclick="reg()">Update</button></center> 
		  </div>
        </div>
			    </div>

      </form>
  </div>

		<script>
		window.onload = function () {
					document.getElementById("password").onchange = validatePassword;
					document.getElementById("rpassword").onchange = validatePassword;
				}
				function validatePassword(){
					var pass2=document.getElementById("rpassword").value;
					var pass1=document.getElementById("password").value;
					if(pass1!=pass2)
						document.getElementById("rpassword").setCustomValidity("Passwords Do not Match");
					else
						document.getElementById("rpassword").setCustomValidity('');	 
				}
				
		function regComplete(){
		}			
				
		function reg(){
			var uname=document.getElementById("username").value;
			var pword=document.getElementById("password").value;
			var log=1;
			
			var ajaxPageUrl="del.php?cmd=5&uname="+uname+"&log="+log+"&pword="+pword;
			$.ajax(ajaxPageUrl,{async:true});
						alert("Password changed");

		}
				</script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
      </script>

  
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  
  </body>
  </html>	