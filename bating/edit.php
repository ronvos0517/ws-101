<?php 
session_start();
include 'config.php';
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        body{
            background: Tomato; 
             background-size: cover;
            
        }#d1{
            color: black;
        }#q{
            color: black;
        }
        </style>
    
</head>
<body style="background-color: Tomato">
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="login.php">login</a></li> 
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="shop.php">Shop</a></li>
      </ul>
    </div>
  </nav>
    <br><br><br>
    <center>
        <h1 id="d1">EDIT</h1>    </center>
       <center><a href="welcome.php" name="reg">Back</a></center>
<center>
<form action="" method="post">
           <input type="text" name="uname" placeholder="username"><br><br>
           <input type="password" name="pwd" placeholder="password"><br><br>
           <button type="submit" name="edit">Update</button><br><br>
       </form>
       <?php 
       if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $result = mysqli_query($conn,"SELECT * FROM tbl_login where id = '$id'");
        $row= mysqli_fetch_array($result);
    }
    if (isset($_POST['uname'])) {
        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
        $query = mysqli_query($conn,"UPDATE `tbl_login` SET username = '$uname', passwd = '$pwd' WHERE id = '$id' ");
            if (!$query) {
                echo "Update failed!";
            }else {
                echo "successfully updated";
                header("location: welcome.php");
            }
    }
       ?>
</center>

    
</body>
</html>