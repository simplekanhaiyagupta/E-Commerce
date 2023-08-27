<?php
if(isset($_POST["submit"])){
    $u = $_POST['username'];
    $e = $_POST['email'];
    $mo = $_POST['mobile'];
    $a = $_POST['address'];

    $con = mysqli_connect("localhost","root","","mydata");
    $sql=" insert into econtact(Name,Email,Mobile,Address) values ('$u','$e','$mo','$a')";
    $res = mysqli_query($con,$sql);
    if($res){
        
    
        echo "scuesscfull";
    }
    else{
        echo "connection failed";
    }
}
?>