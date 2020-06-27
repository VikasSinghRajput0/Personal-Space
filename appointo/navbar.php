
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
.textcolor{
        color:white;
}
.abc{

 background-image: url("images/medical-appointment-doctor-healthcare-40568.jpeg");
  background-repeat: no-repeat;
    background-size: cover;
}
a:hover {
  background-color: yellow;
}
</style>
</head>
<body class="abc">
<div class="contaner-fluid" >
  
  <nav class="navbar navbar-inverse navbar" class="xyz" ><img src="" class="img-rounded" alt="" width="100%" height="300px";>
  <div class="container">
      <a class="navbar-brand" ><b><font style="color:red;">APPOINTO HEALTH CLINIC</font></b></a>
      
    
    <ul class="nav navbar-nav">
   
<?php 
include ('connect.php');
$type=$_SESSION['type'];
$sqlquery = " SELECT * FROM menu_master where type ='$type'  ";

$result = $conn->query($sqlquery);
while($row = $result->fetch_assoc())
{
   
    echo "<li><a href='".$row['link']."'>".$row['name']."</a></li>";
    
}
?>
    </ul>
     <ul class="nav navbar-nav navbar-right  active" >
     	<li class="text-success"><b><font style="color:cyan;">
     	<?php echo  $_SESSION["message"];echo $_SESSION["name"];?> </font></b>&nbsp; &nbsp;
     	</li>
     	<a href="logout.php" class="btn btn-default" class="as"><span class="glyphicon glyphicon-magnet"></span><font style="red">LOGOUT</font></a>
     	
     </ul>
  </div>
</nav>

  </div>
  
  </body>
  </html>