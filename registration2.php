<?php


session_start();
if(!isset($_SESSION["uname"])){
	header('Location: login.php');
}
?>


<html>
<head>
  
<title>Login
</title>
   
 <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" type="text/css" href="css/styler2.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body background="registration.jpg">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BookMyFlight</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 
    
   <div id="bg">
    <br>
    <br>
 
  
<center><br><br>
<big><h1 style="color:white">  </h1></big>
</center>

<div class="login-box">
<h1>Step 2</h1>

  <form  method="post" action="reg2_val.php">

      <p>Age</p><input type="text" name="age" placeholder="Enter your age" required="" />


<p>Gender</p>
<select name="gender" ><option value="male">Male</option>
<option value="female">Female</option></select>
</select name="country"><p>Country</p><select name="country"><option value="India">India</option>
<option value="USA">USA</option>
</select>
<p>House No</p><input type="text" name="hno" placeholder="Enter your house number" required="" />
     
 
     <p>Street</p><input type="text" name="street" placeholder="Enter Streetname" required="" />

<p>City</p><input type="text" name="city" placeholder="Enter your city" required="" />


           <input  type="submit" name="validate" value="Register"/>
    
           <br>
       
        
            
            
            </form>





</div>
    </div>

</body>
</html>