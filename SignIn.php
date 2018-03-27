<html>
  <head>
    <title>User Login</title>
   
	<!-- include css file here-->
    <!--<link rel="stylesheet" href="../css/SigninStyle.css"/>-->
   

	<script type="text/javascript">
	function credentials(){
		alert("Enter the username and password correctly(if you are an existing user) or SIgn UP(if you are a new user)");
	}
  </script>
	
  </head>
  <body>

  	 <style>/* below line is used for online google font */
@import url(http://fonts.googleapis.com/css?family=Raleway);
* {
	margin: 0;
	padding: 0;
}
 
h2{
 background-color: #E81166 ;
 padding: 30px 35px;
 margin: -10px -50px;
 text-align:center;
 border-radius: 10px 10px 0 0;
 opacity: 0.01px;
}
 
hr{
 margin: 10px -50px;
 border: 0;
 border-top: 1px solid #ccc;
 margin-bottom: 40px;
}
 
div.container{
	top: 180px;
 width: 500px;
 height: 610px;
 margin:35px auto;
 font-family: 'Raleway', sans-serif;
}
 
div.main{
 
 margin-left: 40px;
 width: 300px;
 padding: 10px 50px 25px;
 border: 5px solid;
 border-radius: 10px;
 font-family: 'Raleway';
 float:left;
 margin-top:50px;
}
 
input[type=text],input[type=password]{
 width: 100%;
 height: 40px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: #4f4f4f;
 font-size: 16px;
 border-radius: 5px;
}

label{
 color: #333;
 /*text-shadow: 0 1px 0 #fff;*/
 font-size: 14px;
 font-weight: 900;
}
 
input[type=submit]{
 font-size: 16px;
 /*background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);*/
 border: 1px solid #e5a900;
 color: #4E4D4B;
 font-weight: bold;
 cursor: pointer;
 width: 100%;
 border-radius: 5px;
 padding: 10px 0;
 outline:none;
 background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
 
}
 
input[type=submit]:hover{
 /*background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
 font-size: 16px;
 border: 1px solid #e5a900;
 color: #4E4D4B;
 font-weight: bold;
 cursor: pointer;
 width: 100%;
 border-radius: 5px;
 padding: 10px 0;
 outline:none;*/
 background: #76FF03;
}

body {
	margin: 0;
	padding: 0;
	background: url(http://getwallpapers.com/wallpaper/full/1/b/a/166020.jpg);
	
	height:800px;width: 100%;
	background-position:center center;
	background-repeat: no-repeat;
	background-attachment: fixed;

}
span {
	color:#333;
}
 a{
	color: #0429F8;

}
</style>

  	<?php

  	include('dbconfig.php');

  	$usernameErr=$passErr="";
  	$username=$password="";
  	if($_SERVER['REQUEST_METHOD']=="POST")
  	{
  		$username=$_POST['username'];
  		$password=$_POST['password'];
  		if(empty($username) || empty($password))
  		{
  			echo "<script>alert(\"Enter the Username and Password\")</script>" ;
  		}
  		else{
  			$result=mysqli_query($connection,"SELECT * FROM USER_DETAILS");
  			while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
  				if(strcmp($row["username"],$username)==0 && strcmp($row["password"],$password)==0)
  				{
  					
  					header("location:products.php");
  				}
  				
  			}
  			
  		} 
  		
  	}
  	?>

  	<div class="header">
	<div class="container">
	  <div class="main">
		<h2>SIGN IN</h2><hr/>
 
		<form id="form_id" method="post" name="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		  <label>User Name :</label></br>
		  <input type="text" name="username" id="username" /><?php echo $usernameErr ?></br>
 
		  <label>Password :</label></br>
		  <input type="password" name="password" id="password" /><?php echo $passErr ?></br>
 
		  <input type="submit" value="Login" id="submit"/>
		</form>
		<span><b class="note">Note : </b>For the New Users Please Click on <a href="SignUp.php" id="signup">SignUp</a><br/>
		</span>
	  </div>
	 
	</div>
</div>
 </body>
</html>