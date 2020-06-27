<?php
include 'connect.php';
// Fetching variables of the form which travels in URL
$state = $_POST['state'];
$city =  $_POST['city'];
$local_address = $_POST['local_address'];
$pincode = $_POST['pincode'];
$type =  $_POST['type'];

$sql= "INSERT INTO address_master (state,city,local_address,pincode,type )
  			  VALUES('$state', '$city', '$local_address','$pincode','$type')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
}
else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);

?>