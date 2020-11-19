<?php
$id=$_GET['pid'];
if(isset($_COOKIE['addtocart']))
{
    $data=$_COOKIE['addtocart'].",".$id;
    setcookie("addtocart",$data);
}
else{
    setcookie("addtocart",$id,time()+3600);
}

    header("location:mobile_desc.php?pid=$id");

?>