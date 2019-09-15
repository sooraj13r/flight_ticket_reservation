

<html>
<head>
  
<title>Registration
</title>
   
 <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" type="text/css" href="css/styler.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
<h1>Registration</h1>

  <form  method="post" action="reg_val.php">

      <p>Name</p><input type="text" name="name" placeholder="Enter your Name" required="" />


<p>Email</p><input type="text" name="email" placeholder="example@gmail.com" required="" />
<p>Phone</p><input type="text" name="phone" placeholder="Enter phone number" required="" />
     
 
     <p> Username</p><input type="text" name="uname" placeholder="Enter username" required="" />

<p>Password</p><input type="password" name="pass" placeholder="Enter a password" required="" />

           <input  type="submit" name="validate" value="Register"/>
    
           <br>
       
        
            
            
            </form>





</div>
    </div>
</body>
</html>