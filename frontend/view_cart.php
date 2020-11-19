<?php
    
   session_start();
   if(!isset($_SESSION['name'])){
       header("location:login.php");
   }
       
?>
<!DOCTYPE html>
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
    <body style='background-color:buttonface'>
        <?php include 'header2.php';?>
          
        <?php include 'menu.php';?>  
        
        <div class="container">
            <?php
            
            if(isset($_COOKIE['addtocart'])){
            echo "<div class='categories-shop'>";
                echo "<div class='row'>";
                echo "<div class='col-lg-12'>";
                echo "<div class='title-all text-center'>";
                echo "<h2>My Cart !!!!</h1>";
                echo "</div></div></div></div>";    
            
                
            include_once 'db.php';
            $result=mysql_query("select * from product_master where pid in ($_COOKIE[addtocart])");
                    echo "<table class='table table-striped' width='100%'>";
            echo "<tr><th>Product ID</th><th>Product Name</th><th>Product Price</th><th>Image</th><th></th></tr>";
           $p=11999; 
            while($row=mysql_fetch_assoc($result))
            {
                 
                echo "<tr>";
                echo "<td>$row[pid]</td><td>$row[pname]</td><td>$row[pprice]</td><td><img src='../$row[pimage]' width='30' height='40'></td>";
                echo "<td><a href='modifycart.php?pid=$row[pid]' class='btn btn-primary'>Delete Product</a></td>";
               
                echo "</tr>";
                
              $p=$p+$row['pprice'];
                
            }
            
            echo "</table>";
            //echo "<div class='row'>";
            //echo "<div class='col-lg-12'>";
            echo "<table  width='100%'>";
            echo "<tr>";
              
                     echo  "<td class='text-left'>Total Amount:Rs.$p &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
              echo   "<td style='padding-right:0px;text-right'><a href='home.php'><input type='submit' name='checkout' value='Check Out' class='btn btn-success'/></a></td>";
              echo "</tr>";
        //echo "</div>";
        //echo "</div>";
        echo "</table>";
            }
            else
                {
                echo "<div class='categories-shop'>";
                echo "<div class='row'>";
                echo "<div class='col-lg-12'>";
                echo "<div class='title-all text-center'>";
                echo "<h2>Your Cart is Empty!!!!</h1>";
                echo "</div></div></div></div>";
            }
            ?>
            
            
        </div>
        <br><br><br>
        <?php include 'footer.php';?>
        
    </body>
</html>