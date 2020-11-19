<?php
$emailid=$_GET['email'];
$link=mysql_connect("localhost","root","");
mysql_select_db("eshop");
mysql_query("delete from contact_us where email='$emailidid'");
mysql_query("delete from contact_us where email='$emailid'");
mysql_close($link);
header("location:query.php");
?>