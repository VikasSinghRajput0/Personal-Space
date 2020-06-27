<html lang="en">
<head>
<style>

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

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

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
  <title>index page</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="page-header text-center" >

  <h2 style="color:DarkSlateBlue;"><b>  APPOINTO</b></h2>
 <P style="color:Indigo;"ALIGN="CENTER"> <B>HEALTH CLINIC</B></P>
 <div class="bgimg-1">
 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="register.php"><B>APPOINTO</B></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="welcome.php"style="color:cyan;">Home</a></li>
      <li><a href="doctor.php"style="color:cyan;"> FIND DOCTOR</a></li>
      <li><a href="#"style="color:cyan;">APPOINTMENT</a></li>
      <li><a href="#"style="color:cyan;">ABOUT US</a></li>
      
      <li class="active"><a href="contactus.php"style="color:cyan;">CONTACT US</a></li>
    </ul>
  </div>
</nav>
 
<div>

 



<div class="container">
  <div style="text-align:center">
     <h2 style="color:red;"><b>  CONTACT US</b></h2>
    
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="VK3.jpeg" style="width:100%">
    </div>
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

</div>
</body>  
</html>
