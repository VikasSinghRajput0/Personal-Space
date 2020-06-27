<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration From</title>
  
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="validation.js"></script>


<style >
body{


}
.a
{
padding:2%;
 font-family: "Times New Roman", Times, serif;

}.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: ;
   color: ;
   text-align: center;
   height:8%
} 

</style>

</head><br>
<body color="red">

<div class="container-fluid" class="a">
<div class="row bg-danger">

 <div class="page-header" >
<h1 align="center"><B>REGISTRATION FORM </B></h1>
</div></div><br>
<!--  define a row -->
<div class="row">
<!--  divided the row in columns col3 col6 col3 -->
<div class="col-xs-2"></div>
 <div class="col-xs-8 bg-danger"> 
 

 <form  class="a"action="insert.php" name="register"  onsubmit="return validateForm()" method="post" color="red" margin="8px">
 <div class="form-row">
   <div class=" form-group col-xs-6">
      <label for="firstname">FIRST NAME:</label>
      <input type="text" class="form-control" id="firstname" placeholder="FirstName" name="firstname">
   		
   </div>
    <div class=" form-group col-xs-6">
      <label for="lastname">LAST NAME:</label>
      <input type="text" class="form-control" id="lastname" placeholder="LastName" name="lastname">
   </div>
   <!-- error row -->
   <div class="row">
   <div class="col-xs-6"><p class="error" id="fnameErr"></p></div>
    <div class="col-xs-6"><p class="error" id="lnameErr"></p></div></div>
    
    </div>
    <div class="form-row">
    <div class=" form-group col-xs-6">
    <label for="phone">PHONE:</label>
      <input type="text" class="form-control" id="phoneno" placeholder="phone" name="phoneno">
  </div>
   <div class=" form-group col-xs-6">
      <label  for="email">EMAIL:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
     <!-- error row -->
   <div class="row">
   <div class="col-xs-6"><p class="error" id="phoneErr"></p></div>
    <div class="col-xs-6"><p class="error" id="emailErr"></p></div></div>
    </div>
    
     <div class="form-row">
     <div class=" form-group col-xs-6">
      <label  for="password">PASSWORD:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class=" form-group col-xs-6">
      <label  for="pwd">CONFIRM PASSWORD:</label>
      <input type="password" class="form-control" id="confirmpwd" placeholder="Enter password" name="confirmpwd">
    </div>
     <div class="row">
   <div class="col-xs-6"><p class="error" id="pwdErr"></p></div>
    <div class="col-xs-6"><p class="error" id="confirmpwdErr"></p></div></div>
    </div>
      
    <div class="form-inline form-group ">
     <label>Type:</label> 
    <label class="radio-inline">
      <input type="radio" name="type" value="doctor" checked>DOCTOR
    </label>
    <label class="radio-inline">
      <input type="radio" name="type" value="patient">PATIENT
    </label>
    </div>
    
   
   <div class="form-row">
    <div class=" form-group col-sm-6">
    <button type="submit" class="btn btn-info  form-control"  value="submit">SIGNUP</button> </div>
       <div class=" col-sm-2">
     </div>
     
  
  </div>
   <div class="form-row">
    <div class=" col-sm-3">
     </div>
      <div class=" col-sm-6">
<a class="btn btn-danger form-control"   href="login.php">LOGIN</a></div>
   <div class=" col-sm-3">
     </div>
    </div> </form>
      </div>
    
     </div>
 <div class="col-xs-2"></div>
</div>
 <br>
<div class="footer bg-danger">
<h3 align="center"><span class="glyphicon glyphicon-envelope"> <B>WELCOME TO REGISTERATION FORM </B></span></h3>
<h3 align="center">Copyright@ 2020</h3>
</div>

</body>
</html>