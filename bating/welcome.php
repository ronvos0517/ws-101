<?php 
session_start();
include 'config.php';
include 'update.php';
include 'delete.php';
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
        }#d1{
            color: black;
        }
        </style>
    
</head>
<body style="background-color: Tomato">
<nav>
    <div class="nav-wrapper">
      <a href="#" class="material-icons">home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="logout.php">Logout</a></li> 
        <li><a href="blog.php">Blog</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="shop.php">Shop</a></li>
      </ul>
    </div>
  </nav>
        
    <br>
    <center>
        <h1 id="d1">WELCOME <?php echo $_SESSION['uname'] ?></h1>
       <a href="register.php" name="reg"><h3>Register</h3></a>
       </center>
<center>
        <table id="d1" >
            <th>No.</th>
            <th>user name</th>
            <th>password</th>
            <th>actions</th>

        <?php 
        $result = mysqli_query($conn,"SELECT ID,username,passwd FROM tbl_login") ;
    while ($row = mysqli_fetch_assoc($result)) {
      ?> <tr> 
      <td><?php echo $row['ID'];?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['passwd'];?></td>
      <td>
      <a data-deleteid = "<?php echo $row['ID'];?>"class = "btndelete btn-floating btn-medium waves light red btn modal-trigger" href="#delModal"> <i class="material-icons ">delete</i></a>
      <a data-update = "<?php echo $row['ID'];?>" data-uname ="<?php echo $row['username'];?>"  data-passwd ="<?php echo $row['passwd'];?>" class = "btnedit btn-floating btn-medium waves light lightblue btn modal-trigger" href="#editModal"> <i class="material-icons ">edit</i></a>
      </td>
      </tr> 
      
      <?php
      }
      ?>
            </table>
    <div id ="editModal" class ="modal">
        <div class = "modal-content">
        <form action="" method="post">
            <h4> Update Information</h4>
            <input type="text" name="id" id="id" hidden="">
            <input type="text" name="username" id="username">
            <input type="text" name="passwd" id="passwd">
        </div>
    <div class = "modal-footer">
    <button type="submit" name="agree" class="modal-close waves effect waves-green btn-flat">AGREE </button>  
    </form>
    </div>
    </div>

    <div id="delModal" class="modal">
            <div class="modal-=content">
                <div class="container"><br>
                    <h4 class=center>Delete</h4>
                    <p class="center">Are you sure you want to delete this user? </p>
                    <form action="" method="post">
                    <input type="text" id="deleteid" name="deleteid" hidden="">
                    <p class> </p>
                    <center>
                        
                            <button type="submit" class="waves-effect waves-teal btn-flat" name="deleteyes">Yes</button> | <button type="submit" class="waves-effect waves-teal btn-flat" name="Cancel">No</button>
                        </form>
                    </center>  
                </div>  
                <div class="modal-footer">
                </div>
            </div>
        </div>
        <div class = "modal-footer">
        
    </div>

    </center>
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('modal');
        var instances = M.Modal.init(elems);
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
        });
        let buttonedit = document.querySelectorAll(".btnedit");
        let buttondelete = document.querySelectorAll(".btndelete");
    for (var x = 0; x < buttonedit.length; x++){
        buttonedit[x].addEventListener('click',ed);

    
    }
    for (var y = 0; y < buttondelete.length; y++){
    buttondelete[y].addEventListener('click',del);

}

    
    function ed(e){
        let id = document.querySelector("#id");
        let usename = document.querySelector("#username");
        let pass= document.querySelector("#passwd");
        id.value = this.dataset.update;
        usename.value = this.dataset.uname;
        pass.value = this.dataset.passwd;
        console.log(this.dataset.uname);
        console.log(this.dataset.passwd);
        } 
        function del(e) {
            let deleteid = document.querySelector("#deleteid");
                    deleteid.value= this.dataset.deleteid;
                
                      }
    </script>  
   

</body>
</html> 

