<?php 
include('./assets/php/server.php');
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
       #s{
         color: white; font-size: 18px;
       }
       #r1{
          color: rgba(213, 214, 218, 0.884);font-weight: bold;    
        }
     </style>
</head>
<body style="background-image: url(./assets/img/dr.jpg);">
  <ul id="slide-out" class="sidenav" onclick="myFunction(this)">
        <nav style="background-color: rgba(0, 128, 128, 0.568)">
         <div class="nav-wrapper">
          <ul id="nav-mobile" class="left hide-on-med-and-down">
        </ul>
      </div>
      </nav>
      <a href="#user"><img class="circle" src="./assets/img/ron.jpeg "></a>
      <a href="#name"><span class="white-text name">RONALD O. VOSOTROS</span></a>
      <a href="#email"><span class="white-text email">ronaldvosotros@gmail.com</span></a>
    </div></li>
    <li><a class="waves-effect" href="index.php">HOME</a></li>
    <li><a class="waves-effect" href="about.php">PROFILE</a></li>
    <li><a class="waves-effect" href="shop.php">SHOP</a></li>
    <li><a class="waves-effect" href="blog.php">BLOG</a></li>
    <li><a class="waves-effect" href="database.php">BATABASE</a></li>
      <li id="dropdown"><a class="waves-effect" id="dropbtn" href="login.php"><b>LOG IN</b>&nbsp;
        </a>
  <div id="dropdown-content">
    <a href="login.php">Sign In</a>
    <a href="reg.php">Sign Up</a></li>
</div>
  </ul></div>
    <div id="r1">   
 <div id="header"></div>
        <h1>LOGIN PAGE</h1>
<form method="post" style="background-color: rgba(8, 212, 248, 0.11); width: 500px;
 margin-left: 200px; margin-top: 50px; osition: absolute; padding: 70px 30px; border-radius: 5%; " action="login.php"> 
<?php include('./assets/php/error.php'); ?>
<div class="imgcontainer">
          
      </div>
      <div class="container">
      <div class="input-field col s6">
        
      <label><b>Username</b></label>
              <input id="r1" type="text" name="username" required>
            </div>
            <div class="input-field col s6">
                <label><b>Password</b></label>
                <input id="r1" type="Password" name="password" required>
              </div>
         <button type="submit" name="login_user" class="btn btn-success">Login</button>
          <button class="btn btn-primary">Cancel</button>
  </form>
  <br>
  <p2>
  		<a href="reg.php">Register</a>
  	</p2><br>
   <?php
   include('./assets/php/config.php');
   if($conn->connect_error){
    die("Connection failed, due to: ".$conn->connect_error);
}else{
    echo "Connected to the Database!";
}
   ?>
   
        <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
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
    <!-- <script>
      $(document).ready(function() {
          $('input#input_text, textarea#textarea2').characterCounter();
        }); 
      </script> -->
</body>
</html>