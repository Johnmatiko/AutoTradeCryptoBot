<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount1'];
$z = $_POST['profit'];
$x = $_POST['discount'];
$y = $_POST['tax'];
$cname = $_POST['cname'];
if($d=='credit') {
$f = $_POST['due'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount1,profit,due_date,name,discount,tax) VALUES (:a,:b,:c,:d,:e,:z,:f,:g,:x,:y)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname,':x'=>$x,':y'=>$y));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount1,profit,due_date,name,discount,tax) VALUES (:a,:b,:c,:d,:e,:z,:f,:g,:x,:y)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname,':x'=>$x,':y'=>$y));
header("location: preview.php?invoice=$a");
exit();
}
// query



?>