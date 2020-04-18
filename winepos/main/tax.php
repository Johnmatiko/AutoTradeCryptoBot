<?php
session_start();
include('../connect.php');
$a = $_POST['tax'];
// query
$sql = "INSERT INTO sales_order (tax) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a));
header("location: sales.php");


?>