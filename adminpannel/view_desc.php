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
        <?php include 'header.php';?>
       
           <?php include 'adminmenu.php' ?>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="page-head-line" style="color:red">View Description</h4>
                    </div>   
                    <hr style="background-color:salmon;width:100%;height:2px">        
                </div>
                <div class="row">
                    <div class='col-md-12'>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php  
                                if(isset($_GET['pid'])) 
                                {
                                    $id= $_GET['pid'];
                                    $link= mysql_connect("127.0.0.1","root","");
                                    mysql_select_db("eshop");
                                    $qry= "select * from product_desc where pid=$id";
                                    $result= mysql_query($qry);
                                    if(mysql_affected_rows()>0)
                                    {
                                        echo "<table width='100%' class='table table-striped table-hover' >";
                                        while($r= mysql_fetch_array($result))
                                        {
                                            echo "<tr>";
                                                echo "<th>Product ID</th> <td style='width:1000px'>$r[0]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>Model No.</th> <td style='width:10px'>$r[1]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>Company Name</th> <td style='width:10px'>$r[2]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>Processor</th> <td style='width:10px'>$r[3]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>RAM</th> <td style='width:10px'>$r[4]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>Screen Size</th> <td style='width:10px'>$r[5]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>Storage</th> <td style='width:10px'>$r[6]</td>"; 
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>Front Camera</th> <td style='width:10px'>$r[7]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>Rear Camera</th> <td style='width:10px'>$r[8]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<th>Battery Capacity</th> <td style='width:10px'>$r[9]</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    else
                                    {
                                        echo "<h3> No Record Found!!!!!";
                                    }
                                }  
                            ?>
                        </div>
                    </div>
                </div>
            </div>
       
        
               <?php include 'footer.php' ?>
     
    </body>
</html>
