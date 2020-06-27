 <?php 
 
session_start();
if(! isset($_SESSION['email']))
{
   header("Location:login.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>appointo health clinic</title><style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: ;
   color: red;
   text-align: center;
} 
  .vv{
  width:100%;
 height:100%;
  padding:1%;
  margin:1%;
  
  }
  .sa
  {
  text-align:center;
  
  }
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head><body>
<?php 
   include "navbar.php";
?>
<div class="container-fluid">
<div class="">
<div class="col-sm-12">
<div class="well well-lg">

<label ><font style="color:blue;"><h2 ><b>VARIOUS HEALTH SPACIALIST IN OUR CLINIC</b></h2></font></label><br>
<select class="vv" >

  <option value="EYES SPACIALIST" class="form-control" > EYES SPACIALIST</option>
  <option value="Hand surgeon"class="form-control">Hand surgeon</option>
  <option value="Nephrologist"class="form-control">Nephrologist</option>
  <option value="Surgeon"class="form-control">Surgeon</option>
    <option value="Sports medicine specialist" class="form-control">Sports medicine specialist</option>
  <option value="Family medicine physician" class="form-control">Family medicine physician</option>
  <option value="skin spacialist" class="form-control">skin spacialist</option>
</select>
</div>
</div>
</div>
</body>



</div>
<div class="footer">
 <center><h3 class="bg-success text-white"> APPOINTO HEALTH CLINIC COPY RIGHT 2K20@@@@@@@@@@@@@@@@ </h3>

</div>

</body>
</html>