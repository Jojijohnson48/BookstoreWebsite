<!DOCTYPE html>
<html>
  <head>
    <title>User SignUp</title>

  <!-- include css file here-->
    <!--<link rel="stylesheet" href="../css/SignUpStyle.css">

    <script src="phpProject\javascript\SignUp.js"></script>-->
  
  
      
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
    
    $username=$password=$firstname=$lastname=$email=$number=$cpassword=$gender="";
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $number=$_POST['number'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];
      $gender=$_POST['gender'];
      if(empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($email) || empty($number))
      {
        echo "<script>alert(\"Enter the missed-out credentials\")</script>" ;
      }
      elseif (strlen($number)<10 || strlen($number)>11) {
        echo "<script>alert(\"Enter a valid Contact Number\")</script>" ;
      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert(\"Enter a valid E-mail\")</script>" ; 
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      echo "<script>alert(\"Only letters and white space allowed in firstname and lastname\")</script>"; 
    }
     elseif (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      echo "<script>alert(\"Only letters and white space allowed in firstname and lastname\")</script>";
    }
    elseif (strcmp($password,$cpassword)!=0) {
      echo "<script>alert(\"The Entered password should be confirmed correctly\")</script>";
    }
 else {
    $sql="INSERT INTO user_details(firstname,lastname,email,contact,username,password,gender) VALUES ('$firstname','$lastname','$email',$number,'$username','$password','$gender')";
  if(!mysqli_query($connection,$sql))
  {
    echo "The user details were not inserted.Error:".mysqli_error($connection);
  }
  else{
     echo "New User account is successfully created";
     header('refresh:1;url:SignIn.php');
  }
 
 }
      
    }
    ?>
    <div class="header">
  <div class="container">
    <div class="main">
    <h2>CREATE MY ACCOUNT</h2><hr/>
 
    <form id="form_id" method="post" name="form2"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      
      <label>FIRSTNAME :</label></br>     
       <input type="text" name="firstname" placeholder="*Required" id="firstname" /><br/>
                <label> LASTNAME :</label>     
                <input type="text" name="lastname" placeholder="*Required" id="lastname" /><br/>
                <label>E-mail ID :</label>     
                <input type="email" name="email" placeholder="E-mail" id="email"/><br/>
           <label>CONTACT NUMBER :</label>      
           <input type="text" name="number" id="number" /><br/>
           <label>GENDER :</label>
            <input type="radio"  name="gender" value="male" checked id="male">Male<input type="radio"  name="gender" value="female" id="female">Female<br/><br />
           <label>USERNAME :      
            <input type="text" name="username" placeholder="*Required" id="uname" /><br>
            <label>PASSWORD :      
            <input type="password" name="password" placeholder="password" id="password"/><br/>
         <label>CONFIRM PASSWORD :      
          <input type="password" name="cpassword" placeholder="Confirm password" id="cpassword"/><br>
          <input type="submit" value="sign Up" id="submit">
            
 
      <!-- <input type="button" value="Sign Up" id="submit" onclick="formValidation()"/> -->
    </form>
    <span><b class="note">Note : </b>For further information please contact us at <a href="#" id="signup">&copy;Treeshelf Book Store</a><br/>
    </span>
    </div>
   
  </div>
</div>
 
</body>
</html>
