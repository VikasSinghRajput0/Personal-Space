<?php
session_start();
if (!isset($_SESSION['email'])){
   header('Location:newfile.php');
   }
   
?>
<html lang="en">  
<head>  
  <title>address 
 </title> 
  <style>body
   {
 background-image: url("images.jpeg");
 background-color: #cccccc;
}
</style>
 
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="valid.js"></script>  
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script> 
</head>  
<body  >  
  
<div class="container">  
 
 <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">please  enter your  address</h4>
        
      </div>
      <div class="modal-body bg-success">
       <form name="address" action="connect2.php" onSubmit="return pinValidate()" method="post">
 <div class="form-row">
   <div class=" form-group col-xs-6">
      <label for="state">State:</label>
      <input type="text" class="form-control" id="state" placeholder="Enter your state" name="state">
   		
   </div>
    <div class=" form-group col-xs-6">
      <label for="city">City:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city">
   </div>
   </div>
   <div class="form-row">
   <div class=" form-group">
      <label for="address">Local_Addresss:</label>
      <textarea class="form-control rounded-0" id="local_address" rows="3" name="local_address"></textarea>
   </div>
   </div>
   
   <div class="form-row">
   <div class=" form-group col-xs-6">
      <label for="pincode">Pincode:</label>
      <input type="text" class="form-control" id="pincode" placeholder="Enter your pincode" name="pincode">
    </div>
    <div class="form-group col-xs-6">
   <label for="address">Address_Type:</label>
  <select class="form-control" id="address" name="type">
   <option value="home">---Select----</option>
    <option value="home">HOME</option>
    <option value="office">OFFICE</option>
    <option value="rent_house">RENT_HOUSE</option>
    <option value="work">WORK_PLACE</option>
     <option value="other">OTHER</option>
  </select>
    </div>
     <div class="row">
   <div class="col-xs-6"><p class="error" id="pinErrErr"></p></div>
   </div>
    </div>
     <div class="form-inline form-group ">
     <label>Gender:</label> 
    <label class="radio-inline">
      <input type="radio" name="gender" value="male" checked>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="female">Female
    </label>
    </div>
    
   <button type="submit" class="btn btn-success">Submit</button>
    
    
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </form>
  
    </div>
</div>
  
</div>
</div>
</div> 
</body>  
</html>  