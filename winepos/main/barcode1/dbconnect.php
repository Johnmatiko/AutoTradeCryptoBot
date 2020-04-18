<?php
$con= mysqli_connect("localhost","root","toor") or die("Cannot connect. Check your Web Server.");
mysqli_select_db($con, "posales") or die ("Cannot connect to the database. Please check your host Connection");
?>