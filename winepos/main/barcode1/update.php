<?php
require_once('dbconnect.php');
$product_code=$_POST['product_code'];
$product_name=$_POST['product_name'];
$gen_name=$_POST['gen_name'];
$supplier=$_POST['supplier'];
$date_arrival=$_POST['date_arrival'];
$expiry_date=$_POST['expiry_date'];
$o_price=$_POST['o_price'];
$price=$_POST['price'];
$qty=$_POST['qty'];
$qty_sold=$_POST['qty_sold'];
$link = mysqli_connect("localhost","root","toor","posales");
mysqli_query($link, "UPDATE products SET product_code = '".$txtproduct_code."',product_name = '".$txtproduct_name."',gen_name = '".$txtgen_name."',supplier = '".$txtsupplier."',date_arrival = '".$txtdate_arrival."',expiry_date = '".$txtexpiry_date."',o_price = '".$txto_price."',price = '".$txtprice."',qty = '".$txtqty."',qty_sold = '".$txtqty_sold."' where products_code ='".$txtproduct_code."' )";

mysqli_close($con);
?>