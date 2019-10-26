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
<html>
<head>
        <title>Shop</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/materializecss.min.css">
            <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
             <link rel="stylesheet" href="./assets/css/material-font.css">
             <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
body{
  background-repeat: no-repeat;
  background-size: 1700px;  
  
  width: 1050px; height: 800px; 
 
}
.res{
 margin-left: 80px; margin-bottom: 120px; width: 110px; height: 200px;
background-color: white; margin-top: 25px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 float: left;
}
#r6{ color: rgba(213, 214, 218, 0.884);font-weight: bold;
}
</style>
        </head>
        <body style="background-image: url(./assets/img/09.jpg);background-size:cover">
                <ul id="slide-out" class="sidenav" onclick="myFunction(this)">
                                <li><div class="user-view">
                                  <div class="background">
                                    <div class="card-panel #e040fb grey" style="height: 300px"></div>
                                  </div>
                                  <a href="#user"><img class="circle" src="./assets/img/ron.jpg "></a>
                                  <a href="#name"><span class="white-text name">RONALD O, VOSOTROS</span></a>
                                  <a href="#email"><span class="white-text email">ronaldvosotros@gmail.com</span></a>
                                  <a href="#number"><span class="white-text number">Contact No: 09059590637</span></a>
                                </div></li>
                                
                                <li><a class="waves-effect" href="index.php">HOME</a></li>
                                <li><a class="waves-effect" href="about.php">PROFILE</a></li>
                                <li><a class="waves-effect" href="shop.php" id="active">SHOP</a></li>
                                <li><a class="waves-effect" href="blog.php" >BLOG</a></li>
                                <li><a class="waves-effect" href="database.php">DATABASE</a></li>
                                <li><a class="waves-effect" href="index.php?logout='1'">LOG-OUT</a></li>    
                            </div>
                              </ul></div>
                              <a href="#" data-target="slide-out" class="sidenav-trigger" style="margin-top: 20px"><i class="material-icons">menu</i></a>
                              <div id="container"> 
                <p id="r6">MOTOR SHOP<br> "HONDA COMPANY"</p>                                  <pre><img src="assets/img/honda.jpg" style="height: 80px;width: 80px;border-radius:10%;"></pre>
                <p id="Ite">Items:</p>
                
                <?php 
                include('./assets/php/config.php');
                $query=mysqli_query($conn,"SELECT * from `tbl_shop` ") or die(mysqli_error());
                while($row=mysqli_fetch_array($query)){
                ?>
                
                <div class="res" id="r6" style="background-color:rgba(0,0,0,0.5)">
                        <a href="<?php echo $row['img'];?>">
                        <img src="<?php echo $row['img'];?>">
                        </a>
                        <div class="desc">ProductName: <?php echo $row['des'];?><br>Price:<?php echo $row['price'];?></div>
                       <button class='btn waves-effect waves-light transparent' class='submit'><i class="material-icons">add_shopping_cart</i></button>
                        <button class='btn lime'><i class="material-icons">money</i></button>
                        <!-- <button1 class="but" >Buy</button1> -->
                </div>
                <?php }?>
                <div class="res waves-effect waves-light btn modal-trigger grey" href="#modal1" style="height:60px;border-radius: 10px">
                <i class="material-icons" style="font-size:60px; margin-top:10px;">add_circle_outline</i>
                </div> 
             <!-- Modal Structure -->
                <div id="modal1" class="modal">
                <div class="modal-content">
                <h4 class="" style="color:red;">Add new product</h4>
                <form method="POST" action="./assets/php/server.php" enctype="multipart/form-data">
                        <div class="file-field input-field">
                                <div class="btn">
                                <span>File</span>
                                <input type="file" name="upload">
                                </div>
                                <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                                </div>
                        </div>
                        <div class="row">
                        <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" name="des"></textarea>
                                <label for="textarea1">Descriptions</label>
                        </div>
                        </div>
                        <div class="row">
                                <div class="input-field col s12">
                                <input id="price" type="number" class="validate" name="price">
                                <label for="price">Price</label>
                                </div>
                        </div>
                </div>
                <div class="modal-footer">
                <button type="submit" name="submit_product" class="btn btn-success">Submit</button>
                </form>
                <a class="modal-close btn btn-primary">Close</a>
                </div>
                </div>
                <div class="clearfix"></div>

                <div id="cont">
                        
                                <i>For your Order Contact me through:<br>Mobile Number: 09059590637<br> 
                                        <div class="clear"></div>      
                                <img src="./assets/img/fb_icon.png">
                                <a>RONALD JR JUNIOR VOSOTROS</a></i>
                        </div>

        </div>
        <script src="./assets/js/materialize-css.min.js"></script>
<script>
M.AutoInit();
</script>

</body>
</html>