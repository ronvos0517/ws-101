<?php
    if (isset($_GET ['id'])){
        $id=$_GET['id'];
    }
    if(isset($_POST['agree'])){
        $id = mysqli_real_escape_string($conn,$_POST['id']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $passwd = mysqli_real_escape_string($conn,$_POST['passwd']);
        $query = mysqli_query($conn,"UPDATE `tbl_login` SET username = '$username', passwd = '$passwd' WHERE ID = '$id'");
        if (!$query){
            echo 'Update Not Successful';
        }else{
            echo 'Update Successful';
        }
    }
?>