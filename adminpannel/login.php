<?php
$msg="";
if(isset($_POST['sign_in'])){
   $uname=$_POST['txt_email'];
   $pass=$_POST['txt_password'];
  $link=mysql_connect("127.0.0.1","root","");
    mysql_select_db("eshop");
   $qry="select * from signup where emailid='$uname' and password='$pass' and role='admin'";
   $result=mysql_query($qry);
   if(mysql_affected_rows()>0){
       $r=mysql_fetch_array($result);
       if($r['role']=='admin' || $r['role']=='employee' ){
       session_start();
       $_SESSION['name']=$r['name'];
       $_SESSION['role']=$r['role'];
       header("location:home.php");
   }
   }
 else {
     $msg="<strong><font color='red'>invalid!!!</font></strong>";
      mysql_close($link);
   }

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
.button {
  background-color:salmon;
  border: none;
  color: black;
  padding: 10px 25px;
  text-align: center;
  font-size: 12px;
  margin: 4px 2px;
  transition: 0.3;
  
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}
.button1 {border-radius: 2px;}

</style>

    </head>
    <body>
        <?php include 'header.php';?>      
        
        
        <div class="content-wrapper" style="padding-bottom:250px">
            <div class="container">
                <div class="row">
                <div class="col-md-12" style="padding-top:40px">
                    <h4 class="page-head-line" style="color:red">Please Login</h4>
                </div>
                   
                    <hr style="background-color:salmon;width:100%;height:2px">
                    
            </div>
                <?php echo $msg;?>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" name="txt_email" class="form-control" required/>
                            </div>
                             <div class="form-group">
                                <label>Password:</label>
                                <input type="text" name="txt_password" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" class="button button1" name="sign_in" value="Login"/>
                            </div>
                            <div class="form-group">
                                <a href="#">Forget Password?</a>
                            </div>
                    </div>
                    <div class='col-md-6'style="padding-top:20px">
                        <div class="alert alert-success">
                            <b>Instructions:</b><br>
                            Please fill the given details to access admin panel.<br>
                            <i style="color:red">username:diksha@gmail.com<br>pass:@1234</i>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
        </div>
    </body>
</html>
