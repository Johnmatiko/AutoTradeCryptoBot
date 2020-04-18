<?php
session_start();
include('../connect.php');
$discount = $_POST['discount'];
// query
$sql = "INSERT INTO purchases_item (discount) VALUES (".$discount."')";
$q = $db->prepare($sql);
header("location: sales.php");


?>