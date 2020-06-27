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

.bgimg-1 {
  background-image: url("medical-appointment-doctor-healthcare-40568.jpeg");
  height: 100%;
 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* /* Style the container/contact section */ */
/* .container { */
/*   border-radius: 5px; */
/*   background-color: #f2f2f2; */
/*   padding: 10px; */
/* } */

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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

 <div class="bgimg-1">
 

<div>

 



<div class="container">
  <div style="text-align:center">
     <h2 style="color:red;"><b>  CONTECT US</b></h2>
    
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">FIRST NAME</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">LAST NAME</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="STATE">STATE</label>
        <select id="state" name="state">
          <option value="H.P">HP</option>
          <option value="PUNJAB">PUNJAB</option>
          <option value="HARYANA">HARYANA</option>
          <option value="BIHAR">BIHAR</option>
          <option value="U.P">U.P</option>
          
          
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
 
 <br>
 <br>
 <br>





</div>

</div>
<br><br>
<center><h1 class="bg-success text-white"> APPOINTO HEALTH CLINIC </h1>
<p  class="bg-success text-white"><b> clinic (or outpatient clinic or ambulatory care clinic) is a healthcare facility that is primarily focused on the care of outpatients. 
Clinics can be privately operated or publicly managed and funded.
 They typically cover the primary healthcare needs of populations in local communities, in contrast to larger hospitals which offer specialised treatments and admit inpatients for overnight stays.</b></p></center>
<br><br>
</div>
</div>
</div>

</div>

</body>
</html>