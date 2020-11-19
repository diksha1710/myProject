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
<style>
    .btn1{
        width:100px;
        background-color:#119c7e;
        color:white;
        border-radius:10px;
    }
</style>
    </head>
    <body>
        <?php include 'header.php';?>      
        <?php include 'adminmenu.php' ?>
        
        <div class="content-wrapper" style="padding-bottom:300px">
            <div class="container">
                <div class="row">
                <div class="col-md-12" style="padding-top:40px">
                    <h4 class="page-head-line" style="color:red">Products</h4>
                </div>
                   
                    <hr style="background-color:salmon;width:100%;height:2px">
                    
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-success">
                            <a href='addproduct.php'>Add new products</a>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-12'>
                        <?php 
                        $link=mysql_connect("127.0.0.1","root","");
                        mysql_select_db("eshop");
                        $result=mysql_query("select * from product_master");
                        if(mysql_affected_rows()>0)
                        {
                            echo "<table class='table table-striped table-hover' width='100%'>";
                            echo "<tr>";
                            echo "<th>Product ID</th><th>Name</th><th>Type</th><th>Price</th><th>Image</th><th></th><th></th><th></th><th></th>";
                        echo "</tr>";
                        while($r=mysql_fetch_array($result)){
                            echo "<tr>";
                            echo "<td style='width:10%'>$r[0]</td>";
                            echo "<td style='width:10%'>$r[1]</td>";
                            echo "<td style='width:10%'>$r[2]</td>";
                            echo "<td style='width:10%'>$r[3]</td>";
                            echo "<td style='width:10%'><img src='../$r[4]' width='30' height='40'/></td>";
                            echo "<td style='width:10%'><a href='edit_product.php?pid=$r[0]'><input type='button' value='Edit' class='btn1'/></a></td>";
                            echo "<td style='width:10%'><a href='delete.php?pid=$r[0]'><input type='button' value='Delete' class='btn1'/></a></td>";
                        echo "<td style='width:10%'><a href='product_desc.php?pid=$r[0]'><input type='button' value='Add Desc' class='btn1'/></a></td>";
                          echo "<td style='width:10%'><a href='view_desc.php?pid=$r[0]'><input type='button' value='View_des' class='btn1'/></a></td>";  
                        }
                        echo "</table>";
                        }
 else {
     echo "not found!!";
 }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
        </div>
    </body>
</html>
