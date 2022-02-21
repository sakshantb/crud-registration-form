<?php 
    include "connection.php";
    if(isset($_GET['editid'])){
        $eid= $_GET['editid'];
        $eread= " SELECT id, user, email, pass FROM mycrud where id= $eid ";
        $equery= mysqli_query($db,$eread);
        $num= mysqli_num_rows($equery);
        $count= mysqli_fetch_assoc($equery);
        echo $count["user"];
     
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- <a href="read.php">check form</a> -->
    <form action="" method="post">
       user: <input type="text" name="uuser" value="<?php echo  $count['user'] ?>"  >
       email: <input type="text" name="uemail" value="<?php echo $count['email'] ?>" >
       pass: <input type="text" name="upass" value="<?php echo $count['pass'] ?>" >
       <input type="submit" name="update" value="update">
    </form>
</body>
</html>

<?php

include "connection.php";
if(isset($_POST['update'])){
    $uuser=$_POST['uuser'];
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    $uinsert= "UPDATE `mycrud` SET `user`='$uuser',`email`='$uemail',`pass`='$upass' WHERE id=$eid";
    $uquery= mysqli_query($db,$uinsert);
    if($uquery){
        echo "data updated";
        header("location:read.php");
    }
}
?>