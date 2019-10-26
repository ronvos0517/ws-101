
<!DOCTYPE html>
<html>
<head>
<title> MaterializeCSS</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
                        <li><a class="waves-effect" href="about.php" id="active">PROFILE</a></li>
                        <li><a class="waves-effect" href="shop.php">SHOP</a></li>
                        <li><a class="waves-effect" href="blog.php">BLOG</a></li>
                        <li><a class="waves-effect" href="database.php">DATABASE</a></li>
                        <li><a class="waves-effect" href="index.php?logout='1'">LOG-OUT</a></li>
                           
                        </div>
                      </ul></div>
                      <a href="#" data-target="slide-out" class="sidenav-trigger" style="margin-top: 20px"><i class="material-icons">menu</i></a>
                    
                     <div id="container"> 
                     
                             <div id="header"></div>

            <img id="in" src="./assets/img/ron.jpg">
    
                <i id= "AB">MY PERSONAL PROFILE</i>
                        <p id="Info"><i>LASTNAME  : VOSOTROS JR.<br> 
                                        FIRSTNAME : RONALD<br> 
                                        MIDDLENAME: OCAY <br>
                                        AGE       : 21<br> 
                                        BIRTH DATE: MAY 17,1998<br>
                                        STATUS    : SINGLE<br>
                                        GENDER    : MALE <br>
                                        RELIGION  : ROMAN CATHOLIC<br>        
                                        PARENTS   : MR & MRS RONALD O. VOSOTROS SR. & BRENDA O. VOSOTROS<br>                    
                                        BROTHER   : BREANN RAFAEL O. VOSOTROS<br>
                                        SISTER    : RONAREN O. VOSOTROS<br> 
                                        </i>      	
                                     </p>
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