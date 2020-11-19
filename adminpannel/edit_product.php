<?php
session_start();
   if(!isset($_SESSION['name'])){
       header("location:login.php");
   }
    $link=mysql_connect("localhost","root","");
    mysql_select_db("eshop");
    if(isset($_GET['pid']))
    {
        $id=$_GET['pid'];
        $result=mysql_query("select * from product_master where pid=$id");
        $r= mysql_fetch_array($result);
    }
    if(isset($_POST['update_product']))
    {
        $id=$_POST['txt_pid'];
        $name=$_POST['txt_pname'];
        $type=$_POST['txt_ptype'];
        $price=$_POST['txt_pprice'];
        $qry="";
        if($_FILES['pimage']['name']!="")
        {
            $src=$_FILES['pimage']['tmp_name'];
            $des=$_SERVER['DOCUMENT_ROOT']."ecommerce/mobile/".$_FILES['pimage']['name'];
            move_uploaded_file($src,$des);
            $path='mobile/'.$_FILES['pimage']['name'];
            $qry="update product_master set pname='$name',ptype='$type',pprice='$price',pimage='$path' where pid=$id";
        }  
        else
        {
            $qry="update product_master set pname='$name',ptype='$type',pprice='$price' where pid=$id";
        }
        mysql_query($link,$qry);
        header("location:product.php");
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
    </head>
    <body>
         <div class="row">
                <div class="col-sm-12"><?php include 'header.php';?></div>
        </div>
        <div class="row">
                <div class="col-sm-12"><?php include 'adminmenu.php' ?></div>
        </div>
        <div class="content-wrapper" style="height:500px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="page-head-line" style="color:red">Edit Products</h4>
                    </div>            
                    <hr style="background-color:salmon;width:100%;height:2px">    
                </div>
                <div class="row">
                    <div class="col-md-4"> </div>
                    <div class="col-md-4">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Product ID</label>
                                <input type="text" name="txt_pid" value="<?php if(isset($_GET['pid'])) echo $r[0]; ?>" class="form-control" required/>
                            </div>
                               <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="txt_pname" class="form-control" required/>
                            </div> 
                            <div class="form-group">
                                <label>Product Type</label>
                                <input type="text" name="txt_ptype" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <input type="text" name="txt_pprice" class="form-control"required/>
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" name="pimage" class="form-control" required/>
                            </div>
                            <input type="submit" name="update_product" value="Update"/>
      
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-12"><?php include 'footer.php' ?></div>
        </div>
    </body>
</html>
