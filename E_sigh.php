<?php
if(isset($_POST['submit'])){
    $u = $_POST['user'];
    $p = $_POST['pass'];
    $con = mysqli_connect("localhost","root","","mydata");
    $sql ="insert into loginpage(user_name, password) values ('$u','$p')";
    $res = mysqli_query($con,$sql);
    if($res){
        echo"<script> alert('Data is scuessfully ');</script> ";

    }
    else{
        echo"<script>alert(' Data is not connected ');</script>";
    }
}
?>