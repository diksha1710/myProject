<?php
    
   session_start();
   if(!isset($_SESSION['name'])){
       header("location:login.php");
   }
       
$msg="";
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $emailid=$_POST['email'];
    $phone=$_POST['phone'];
   $country=$_POST['country'];
    
    $subject=$_POST['subject'];
    
    
    $link=mysql_connect("127.0.0.1","root","");
    mysql_select_db("eshop");
    $qry="insert into contact_us  values('$name','$emailid','$phone','$country','$subject')";
    mysql_query($qry);
    
    if(mysql_affected_rows()>0){
    $msg="<font color='red'>Sent!!!</font>";
   header("location:.php");
    }
    else {     
    $msg="<font color='red'>Error in uploading!!</font>";
    mysql_close($link);}
}

?>
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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
    </head>
    <body style="background-image: url('../mobile/contact.jpg')">
        <?php include 'header2.php';?>
        <?php include 'menu.php';?>
        <div class="text-center">
            <h3 text-center><u>Contact Form</u></h3></div>
        <div class="container">
            
  <form method="post" enctype="multipart/form-data">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.." required/>

    <label for="lname">Email ID</label>
    <input type="text" id="lname" name="email" placeholder="Your email address.." required/>
    <label for="fname">Phone No.</label>
    <input type="text" id="fname" name="phone" placeholder="Your contact number..">

    <label for="country">Country</label>
    <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
<?php echo $msg;?>
    <input type="submit" name="sub" value="Send Query"/>
  </form>
</div>
        <br><br>
        <?php include 'footer.php';?>
    </body>