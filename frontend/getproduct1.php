<?php
$data=$_GET['id'];
include_once 'db.php';
$query="select * from womens_store where ptype='cloth' and pname like '$data%'";
//$query1="select * from womens_store where ptype='cloth' and pname like '$data%'";
$result=mysql_query($query);
//$result1=mysql_query($query1);
if(mysql_affected_rows()>0){
                    $x=1;
                    while($r=mysql_fetch_assoc($result)){
                        if($x==1)
                            echo "<div class='row'>";
                            echo "<div class='col-sm-3 slider-box'>";
                        echo "<div class='row'>";
                        echo "<div class='col-sm-12 text-center img-box' style='padding-top:3px;background-color:steelgrey'><a href='womens_store.php?pid=$r[pid]'><img src='../$r[pimage]' height='230' width='150'/></a></div>";
                        echo "</div>";
                        echo "<br>";
               
                        echo "<div class='row' style='background-color:salmon'>";
                        echo "<div class='col-sm-6 text-center'>Name</div>"; echo "<div class='col-sm-6 text-center'>$r[pname]</div>";
                        echo "</div>";
                        echo "<div class='row' style='background-color:salmon'>";
                        echo "<div class='col-sm-6 text-center'>Price</div>"; echo "<div class='col-sm-6 text-center'>$r[pprice]</div>";
                        echo "</div>";
                        echo "</div>";
                        //echo "<div class='col-sm-1'>";
                        //echo "</div>";
                        
                        $x++;
                        
                        if($x==4){
                            echo "</div>";
                            //echo "<br>";
                            //echo "<br>";
                        $x=1;
                    }
                }
                    
                }
            ?>