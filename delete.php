<?php
    include "connection.php";
    if(isset($_GET['deleteid'])){
        $deleteid=$_GET['deleteid'];
        // $uname=$_POST['user'];
        // $uemail=$_POSt['email'];
        // $upass=$_POST['pass'];

        $update="delete from mycrud where id='$deleteid'";
        $uquery=mysqli_query($db,$update);
        if($uquery){
            echo "data deleted";
            header("location:read.php");
        }
    }
?>