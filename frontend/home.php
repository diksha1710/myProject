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
<title>OurShop.com</title>
    
    
        <style>
            .slider-box{
    margin:20px;
    //height:350px;
    position:relative;
    background-color:#FFFFFF;
    border-radius: 0px;
    //display:flex;
    //flex-direction:column;
    //justify-content:center;
    border: rgba(187,187,187,1.00);
    }
    .slider-box{
        box-shadow:5px 5px 12px rgba(47,47,47,0.40);
    }
    .slider-box:hover .img-box img{
        transform: scale(1.07);
        transition: all ease 0.3s;
    }
        .container{text-align: center;font-color: white;}
        .navbar-brand{font-size: 50px;}
    </style>
    
        </head>
    <body style="background-color:buttonface;background-image: url('../mobile/page.jpg');background-repeat: no-repeat;background-size: 100% 100%">
        <?php include 'header2.php';?>  
        <?php include 'menu.php';?>  
    
        
        <div class="container">
            <h1 style='color:red'> <b>LATEST PRODUCTS</b></h1>
        </div><br>
        
        <div class="container">
            <div class='row'>
            <div class='col-sm-3 slider-box'>
         <div class="row">
           <div class="col-sm-12  text-center">
    <a href='mobile.php'>
        <img src="../mobile/apple.jpg" height="230" width="150" ></a>
  </div>
         </div>
   <div class='row' style='background-color:salmon'>
           <div class="col-sm-12 text-center" style="height:60px;padding-top:10px;font-size: 30px">Mobiles</div>
  </div>
</div> 
                <div class='col-sm-3 slider-box'>
         <div class="row">
           <div class="col-sm-12 text-center">
               <a href='womens_store.php'>
                   <img src="../mobile/cloth.jpeg" height="230" width="150" /></a>
  </div>
         </div>
   <div class='row' style='background-color:salmon'>
       <div class="col-sm-12 text-center" style="height:60px;padding-top:10px;font-size: 30px">Women's cloths</div></div>
       
</div> 
                <div class='col-sm-3 slider-box'>
         <div class="row">
           <div class="col-sm-12 text-center">
    
               <img src="../mobile/jwellary.jpeg" height="230" width="150" >
  </div>
         </div>
   <div class='row' style='background-color:salmon'>
           <div class="col-sm-12 text-center" style="height:60px;padding-top:10px;font-size: 30px">Jwellary</div>
  </div>
</div> 
                
            </div>
   
        </div>
        <div class="container">
            <h1 style='color:red'> <b>MOST VIEWED PRODUCTS</b></h1>
        </div><br>
        
        <div class="container">
            <div class='row'>
            <div class='col-sm-3 slider-box'>
         <div class="row">
           <div class="col-sm-12  text-center">
    <a href='mobile.php'>
        <img src="../mobile/iphone11.jpeg" height="230" width="150" ></a>
  </div>
         </div>
   <div class='row' style='background-color:salmon'>
           <div class="col-sm-12 text-center" style="height:60px;padding-top:10px;font-size: 30px">Apple iPhone 11</div>
  </div>
</div> 
                <div class='col-sm-3 slider-box'>
         <div class="row">
           <div class="col-sm-12 text-center">
               <a href='mobile.php'>
                   <img src="../mobile/honor9x.jpeg" height="230" width="150" /></a>
  </div>
         </div>
   <div class='row' style='background-color:salmon'>
       <div class="col-sm-12 text-center" style="height:60px;padding-top:10px;font-size: 30px">Honor 9x Pro</div></div>
       
</div> 
                <div class='col-sm-3 slider-box'>
         <div class="row">
           <div class="col-sm-12 text-center">
    <a href='mobile.php'>
        <img src="../mobile/vivo.jpeg" height="230" width="150" ></a>
  </div>
         </div>
   <div class='row' style='background-color:salmon'>
           <div class="col-sm-12 text-center" style="height:60px;padding-top:10px;font-size: 30px">Vivo V19</div>
  </div>
</div> 
                
            </div>
   
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php include 'footer.php';?>
        
    </body>
</html>
