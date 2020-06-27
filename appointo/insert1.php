

<?php

 include("connect.php");
 
 session_start();
 $_SESSION["message"]= "WELCOME :";
 $email = $_POST['email'];

 $password = $_POST['password'];
 //print_r($password);die;
 $query1 = "SELECT * FROM account_master WHERE email = '$email' and password = '$password' ";
 $result = $conn->query($query1);
 
 if ($result->num_rows > 0)
 {
    while($row = $result->fetch_assoc())
     {
         $ac_id=$row["account_id"]; 
        $name = $row["firstname"];
        $type=$row["type"];
     }
     $_SESSION["email"]=$_POST["email"];
     $_SESSION['name']=$name;
     $_SESSION['account_id']=$ac_id;
     $_SESSION['type']=$type;
     $sql = "SELECT * FROM address_master WHERE account_id = '$ac_id'";
     
     $result = $conn->query($sql);
     
     if ($result->num_rows > 0)
     {
         if($_SESSION['type']=="doctor")
         {
             header("Location:welcome.php");
         }else  if($_SESSION['type']=="patient"){
             
             header("Location:welcome.php");
         }
             
     }
     else{
         
         header("Location:newfile.php");
     }
     
 }
 
 else{
     header("Location:login.php");
     
 }
 
 
 $conn->close();
 
 ?>