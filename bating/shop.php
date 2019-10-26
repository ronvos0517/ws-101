<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>darcon's shop</title>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
    body{
        background-color:Tomato;
        
    }
  

    </style>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="material-icons">home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login.php">Login</a></li> 
        <li><a href="blog.php">Blog</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="shop.php">shop</a></li>
      </ul>
    </div>
  </nav>
    

    <div class="container">
        <h1 id="td" style="color:black;">WELCOME TO DARCON'S SHOP</h1>
    <table>
    <?php $result = mysqli_query($conn,"SELECT * FROM tbl_shop") ;
    while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td><img src=".$row['Img_url']." width='100' hight='100'></td>". "<td>".$row['Name']."</td>". "<td>".$row['Price']."</td></tr>";
    }
    ?>
    </table>
    </div>
    <!-- <h2 id="td">Items</h2> -->
    <!-- <pre>
    <h3 id="g">     
                <img src="./assets/img/w1.jpg" alt="" height="200" width="200">                                                         <img src="./assets/img/w2.jpg" alt="" height="200" width="200">
                name: Casio G-Shock Men's Red Resin Strap Watch                                  name: Casio G-Shock Men's Black Resin Strap Watch GA-700-1BDR
                Price: ₱4,995.00                                                                 Price: ₱4,995.00



                <img src="./assets/img/w3.jpg" alt="" height="200" width="200">                                                         <img src="./assets/img/w4.jpg" alt="" height="200" width="200">
                name: Casio G-Shock Mud Resisitant Men's Black Resin Strap Watch GX-56BB-1D      name: Casio G-Shock Men's Black Resin Strap Watch GA-200-1ADR
                Price: 5,053.00                                                                  Price: 5,995.00
                </h3>
                 -->
    <!-- </pre> -->
</body>
</html>