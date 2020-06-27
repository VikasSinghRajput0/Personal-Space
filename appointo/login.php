
 

<html lang="en">
<head>
  <title>loginFrom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script type="text/javascript" src="validation.js"></script>
  <style>
.error{
        color:red;
}
.a
{
padding:10%;

border:2px;border-color:red;

}.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: ;
   color: ;
   text-align: center;
} 

</style>
</head>
<body>
<div class="container-fluid " >

   <div class="row  bg-danger">
      <div class="page-header">
      <h1 ALIGN="CENTER" ><B>LOGIN FORM</B></h1>
      </div>
   </div>
<br>
<br>
<div class="row">
<div class="col-xs-3"></div>
 <div class="col-xs-6 bg-danger">
 <form class="a"name="login" onsubmit="return loginValidate()"action="insert1.php" method="post">
 <div class="form-row">
  <div class=" form-group ">
      <label  for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      <p class="error" id="emailErr">
    </div>
     <div class=" form-group ">
      <label  for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      <p class="error" id="pwdErr"></p>
    </div>
    
 </div>
 <div class="form-row">
    
    
     <!-- login button-->
    <div class=" form-group col-sm-6">
    <button type="submit" class="btn btn-info form-control" >Login</button>
  
    </div>
   
     
<div class=" col-sm-6"><a class="btn btn-danger form-control"   href="register.php">SIGNUP</a></div>
       
     </div>
     </div>
 
 </form> </div>
 <div class="col-xs-3"></div>
</div>

<div class="footer bg-danger">
      <div class="page-header">
      <h3 ALIGN="CENTER" ><B>WELCOME TO LOGIN PAGE ...........</B></h3>
   
      </div>
   </div>
  
    
    
</body>
</html>