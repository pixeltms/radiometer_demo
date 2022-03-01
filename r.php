<?php 
session_start();
unset($_SESSION['po_uploaded']);
header('Location: purchase_orders.php');
?>