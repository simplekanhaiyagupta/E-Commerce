<?php
if(isset($_POST['submit'])){
    $f = $_POST['fname'];
    $l = $_POST['lname'];
    $e = $_POST['email'];
    $m = $_POST['mob'];
    $c = $_POST['card'];
    $cv = $_POST['scv'];
    $ad = $_POST['a'];
    $ba = $_POST['billadd'];
    $s = $_POST['state'];
    $p = $_POST['pincode'];
    $r = $_POST['rs'];
    $con = mysqli_connect("localhost","root","","mydata");  
    $sql ="insert into  shop(FirstName,LsatName,Email,Mobile_no,Card_no,Cvv, Address,Billing_Address,State,Pincode,Amount) values ('$f','$l','$e','$m','$c','$cv','$ad','$ba','$s','$p','$r')";
    $res = mysqli_query($con,$sql);
    if($res){
        echo "<script>alert(' Data Successfully ');</script>";
    }
    else{
        echo " filed connection";
    }


}
?>