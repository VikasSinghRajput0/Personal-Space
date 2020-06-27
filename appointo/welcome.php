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
   color: ;
   text-align: center;
} 
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
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



<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/d.jpeg"  width="50%" height="30%">
        <div class="carousel-caption">
            </div>
      </div>

      <div class="item">
        <img src="images/c.jpeg"  width="50%" height="30%">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="images/b.jpeg"   width="50%" height="30%">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="images/a.jpeg"  width="50%" height="30%">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<p><font style="color:red;">APPOINTO Health Clinic </font>improves the health of the community by providing the highest quality, patient- centered, health care services to everyone seeking care.  Our vision is a healthy community where all individuals, regardless of their ability to pay, have access to comprehensive, coordinated, affordable, quality health care.

This health center receives HHS funding and has Federal Public Health Service (PHS) deemed status with respect to certain health or health-related claims, including medical malpractice claims, for itself and its covered individuals.</p>
</body>

</div>
</div>
</div>


<div class="footer">
 <center><h3 class="bg-info text-black"> WORLD BEST HEALTH CLINIC <font style="color:red;">APPOINTO HEALTH CLINIC</font><br>
THANKS FOR VISIT HERE...</h3>
</div>

</body>
</html>