
<?php
session_start();

unset($_SESSION["email"]);
unset($_SESSION["name"]);
unset($_SESSION["account_id"]);
unset($_SESSION["type"]);
unset($_SESSION["message"]);

header("Location:login.php");
session_destroy();
?>
