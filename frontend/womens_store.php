<?php
    
   session_start();
   if(!isset($_SESSION['name'])){
       header("location:login.php");
   }
       
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="text/javascript" src="script.js"></script>
<style>
    .slider-box{
    margin:20px;
    //height:350px;
    position:relative;
    background-color:#FFFFFF;
    border-radius: 0px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    border: rgba(187,187,187,1.00);
    }
    .slider-box{
        box-shadow:5px 5px 12px rgba(47,47,47,0.40);
    }
    .slider-box:hover .img-box img{
        transform: scale(1.07);
        transition: all ease 0.3s;
    }
    //.cart:hover{
       //transform: scale(1.1);
       ////background-color: #fe9048;
       //transition: all ease 0.1s;
    //}
</style>
    </head>
    <body style="background-image: url('../mobile/page.jpg');background-repeat: no-repeat;background-size: 100% 100%">
        <?php include 'header2.php';?>  
        <?php include 'menu.php';?>  
        
        
        <div class="content-wrapper">
        
            <div class="container">
                <div class="row"><div class="col-md-12">
                        <strong><font size="10px" color="pink">Womens cloths</font></strong></div>
                     <hr style="background-color:green;width:100%;height:2px">
                    </div>
                <div id="t4" class="row-style"></div>
                <div id="t3" class="row-style">
                <?php
                include 'db.php';
                $result=mysql_query("select * from womens_store where ptype='cloth'");
                if(mysql_affected_rows()>0){
                    $x=1;
                    while($r=mysql_fetch_assoc($result)){
                        if($x==1)
                            echo "<div class='row'>";
                            echo "<div class='col-sm-3 slider-box'>";
                        echo "<div class='row'>";
                        echo "<div class='col-sm-12 text-center img-box' style='padding-top:3px;background-color:steelgrey'><a href='womens_store.php?pid=$r[pid]'><img src='../$r[pimage]' height='230' width='150'/></a></div>";
                        echo "</div>";
                        echo "<br>";
               
                        echo "<div class='row' style='background-color:lightskyblue'>";
                        echo "<div class='col-sm-6 text-center'>Name</div>"; echo "<div class='col-sm-6 text-center'>$r[pname]</div>";
                        echo "</div>";
                        echo "<div class='row' style='background-color:lightskyblue'>";
                        echo "<div class='col-sm-6 text-center'>Price</div>"; echo "<div class='col-sm-6 text-center'>$r[pprice]</div>";
                        echo "</div>";
                        echo "</div>";
                        //echo "<div class='col-sm-1'>";
                        //echo "</div>";
                        
                        $x++;
                        
                        if($x==4){
                            echo "</div>";
                            //echo "<br>";
                            //echo "<br>";
                        $x=1;
                    }
                }
                    
                }
            ?>
                </div>
                
        </div>
    </div>
        <?php include 'footer.php';?>
        
    </body>
</html>
