<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");


  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
     </style>
</head>
<body style="background-image: url(./assets/img/dr.jpg);background-size:cover">
  <ul id="slide-out" class="sidenav" onclick="myFunction(this)">
    <li><div class="user-view">
      <div class="background">
        <div class="card-panel #e040fb grey" style="height: 200px"></div>
      </div>
      <a href="#user"><img class="circle" src="./assets/img/ron.jpg "></a>
      <a href="#name"><span class="white-text name">RONALD O. VOSOTROS</span></a>
      <a href="#email"><span class="white-text email">ronaldvosotros@gmail.com</span></a>
      <a href="#number"><span class="white-text number">Contact No: 09059590637</span></a>
    </div></li>
    
    <li><a class="waves-effect" href="index.php" id="active">HOME</a></li>
    <li><a class="waves-effect" href="about.php">PROFILE</a></li>
    <li><a class="waves-effect" href="shop.php">SHOP</a></li>
    <li><a class="waves-effect" href="blog.php">BLOG</a></li>
    <li><a class="waves-effect" href="database.php">DATABASE</a></li>
    <li><a class="waves-effect" href="index.php?logout='1'">LOG-OUT</a></li>
      
    </div>
  </ul></div>
  <a href="#" data-target="slide-out" class="sidenav-trigger " style="margin-top: 100px;"><i class="material-icons">menu</i></a> 
 <div id="container"> 
         <div id="header"></div>

        <h1>WELCOME TO MY PAGE</h1>
        <img  id="c" src="./assets/img/ron.jpg ">
        
        <b><p> ICAN ACCEPT FAILURE.<br>
            EVERYONE FAILS AT SOMETHING,<br>
            BUT I CAN NOT ACCEPT NOT TRYING.<br>
    </p></b>  
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
</body>
</html>