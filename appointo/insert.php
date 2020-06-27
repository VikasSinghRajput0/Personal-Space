
<?php
include 'connect.php';
$f_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$phone = $_POST['phoneno'];
$email = $_POST['email'];
$password = $_POST['password'];
$type= $_POST['type'];
$query1 = "SELECT * FROM account_master WHERE email = '$email'";

$result = $conn->query($query1);

if ($result->num_rows > 0)
{
    echo "<p>","Email Address is Already In Use.","</p>";
}

else{
    $sql = "INSERT INTO account_master(firstname, lastname, phoneno, email, password, type)values ('$f_name','$last_name','$phone','$email','$password','$type')";
    if ($conn->query($sql)){
        header("Location: login.php");
    }
    else{
        echo "Error: ". $sql ." ". $conn->error;
    }
}

$conn->close();

?>
