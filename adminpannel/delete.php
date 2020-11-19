<?php
$id=$_GET['pid'];
$link=mysql_connect("localhost","root","");
mysql_select_db("eshop");
mysql_query("delete from product_master where pid='$id'");
mysql_query("delete from product_desc where pid='$id'");
mysql_close($link);
header("location:product.php");
?>