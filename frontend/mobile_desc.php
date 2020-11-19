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
<?php
if(!isset($_GET['pid'])){
    header("location:mobile.php");
}
?>
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
    </head>
    <body style='background-color:lightgrey'>
        
        <?php include 'header2.php';?>  
        <?php include 'menu.php';?>  
        
        <?php
         include_once 'db.php';
         $result=mysql_query("select * from product_master where pid=$_GET[pid]");
         $r=mysql_fetch_assoc($result);
        
         echo "<div class='row' style='padding-left:40px;padding-top:40px'>";
     
         echo "<div class='col-sm-2 text-center' style='background-color:white'>";
         echo "<img src='../$r[pimage]' width='150' height='300'/>";
         
        echo "</div>";
         echo "<div class='col-sm-1'>";
                        echo "</div>";
         echo "<div class='col-sm-8 text-left alert-success' style='width:70%'>";
         echo "<div class='row'><div class='col-sm-2'>Name</div><div class='col-sm-6'><strong>$r[pname]</strong></div></div>";
       
        echo "<div class='row'><div class='col-sm-2'>Price</div><div class='col-sm-6'>$r[pprice]</div></div>";
         echo "<div class='row'>";
          echo "<div class='alert alert-success'>";
              echo "<strong>Available Offers</strong>";
              echo "<ol>";
              echo "<li style='color:blue'>* 10% off with HDFC Credit Card</li>";
              echo "<li style='color:blue'>* 5% cash back on shop Card</li>";
              echo "</ol>";
             echo"</div>";
             echo"</div>";
        echo "<div class='row'><div class='col-sm-2'>Check Delivery</div><div class='col-sm-6'></div></div>";
         echo "<div class='row'><div class='col-sm-2'><a href='cart.php?pid=$r[pid]'><input type='button' style='background-color:red;color:white' name='addtocart' value='Add to Cart'/></div><div class='col-sm-6'></div></div>";
        echo "</div>";
     echo "</div>";
         ?>
            
                <div class='categories-shop'><div class='row'>
                        <div class='col-lg-12'>
                            <div class='title-all text-center'>
                                <h1>Product Specification</h1>
                            </div>
                        </div>
            </div>
                    
                    <?php
                    $result=mysql_query("select * from product_desc where pid=$_GET[pid]");
                    $r=mysql_fetch_array($result);
                    echo "<table class='table table-striped table-hover' width='100%'>";
                    
                    echo "<tr>";
                    echo "<td>Model No.:</td><td>$r[1]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Company:</td><td>$r[2]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Processor:</td><td>$r[3]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Ram:</td><td>$r[4]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Screen Size:</td><td>$r[5]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Storage:</td><td>$r[6]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Front Camera:</td><td>$r[7]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Back Camera:</td><td>$r[8]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Battery Capacity:</td><td>$r[9]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    
                    echo "</table>";
                    ?>
                </div>
        
        <?php include 'footer.php';?>
        
    </body>
</html>