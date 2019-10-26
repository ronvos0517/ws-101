<?php
    if(isset($_POST['deleteyes'])) {
        $id=$_POST['deleteid'];
        $query = mysqli_query($conn,"DELETE FROM `tbl_login` WHERE ID = '$id'");
        if (!$query){
            echo 'fail to delete';
        }else{
            echo 'Successfully Deleted';
        }
    }
?>