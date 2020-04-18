<?php include 'header.php'; ?>
<?php include('navfixed.php');?>
    <div class="container-fluid">
      <div class="row-fluid">
	
	
	<div class="contentheader">
			<i class    ="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 25px 'Aleo'; color:#0489bd;"><center><font color="red">W&S POS</font></center></font>
<div id="mainmain">
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='Cashier') {
?>
 <a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i><br> Sales</a>
<a href="customer.php"><i class="icon-group icon-2x"></i><br> Customers</a>  

<a href="../index.php"><i class="icon-signout icon-2x"></i><br>Logout</a>   
<?php
}
if($position=='admin') {
?>

<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i><br> Sales</a>  
<a href="barcode\index.php"><i class="icon-barcode icon-2x"></i><br> Barcode Generator</a>            
<a href="products.php"><i class="icon-list-alt icon-2x"></i><br> Products</a>                
<a href="cat.php"><i class="icon-list-alt icon-2x"></i><br> Categories</a>     
<a href="customer.php"><i class="icon-group icon-2x"></i><br> Customers</a>     
<a href="supplier.php"><i class="icon-group icon-2x"></i><br> Suppliers</a>     
<a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart   icon-2x"></i><br> Sales Reports</a>    
<a href="purchasingreport.php"><i class="icon-bar-chart icon-2x"></i><br> Purchasing Reports</a>
<a href="inventoryreport.php"><i class="icon-indent-right icon-2x"></i><br> Inventory Reports</a> 
<a href="admin-settings.php"><i class="icon-flag icon-2x"></i><br> User Manager</a>  
<?php 
    }                   
    ?>
<div class="clearfix"></div>
</div>
</div>
</div>
</body>
<footer><center><font color="red">W&S POS &copy 2020</font></center></footer>
<?php include('footer.php'); ?>
</html>
