<?php
if(isset($_POST['submit'])){
    $u = $_POST['user'];
    $p = $_POST['pass'];
    $con = mysqli_connect("localhost","root","","mydata");
    $sql =" insert into loginpage(username, password) values ('$u','$p')";
    $res = mysqli_query($con,$sql);
    if($res){
        echo" data is connected ";

    }
    else{
        echo" data is failed ";
    }
}
?>