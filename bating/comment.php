<?php
    require('./config.php');
    $name = $_POST['name'];
    $comment = $_POST['comments'];
    $comment_length = strlen($comment);

 if($comment_length > 100){
     header("location: blog.php?error=1");
 }else{
     mysqli_query($conn,"INSERT INTO comments  VALUES ('', '$name', '$comment')");
    
        header("location:blog.php");
 }



?>