<?php
    if(isset($_POST['submit'])){

        $f=$_POST['nm'];
        $l=$_POST['em'];
        $e=$_POST['ps'];
        $p=$_POST['mb'];
        $c=$_POST['ad'];
        $a=$_POST['st'];
        $g=$_POST['gridRadios'];
        $con=mysqli_connect("localhost","root","","mydata");
        $sql="insert into  service (Name,Email,Password,Mobile,Address,State,Gender) values ('$f','$l','$e','$p','$c','$a','$g')";
        $res=mysqli_query($con,$sql);
        if($res){
            echo "<script>alert('Data is scuessfully');</script> ";
    
        }
        else{
            echo "faild connaction";
        }
    
    }

?>
