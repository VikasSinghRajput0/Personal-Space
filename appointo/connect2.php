<?php
session_start();
if (!isset($_SESSION['email'])){
   header('Location:login.php');
}

include 'connect.php';
// Fetching variables of the form which travels in URL
$state = $_POST['state'];
$city =  $_POST['city'];
$local_address = $_POST['local_address'];
$pincode = $_POST['pincode'];
$gender =  $_POST['gender'];
$acId= $_SESSION['account_id'];
$_SESSION['address_id']=$add_id;

$sql= "INSERT INTO address_master (account_id,state,city,local_address,pincode,gender )
  			  VALUES('$acId','$state', '$city', '$local_address','$pincode','$gender')";
if ($conn->query($sql)){
    header("Location:welcome.php");
}
else{
    echo "Error: ". $sql ." ". $conn->error;
}

$conn->close();

?>