<?php
session_start();
include('../connect.php');
$a = $_POST['po_no']; 
$b = $_POST['inv_status'];
$c = $_POST['pay_status'];
$d = $_POST['suplier_name'];
$e = $_POST['po_date']; 
$f = $_POST['expexted_date'];
$g = $_POST['due_date']; 
$h = $_POST['order_ttl'];
$i = $_POST['amnt_paid'];
$j = $_POST['pay_date'];
$k = $_POST['category'];
$l = $_POST['qty_in'];
$m = $_POST['sup_price'];
$n = $_POST['sel_price']; 
$o = $_POST['pay_method'];
$p = $_POST['item_ordered'];
$z = $_POST['qty_ordered'];
// query
$sql = "INSERT INTO supliers (po_no,inv_status,pay_status,suplier_name,po_date,expexted_date,due_date,order_ttl,amnt_paid,pay_date,category,qty_in,sup_price,sel_price,pay_method,item_ordered,qty_ordered) VALUES  
(:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:o,:p,:z)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$j,':k'=>$k,':l'=>$l,':m'=>$m,':n'=>$n,':o'=>$o,':p'=>$p,':z'=>$z));
header("location: purchasesummary.php");


?>