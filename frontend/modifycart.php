<?php
$id=$_GET['pid'];
$data=$_COOKIE['addtocart'];
$arr=explode(",",$data);
$x=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]!=$id){
        $a[$x]=$arr[$i];
        $x++;
    }
}
$str=implode(",",$a);
//$d1=str_replace($id,0,$data);
setcookie("addtocart",$str,time()+3600);
header("location:view_cart.php");
        
?>









