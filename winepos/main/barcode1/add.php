<?php
include('dbconnect.php');
$txtproduct_code=$_POST['product_code'];
$txtproduct_name=$_POST['product_name'];
$txtgen_name=$_POST['gen_name'];
$txtsupplier=$_POST['supplier'];
$txtdate_arrival=$_POST['date_arrival'];
$txtexpiry_date=$_POST['expiry_date'];
$txto_price=$_POST['o_price'];
$txtprice=$_POST['price'];
$txtqty=$_POST['qty'];
$txtqty_sold=$_POST['qty_sold'];

$sql="INSERT INTO products (product_code,product_name,gen_name,supplier,date_arrival,expiry_date,o_price,price,qty,qty_sold) VALUES ('".$txtproduct_code."','".$txtproduct_name."','".$txtgen_name."','".$txtsupplier."','".$txtdate_arrival."','".$txtexpiry_date."','".$txto_price."','".$txtprice."','".$txtqty."','".$txtqty_sold."')";
if(!mysqli_query($con, $sql))
{
die('Error:'.mysqli_error());
}
echo "<script> alert('1 record added!');
window.location.href='index.php';</script>";
mysqli_close($con);
?>