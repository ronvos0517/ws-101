<?php 
// session_start();
// if (!isset($_SESSION['login'])) {
//     header("location:index.php");
// }
include './assets/php/config.php';

?>
<!DOCTYPE html>

<head>
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background-image: url(./assets/img/cs.jpg);">
<ul id="slide-out" class="sidenav" onclick="myFunction(this)">
    <li><div class="user-view">
      <div class="background">
        <div class="card-panel #e040fb purple accent-2" style="height: 200px"></div>
      </div>
      <a href="#user"><img class="circle" src="./assets/img/c.jpeg "></a>
      <a href="#name"><span class="white-text name">RONALD O. VOSOTROS</span></a>
      <a href="#email"><span class="white-text email">ronaldvosotros@gmail.com</span></a>
    </div></li>
    <li><a class="waves-effect" href="index.php">HOME</a></li>
    <li><a class="waves-effect" href="about.php">PROFILE</a></li>
    <li><a class="waves-effect" href="shop.php">SHOP</a></li>
    <li><a class="waves-effect" href="blog.php">BLOG</a></li>
      <li id="dropdown"><a class="waves-effect" id="dropbtn" href="login.php"><b>LOG-OUT</b>&nbsp;
        </a>
  <div id="dropdown-content">
    <a href="">Sign In</a>
    <a href="">Sign Up</a></li>
</div>
  </ul></div>
  <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse" style="margin-top: 20px;"><i class="material-icons">menu</i></a>

 <div id="container"> 
<button class="butt" style= "width:100px; padding: 10px 10px;">
 <a href="index.php" style= "color: white; text-decoration: none;">Log Out</a></button>
         <div id="header"></div>

        <h1>WELCOME TO MY PAGE<?php echo $_SESSION['uname']; ?></h1>
        <img  id="c" src="./assets/img/c.jpeg ">
        <a class="waves-effect waves-light btn" href="register.php">Register</a>  
      <a href="database.php" class="waves-effect waves-light btn">User</a>  

 </div>
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);
        var elems = document.querySelectorAll('.scrollspy');
        var instances = M.ScrollSpy.init(elems);
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>
    <?php
                    if ($conn->connect_error) {
                        die(" Not connected to". $conn->connect_error);
                    }else {
                        echo " Connected to ". $db ;
                    }
                ?>
</body>
</html>