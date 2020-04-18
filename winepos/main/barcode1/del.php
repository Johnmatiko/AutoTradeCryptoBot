<html>
<body bgcolor="red">
<?php
require_once('dbconnect.php');
$product_code = $_REQUEST['product_code'];
$link = mysqli_connect("localhost","root","toor","posales");
mysqli_query($link, "DELETE FROM barcode where product_code= '$product_code''");
echo "<script> alert('1 record deleted');
window.location.href='index.php';
</script>";
?>
</body>
</html>