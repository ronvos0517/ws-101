<?php 
include('./assets/php/config.php');
?>
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
<title> Cart </title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
     .t{
      font-family: 'Times New Roman', Times, serif;
  border-collapse: collapse; margin-top: 30px;
  width: 700px; ma
     }
.t td, .t th {
  border: 1px solid #ddd;
  padding: 8px; background-color: coral;
}
.t tr:nth-child(even){background-color: #f2f2f2;}
.t tr:hover {background-color: darkturquoise;}
.t th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.co{
  margin-left: 100px;
}
#upE{
background-color: rgba(39, 245, 245, 0.918);
}
#delE{
  background-color:red; color: white;
}
     </style>  
</head>
<body style="background-image: url(./assets/img/dea.jpg);">
        <ul id="slide-out" class="sidenav" onclick="myFunction(this)">
                        <li><div class="user-view">
                          <div class="background">
                            <div class="card-panel #e040fb grey" style="height: 200px"></div>
                          </div>
                          <a href="#user"><img class="circle" src="./assets/img/ron.jpg "></a>
                          <a href="#name"><span class="white-text name">RONALD JR JUNIOR VOSOTROS</span></a>
                          <a href="#email"><span class="white-text email">ronaldvosotros@gmail.com</span></a>
                          <a href="#number"><span class="white-text number">Contact No: 09059590637</span></a>
                        </div></li>
                       
                        <li><a class="waves-effect" href="index.php">Home</a></li>
                        <li><a class="waves-effect" href="about.php" >PROFILE</a></li>
                        <li><a class="waves-effect" href="shop.php" id="active">SHOP</a></li>
                        <li><a class="waves-effect" href="blog.php">BLOG</a></li>
                        <li><a class="waves-effect" href="database.php">DATABASE</a></li>
                        <li><a class="waves-effect" href="index.php?logout='1'">LOG-OUT</a></li>
                           
                        </div>
                      </ul></div>
                      <a href="#" data-target="slide-out" class="sidenav-trigger" style="margin-top: 20px"><i class="material-icons">menu</i></a>
                    
                     <div id="container"> 
                     
                             <div id="header"></div>
                             <i id= "AB" style="margin-left:300px;">Shopping Cart</i>
                <a id="btnEmpty" href="index.php?action=empty" style="margin-left: 50px;">Empty Cart</a>
                             <center class="t">
    <table class="co" class="responsive-table" class="highlight">
    <thead>
    <tr>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Unit Price</th>
    <th>Price</th>
    <th>Remove</th>
    </tr>        
    </thead>
                <!-- <i id= "AB" style="margin-left:400px;">Shopping Cart</i>
                <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
                <form action="#">
 
    <pc>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Filled in</span>
      </label>
    </pc>
 
  </form>
        
                </div> -->
        
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	

<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
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