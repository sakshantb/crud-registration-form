<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        // $id=$_POST['id'];
        $name=$_POST['user'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $insert="insert into mycrud (`user`, `email`,`pass`) values('$name','$email',' $pass')";
        $query=mysqli_query($db,$insert);
        if($query){
            echo "data inserted";
            header("location:read.php");
        }
    }
   

?>