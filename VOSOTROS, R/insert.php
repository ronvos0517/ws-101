<?php
include ('./assets/php/config.php');

if(ISSET($_POST['insert'])){

	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$paswd= mysqli_real_escape_string($conn, $_POST['password']);
	
	$password = md5($paswd);
	
    $query = "INSERT INTO `tbl_useraccount`(`uname`, `paswd`) VALUES ('$uname','$password')";
    $result = mysqli_query($conn, $query);
	header("location: database.php");
	}
?>