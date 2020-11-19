<?php
session_start();
   if(!isset($_SESSION['name'])){
       header("location:login.php");
   }
$msg="";
if(isset($_POST['add_product'])){
    $id=$_POST['txt_pid'];
    $name=$_POST['txt_pname'];
    $type=$_POST['txt_ptype'];
    $price=$_POST['txt_pprice'];
    
    $src=$_FILES['pimage']['tmp_name'];
    $des=$_SERVER['DOCUMENT_ROOT']."ecommerce/mobile/".$_FILES['pimage']['name'];
    move_uploaded_file($src,$des);
    $path='mobile/'.$_FILES['pimage']['name'];
    $link=mysql_connect("127.0.0.1","root","");
    mysql_select_db("eshop");
    $qry="insert into product_master values($id,'$name','$type','$price','$path')";
    mysql_query($qry);
    if(mysql_affected_rows()>0){
    $msg="<font color='green'>Product Added!!!</font>";}
    else {     
    $msg="<font color='red'>Error in uploading!!</font>";
    mysql_close($link);}
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
        <?php include 'header.php';?>      
        <?php include 'adminmenu.php' ?>
        
        <div class="content-wrapper" >
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line" style="color:red">Add Products</h4>
                
                   
                    <hr style="background-color:salmon;width:100%;height:2px">
                    </div>
            </div>
                <div class="row">
                    <div class="col-md-4">
                        
                </div>
                    <div class="col-md-4">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Product ID</label>
                                <input type="text" name="txt_pid" class="form-control" required/>
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
                            <input type="submit" name="add_product" value="Add"/>
                            <?php echo $msg;?>
                        </form>
                    </div>
                    <div class='col-md-2'></div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    </div>
            </div>
        <?php include 'footer.php' ?>
        </div>
    </body>
</html>
