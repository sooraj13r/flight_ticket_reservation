<html>
 <head>
  <title>Live Inline Update data using X-editable with PHP and Mysql</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="	js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
  
 </head>
<body background="login.png">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">BookMyFlight</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="user_home.php">Back</a></li>
       <li><a href="index.html">Home</a></li>
           <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  <div class="container">
   <h1 align="center">My Profile</h1>
   
<h3 align="center" style="color:red">Click contents to edit</h3>
   <table class="table table-bordered table-striped">
    <thead>
     <tr>
  
     </tr>
    </thead>
    <tbody id="employee_data">
    </tbody>
   </table>
 </body>
</html>



<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 function fetch_employee_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   dataType:"json",	
   success:function(data)
   {
    for(var count=0; count<data.length; count++)
    {

 var html_data = '<tr> <th width="10%">ID</th><td>'+data[count].Contact_Id+'</td></tr>';
     html_data += '<tr><th width="40%">Name</th><td data-name="Passenger_Name" class="Passenger_Name" data-type="text" data-pk="'+data[count].id+'">'+data[count].Passenger_Name+'</td></tr>';
     html_data += '<tr><th width="10%">Email Address</th><td data-name="Email_Address" class="Email_Address" data-type="text" data-pk="'+data[count].Contact_ID+'">'+data[count].Email_Address+'</td></tr>';
     html_data += '<tr><th width="30%">Phone Number</th> <td data-name="Phone_Number" class="Phone_Number" data-type="text" data-pk="'+data[count].Contact_ID+'">'+data[count].Phone_Number+'</td></tr>';
   
 html_data += '<tr><th width="10%">House No</th><td data-name="House_No" class="House_No" data-type="text" data-pk="'+data[count].Contact_ID+'">'+data[count].House_No+'</td></tr>';
 html_data += '<tr><th width="10%">Street</th><td data-name="Street" class="Street" data-type="text" data-pk="'+data[count].Contact_ID+'">'+data[count].Street+'</td></tr>';
 html_data += '<tr><th width="30%">City</th> <td data-name="City" class="City" data-type="text" data-pk="'+data[count].Contact_ID+'">'+data[count].City+'</td></tr>';



 html_data += '<tr><th width="30%">Age</th> <td data-name="Age" class="Age" data-type="text" data-pk="'+data[count].Contact_ID+'">'+data[count].Age+'</td></tr>';
 html_data += '<tr><th width="10%">Gender</th><td data-name="Gender" class="Gender" data-type="select" data-pk="'+data[count].Contact_ID+'">'+data[count].Gender+'</td></tr>';
 html_data += '<tr><th width="30%">Username</th> <td data-name="User_Name" class="User_Name" data-type="text" data-pk="'+data[count].Contact_ID+'">'+data[count].User_Name+'</td></tr>';
 html_data += '<tr><th width="30%">Password</th> <td data-name="Password" class="Password" data-type="text" data-pk="'+data[count].Contact_ID+'">'+data[count].Password+'</td></tr>';

 html_data += '<tr><th width="10%">Country</th><td data-name="Country" class="Country" data-type="select" data-pk="'+data[count].Contact_ID+'">'+data[count].Country+'</td></tr>';
     $('#employee_data').append(html_data);
    }
   }
  })
 }
 
 fetch_employee_data();
 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.Passenger_Name',
  url: "update.php",
  title: 'Passenger_Name',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
$('#employee_data').editable({
  container: 'body',
  selector: 'td.Email_Address',
  url: "update.php",
  title: 'Email Address',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.Phone_Number',
  url: "update.php",
  title: 'Phone Number',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.House_No',
  url: "update.php",
  title: 'House Number',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
  $('#employee_data').editable({
  container: 'body',
  selector: 'td.Street',
  url: "update.php",
  title: 'Street',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
$('#employee_data').editable({
  container: 'body',
  selector: 'td.City',
  url: "update.php",
  title: 'City',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });



 $('#employee_data').editable({
  container: 'body',
  selector: 'td.Age',
  url: "update1.php",
  title: 'Age',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
   var regex = /^[0-9]+$/;
   if(! expression.test(value))
   {
    return 'Numbers only!';
   }
  }
 });

$('#employee_data').editable({
  container: 'body',
  selector: 'td.Gender',
  url: "update1.php",
  title: 'Gender',
  type: "POST",
  dataType: 'json',
  source: [{value: "Male", text: "Male"}, {value: "Female", text: "Female"}],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });



 $('#employee_data').editable({
  container: 'body',
  selector: 'td.Password',
  url: "update1.php",
  title: 'Password',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });


 




 $('#employee_data').editable({
  container: 'body',
  selector: 'td.Country',
  url: "update.php",
  title: 'Country',
  type: "POST",
  dataType: 'json',
  source: [{value: "India", text: "India"}, {value: "USA", text: "USA"}],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });

 
});
</script>
			