/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*function confirmation(){
    con=confirm("are you want to delete this product");
    if(con==true)
        document.write("Product had been deletet");
}*/
function getProduct(){
    data=document.getElementById("search").value;
    obj=new XMLHttpRequest();
    obj.open("get","getproduct.php?id="+data,true);
   
    obj.send();
    obj.onreadystatechange=function(){
        if(obj.readyState==4 && obj.status==200){
            document.getElementById("t1").hidden=true;
            document.getElementById("t2").hidden=false;
             document.getElementById("t2").innerHTML=obj.responseText;
             document.getElementById("t3").hidden=true;
            document.getElementById("t4").hidden=false;
             document.getElementById("t4").innerHTML=obj.responseText;
        }
    }
}



