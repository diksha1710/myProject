<?php
$msg="";
if(isset($_POST['sign_up'])){
    $name=$_POST['txt_name'];
    $email=$_POST['txt_email'];
    $password=$_POST['txt_password'];
    $gender=$_POST['txt_gender'];
    $dob=$_POST['txt_dob']; 
    $phone=$_POST['txt_phone'];
    
    
    
    $link=mysql_connect("127.0.0.1","root","");
    mysql_select_db("eshop");
    $qry="insert into signup  values('$name','$email','$password','$gender','$dob',$phone,' ')";
    mysql_query($qry);
    
    if(mysql_affected_rows()>0){
    $msg="<font color='green'>Added!!!</font>";
    header("location:home.php");
    }
    else {     
    $msg="<font color='red'>Error in uploading!!</font>";
    mysql_close($link);}
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
.button {
  background-color:green;
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
        <?php include 'header2.php';?>     
        
        
        <div class="content-wrapper" style="padding-bottom:250px">
            <div class="container">
                <div class="row">
                <div class="col-md-12" style="padding-top:40px">
                    <h4 class="page-head-line" style="color:red">Sign Up Here!!</h4>
                </div>
                   
                    <hr style="background-color:salmon;width:100%;height:2px">
                    
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="txt_name" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type="text" name="txt_email" class="form-control" required/>
                            </div>
                             <div class="form-group">
                                <label>Password:</label>
                                <input type="text" name="txt_password" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Gender:</label>
                                <input type="text" name="txt_gender" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label>Dob:</label>
                                <input type="text" name="txt_dob" class="form-control" required/>
                            </div>
                            
                            <div class="form-group">
                                <label>Phone:</label>
                                <input type="text" name="txt_phone" class="form-control" required />
                            </div>
                            
                            <div class="form-group">
                                
                                <input type="submit" class="button button1" name="sign_up" value="Sign Up"/>
                                <?php echo $msg;?>
                            </div>
                            <div class="form-group">
                                <a href="#">Forget Password?</a>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
        </div>
    </body>
</html>
