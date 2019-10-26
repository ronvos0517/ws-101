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
            background-color: Tomato;
             background-size: cover;
            
        }
        input{
            color: black;
        }
        </style>
    
</head>
<body>
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
    
        <h1 id="d1">Register</h1>    </center>
        <center> <a class="waves-effect waves-light btn" href="welcome.php">Back</a></center>
<center>
       <form action="" method="post">
           <input type="text" name="uname" placeholder="username"><br><br>
           <input type="password" name="pwd" placeholder="password"><br><br>
           <button type="submit" name="reg" class="waves-effect waves-light btn">Register</button>
       </form>
       <?php 
       if (isset($_POST['reg'])) {
           $uname = $_POST['uname'];
           $pwd = $_POST['pwd'];
           $query = mysqli_query($conn,"INSERT INTO tbl_login (username,passwd) VALUE ('$uname','$pwd')");
           if (!$query) {
               echo "faild to registerd!!";
           }else {
               echo "successfully registerd";
               header("location: welcome.php");
           }
       }
       ?>     
</center>

    
</body>
</html>