<?php
session_start();
unset($_SESSION["customer_id"]);
unset($_SESSION["is_radiometer_user"]);
header("Location:login.php");
?>