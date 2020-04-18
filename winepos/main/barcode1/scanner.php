<html>
<body>
<form action=add.php method=POST>
<table border="0" align="center" bgcolor="#99FF00">
<tr>
<td>Item Code</td><td><input type="int" name="product_code" /></td></tr>
<tr>
<td>Item Name</td><td><input type="text" name="product_name" /></td></tr>
<tr>
<td>Category</td><td><input type="text" name="gen_name" /></td></tr>
<tr>
<td>Supplier</td><td><input type="text" name="supplier" /></td></tr>
<tr>
<td>Date Received</td><td><input type="date" name="date_arrival" /></td></tr>
<tr>
<td>Date Expiring</td><td><input type="date" name="expiry_date" /></td></tr>
<tr>
<td>Original Price</td><td><input type="int" name="o_price" /></td></tr>
<tr>
<td>Selling Price</td><td><input type="int" name="price" /></td></tr>
<tr>
<td>Quantity</td><td><input type="int" name="qty" /></td></tr>
<tr>
<td>Quantity Left</td><td><input type="int" name="qty_sold" /></td></tr>
<td colspan=2 align=center><input type=submit value=add><input type=reset value=cancel>
</table>

</form>
<html>
<body>

<?php
require_once('dbconnect.php');
$link = mysqli_connect("localhost","root","toor","posales");
$result=mysqli_query($link, "SELECT * from products order by product_code");
echo "<center><table border=1>";
echo"<tr><th><H6>ITEM CODE:</th><th><H6>ITEM NAME:</th><th><H6>CATEGORY</th><th><H6>SUPPLIER</th><th><H6>DATE RECEIVED</th><th><H6>DATE EXPIRING</th><th><H6>ORIGINAL PRICE</th><th><H6>SELLING PRICE</th><th><H6>QUANTITY</th><th><H6>QUANTITY LEFT</th></tr>";
while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo "<td align= center>".$row['product_code']."</td>";
echo "<td align=center>".$row['product_name']."</td>";
echo "<td align=center>".$row['gen_name']."</td>";
echo "<td align=center>".$row['supplier']."</td>";
echo "<td align=center>".$row['date_arrival']."</td>";
echo "<td align=center>".$row['expiry_date']."</td>";
echo "<td align= center>".$row['o_price']."</td>";
echo "<td align= center>".$row['price']."</td>";
echo "<td align= center>".$row['qty']."</td>";
echo "<td align= center>".$row['qty_sold']."</td>";
echo"<td> <a href='edit.php?product_code=".$row['product_code']."'>EDIT</a>
<a href=delete.php?product_code=".$row['product_code']."'>DELETE</a></td>";
echo"</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</div>
<a href=search.php>search</a>
</body>
</html>
</body>
</html>