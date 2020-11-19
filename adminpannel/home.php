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
        <title>OurShop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    </head>
    <body>
        <?php include 'header.php';?>      
        <?php include 'adminmenu.php' ?>
        
        <div class="content-wrapper" style="padding-bottom:300px">
            <div class="container">
                <div class="row">
                <div class="col-md-12" style="padding-top:40px">
                    <h4 class="page-head-line" style="color:red">Welcome <?php echo $_SESSION['name'];?>!!</h4>
                </div>
                   
                    <hr style="background-color:salmon;width:100%;height:2px">
                    
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-success">
                            <a href='addproducts.php'>This page is only for admin.</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <?php include 'footer.php' ?>
        </div>
    </body>
</html>
