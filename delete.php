<?php

    include 'conect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `kontak` where id=$id";
        $result=mysqli_query($con,$sql);
            header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

?>