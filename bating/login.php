<?php 
include 'config.php'
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
    <style>
        body{
            background: url('./assets/img/ml5.jpg') no-repeat center fixed; 
             background-size: cover;
            
        }
        </style>
    
</head>
<body style="background-color: e indigo darken-4">
<nav>
    <div class="nav-wrapper  blue darken-1">
      <a href="#" class="material-icons">home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login.php">Login</a></li>
        <li><a href="blog.php">Blog</a></li> 
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="shop.php">Shop</a></li>
      </ul>
    </div>
  </nav>
    <center><H1 style="color: black">LAMBATING HTML LOG IN PAGE</H1></center>
  
  <div class = "container">
  <div class = "container">
  <div class = "container">
  <div style= "float: center;"> 
   <form action="" method="post">
    <br><br>
  <div class="row">
    <div class="input-field col s6">
    <input type="text" name="uname" class="text-black" placeholder="Username" id="p1"><br>
    
<br>
    <input type="password" name="pwd" class="text-black" placeholder="password" id="p2">
    
<br>
<button type="submit" name="login" class="waves-effect waves-light btn"> Log In</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php
                            if(isset($_POST['login'])){
                                $sname = $_POST['uname'];
                                $passwd = $_POST['pwd']; 
                                $sql = "SELECT * FROM tbl_login WHERE username ='$sname' AND passwd = '$passwd'";   
                                $query = mysqli_query($conn,$sql);
                                if ($query->num_rows>0) {
                                 
                                    session_start();
                                    $_SESSION['uname']=$sname;
                                    $_SESSION['login']=true;
                                    header("location: welcome.php");
                                }else {
                                    echo "<h5 id='s1'>Invalid pasword/user</h5>";
                                 
                                    
                                }
                            }
                        ?>
    <script src="./assets/js/script.js"></script>
</body>
</html>
