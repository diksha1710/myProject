<?php
session_start();
   if(!isset($_SESSION['name'])){
       header("location:login.php");
   }
    $msg="";
    if(isset($_POST['add_product']))
    {
        $id=$_POST['txt_pid'];
        $model=$_POST['txt_modelno'];
        $cname=$_POST['txt_cname'];
        $processor=$_POST['txt_processor'];
        $ram=$_POST['txt_ram'];
        $size=$_POST['txt_size'];
        $storage=$_POST['txt_storage'];
        $fcam=$_POST['txt_fcamera'];
        $bcam=$_POST['txt_bcamera'];
        $cap=$_POST['txt_capacity'];
        $link=mysql_connect("127.0.0.1","root","");
        mysql_select_db("eshop");
        $qry="insert into product_desc values ($id,'$model','$cname','$processor','$ram','$size','$storage','$fcam','$bcam','$cap')";
        mysql_query($qry);
        if(mysql_affected_rows()>0)
        {
            $msg="<font color='green'>Product Description Added!!!</font>";
        }
        else 
        { 
            $msg="<font color='red'>Error in uploading description!!</font>";
        }
        mysql_close($link);
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

    </head>
    <body>
        <?php include './header.php';?>      
        <?php include 'adminmenu.php'; ?>
        
        <div class="content-wrapper">
            <div class="container" >
                <div class="row">
                <div class="col-md-12" style="padding-top:40px">
                    <h4 class="page-head-line" style="color:red">Add Product's Description</h4>
                </div>
                   
                    <hr style="background-color:salmon;width:100%;height:2px">
                    
            </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="alert alert-success">
                            <a href='addproducts.php'>Add new products</a>
                        </div>
                    </div>
                </div>
                        <div class="row">
                            
                <div class="col-md-5">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Product ID</label>
                                <input type="text" name="txt_pid"  class="form-control" required/>
                            </div>
                                                    
                            <div class="form-group">
                                <label>Model Number</label>
                                <input type="text" name="txt_modelno" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="txt_cname" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Processor</label>
                                <input type="text" name="txt_processor" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Battery capacity</label>
                                <input type="text" name="txt_capacity" class="form-control" required/>
                            </div>
                            </div>
                           
                
                    <div class="col-md-2">
                        
                </div>
                            
                <div class="col-md-5">
                            <div class="form-group">
                                <label>Storage</label>
                                <input type="text" name="txt_storage" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Screen size</label>
                                <input type="text" name="txt_size" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Front Camera</label>
                                <input type="text" name="txt_fcamera" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Back Camera</label>
                                <input type="text" name="txt_bcamera" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Ram</label>
                                <input type="text" name="txt_ram" class="form-control" required/>
                            </div>
                            </div> 
            </div>
        </div>
            <div class='row'>
                <div class='col-md-5'>
                    
                </div>
                <div class='col-md-3'>
                    <input type="submit" name="add_product" value="Add"/>
                </div>
                <div class='col-md-4'>
                   <?php echo "$msg"?> 
                </div>
            </div>
            
            <div class='row'>
                            <div class="col-md-12">
                    
                    </div>
                </div>
            
        
        
            <?php include 'footer.php' ?>
    </body>
</html>
