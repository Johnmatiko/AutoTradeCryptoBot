<?php
require_once('dbconnect.php');
$product_code = $_REQUEST['product_code'];
$link = mysqli_connect("localhost","root","toor","posales");
$result = mysqli_query($link, "SELECT * from products where product_code='".$product_code."'");

while($row=mysqli_fetch_array($result))
{

?>
<html>
<body>
<form name="frm" method="POST" action="update.php">
<table>
<table border="1" align="center">
<tr>
<td>
<table>
<tr>
<td>
<table>
<tr><td>Item Code:</td><td><input type="int" name="product_code"  value="<?php echo $row['product_code']?> "> </td></tr>
<tr><td>Item Name:</td><td><input type="text" name="product_name" value="<?php echo $row['product_name']?> "></td></tr>
<tr><td>Category:</td><td><input type="text" name="gen_name" value="<?php echo $row['gen_name']?> "></td></tr>
<tr><td>Supplier:</td><td><input type="text" name="supplier" value="<?php echo $row['supplier']?> "></td></tr>
<tr><td>Date Received:</td><td><input type="date" name="date_arrival" value="<?php echo $row['date_arrival']?> "></td></tr>
<tr><td>Date Expiring:</td><td><input type="date" name="expiring_date" value="<?php echo $row['expiry_date']?> "></td></tr>
<tr><td>Original Price:</td><td><input type="int" name="o_price" value="<?php echo $row['o_price']?> "></td></tr>
<tr><td>Selling Price:</td><td><input type="int" name="price" value="<?php echo $row['price']?> "></td></tr>
<tr><td>Quantity:</td><td><input type="int" name="qty" value="<?php echo $row['qty']?> "></td></tr>
<tr><td>Quantity Left:</td><td><input type="int" name="qty_sold" value="<?php echo $row['qty_sold']?> "></td></tr>
<tr><td><INPUT type="hidden" name="product_code" value="<?php echo $row['product_code']?>" /> </td></tr>
<tr><td colspan=2><p align="center"><INPUT type="submit" value="Update" />
<INPUT type="button" value="Back"
onClick="window.location.href='index.php'" /></center></td></tr>
</table>
</form>
</html>
</body>
<?php } ?>