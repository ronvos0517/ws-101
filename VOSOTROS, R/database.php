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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
     .t{
      font-family: 'Times New Roman', Times, serif;
      border-collapse: collapse; margin-top: 30px;
      width: 700px; 
     }
.t td, .t th {
  border: 1px solid #ddd;
  padding: 8px; background-color: rgba(0, 0, 0, 0.568); color: white;
}
.t tr:nth-child(even){}
.t tr:hover {background-color: darkturquoise;}
.t th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgba(0, 128, 128, 0.568);
  color: white;
}
.co{
  margin-left: 100px;
}
#upE{
  background-color:rgba(0, 128, 128, 0.568);
  color: white;
}
#delE{
  background-color: rgba(0, 128, 128, 0.568); color: white;
}
     </style>
</head>
<body style="background-image: url(./assets/img/dea.jpg);background-size:cover">
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
    
    <li><a class="waves-effect" href="index.php">HOME</a></li>
    <li><a class="waves-effect" href="about.php">PROFILE</a></li>
    <li><a class="waves-effect" href="shop.php">SHOP</a></li>
    <li><a class="waves-effect" href="blog.php">BLOG</a></li>
    <li><a class="waves-effect" href="database.php" id="active">DATABASE</a></li>
    <li><a class="waves-effect" href="index.php?logout='1'">LOG-OUT</a></li>
     
</div>
  </ul></div>
  <a href="#" data-target="slide-out" class="sidenav-trigger" style="margin-top: 20px"><i class="material-icons">menu</i></a>
  <div id="container">   
 
         <div id="header"></div>
        <h1>WELCOME TO DATABASE RECORD</h1>
        <!-- <img  id="c" src="./assets/img/c.jpeg "> -->
    <center class="t">
    <table class="co" class="responsive-table" class="highlight">
    <thead>
    <tr>
    <th>No.</th>
    <th>Username</th>
    <th>Password</th>
    <th colspan="3">Action</th>
    </tr>        
    </thead>
    <tbody>
      <!-- table content -->
         <?php 
      $result = mysqli_query($conn,"SELECT * FROM tbl_useraccount");
      while($row = mysqli_fetch_assoc($result)){ 
        echo" 
 <tr>     
 <td > ".$row['a_id']."</td>
 <td class='t'> ".$row['uname']."</td>
 <td> ".$row['paswd']."</td>
 <td><button data-username=".$row['uname']." data-password=".$row['paswd']." data-uid=".$row['a_id']." class='btnUp btn-floating pulse btn-medium waves-effect waves-light orange btn modal-trigger' href='#upE'><i class='material-icons'>edit</i></button></td>
 <td><button data-did= '$row[a_id]'  class='btnDel btn-floating pulse btn-medium waves-effect waves-light red btn modal-trigger' href='#delE'><i class='material-icons'>delete</i></button></td>
 <td><button data-username=".$row['uname']." data-password=".$row['paswd']." data-uid=".$row['a_id']." class='btnIns btn-floating pulse btn-medium waves-effect waves-light orange btn modal-trigger' href='#inE'><i class='material-icons'>person_add</i></button></td>
 <br>";     
}
     ?> 
         </tr>
         </tbody>
      </table>
      
 <!-- Modal Structure delete-->
 <div id="delE" class="modal">
    <form action='delete.php' method="post">
    <div class="modal-content">
        <h3 class="white-text">Delete Information</h3>
        <input id="dUn" name="uid" type="number" class="validate" hidden>
        <pw>Are you sure you want to delete this Account?</pw>
    </div>
    <div id="delE" class="modal-footer">
        <button  class="btn waves-effect white-text btn-flat" type="submit" name="delete">Yes</button>
        <a href='database.php' class="btn waves-effect modal-close white-text btn-flat">No</a>
    </div>
    </form>
</div>
 <!-- Modal Structure update -->
 <div id="upE" class="modal">
    <form action="update.php" method="post">
    <div class="modal-content">
        <h3 class="white-text"><i class="medium material-icons left blue-text">account_circle</i>User Account</h3>
        <div class="input-field col s4">
            <input class="num white-text" id="uid" name="uid" type="number" class="validate" >
            <label class="white-text" for="id" style="color:black">No.</label></div>
            <div class="input-field col s4 ">
            <input class="uname white-text" id="uname" name="username" type="text" class="validate">
            <label class="white-text" for="Un" style="color:black">UserName</label>
        </div>
        <div class="input-field col s4">
            <input class="pass white-text" id="passwd" name="password" type="password" class="validate">
            <label class="white-text" for="paswd" style="color:black">Password</label>
        </div>
    </div>
    <div id="upE" class="modal-footer">
            <button class="btn waves-effect white-text btn-flat" type="submit" name="update">Update</button>
            <a href="#!" class="btn modal-close wave-effect waves-white  white-text btn-flat">Cancel</a>
    </div>
    </form>
</div>
<!-- Modal Structure Insert-->
<div id="inE" class="modal">
    <form action="insert.php " method="post">
        <div class="modal-content">
            <h3 class="blue-text"><i class="medium material-icons left blue-text">person_add</i>USER</h3>
            
            <div class="input-field col s6">
                <input id="username" name="username" type="text" class="validate">
                <label class="active" for="username">UserName</label>
            </div>
            <div class="input-field col s6">
                <input id="password" name="password" type="text" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="modal-footer">
                <button class="btn waves-effect waves-white blue white-text btn-flat" type="submit" name="insert">Insert</button>
                <a href="#!" class="modal-close waves-effect waves-white orange white-text btn-flat">Cancel</a>
        </div>
    </form>
</div> 

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let car = document.querySelectorAll('.carousel');
        let mod = document.querySelectorAll('.modal');
        let ins1 = M.Modal.init(mod);
        let ins2 = M.Carousel.init(car);
    });
    let btnUp = document.querySelectorAll('.bltnUp');
    let btnDel = document.querySelectorAll('.btnDel');
    // let btn = document.querySelectorAll('.btIns');
    for (let i = 0; i < btnUp.length; i++) {
        btnUp[i].addEventListener('click',up)
    }
    for (let i = 0; i < btnDel.length; i++) {
        btnDel[i].addEventListener('click',del)
    }
    function del(e){
        let dUn = document.querySelector("#dUn");
        dUn.value=parseInt(this.dataset.did);
    }
    function up(e){
        let Un = document.querySelector(".uname");
        let pass = document.querySelector(".pass");
        let uid = document.querySelector(".num");
        Un.value=this.dataset.username;
        pass.value=this.dataset.password;
        uid.value=this.dataset.uid;
        console.log(this.dataset.username);
        console.log(this.dataset.password);
        console.log(this.dataset.uid);
        // M.updateTextFields();
    }
</script>

    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);
        var elems = document.querySelectorAll('.scrollspy');
        var instances = M.ScrollSpy.init(elems);
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
        var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
    
    });
    </script>
</body>
</html>