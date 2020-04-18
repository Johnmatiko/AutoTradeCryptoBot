<html>
<body>
<form action=aaa.php method=POST>
<table border=0 align=center bgcolor="#0000FF">
<tr><td>ENTER BARCODE</td><td><input type="text" name="barcode" /></td>
</tr>

</table>
</form>
<hr />
<?php
require_once('dbconnect.php');
$txtproduct_code=$_POST['barcode'];
$link = mysqli_connect("localhost","root","toor","posales");
$result=mysqli_query($link, "SELECT * from products where product_code='".$txtproduct_code."'");
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
    echo"</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
