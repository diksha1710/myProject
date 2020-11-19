
<?php
$msg="";
if(isset($_POST['sign_in'])){
   $uname=$_POST['txt_email'];
   $pass=$_POST['txt_password'];
  $link=mysql_connect("127.0.0.1","root","");
    mysql_select_db("eshop");
   $qry="select * from signup where emailid='$uname' and password='$pass' and role=' '";
   $result=mysql_query($qry);
   if(mysql_affected_rows()>0){
       if(isset($_POST['rem'])){
           setcookie("username",$uname,time()+120);
           setcookie("password",$pass,time()+120);
       }
       $r=mysql_fetch_array($result);      
       if($r['role']==' '){
       session_start();
       $_SESSION['name']=$r['name'];
       $_SESSION['role']=$r['role'];
       header("location:home.php");
   }
   }
  
 else {
     $msg="<strong><font color='red'>invalid Username or Password!!</font></strong>";
     header("location:signup.php");
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
<script type="text/javascript" src="script.js"></script>
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
    <body style="background-image: url('../mobile/page.jpg');background-repeat: no-repeat;background-size: 100% 100%">
        
         <?php include 'header2.php';?>    
        
        
        
        <div class="content-wrapper" style="padding-bottom:250px">
            <script>
function myFunction() {
  alert("I am an alert box!");
}
</script>
            
            
            <div class="container">
                
                <div class="row">
                    <div class="row">
                       
                        <div class="col-sm-12"></div></div>
                <div class="col-md-12" style="padding-top:40px">
                    <?php echo $msg;?>
                    <h4 class="page-head-line" style="color:white">Please Login</h4>
                </div>
                   
                    <hr style="background-color:white;width:100%;height:2px">
                    
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                
                                <label style="color:white">Email Address:</label>
                                <input type="text" name="txt_email" class="form-control" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];?>"required/>
                            </div>
                             <div class="form-group">
                                <label style="color:white">Password:</label>
                                <input type="text" name="txt_password" class="form-control" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>" required/>
                            
                             </div>
                            <div class="form-group">
                                <input type="checkbox" style="background-color:white" class="form-group" name="rem" value="on"/><label style="color:white">Remember me.</label>
                                <button onkeyup="myFunction()" type="submit" name="sign_in" class="button button1"/>Log in Me</button>
                            </div>
                            <div class="form-group" >
                                
                                <a href="#" style="color:red">Use this for login:<br>dik@gmail.com<br>Pass: 123456</a> 
                            </div>
                            </form>
                    </div>
                    <div class='col-md-6'>
                        <img src="cart2.jpg" width="650px" height="350px"/>
                       
                    </div>

                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
        </div>
    </body>
</html>
