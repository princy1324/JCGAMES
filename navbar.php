<!--<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            body{
                background: gainsboro;
            }
            .navbar-nav{
                margin-left: auto;
                margin-bottom: auto; 

            }

            nav{
                background: black;
               
            }

            .navbar-toggler{
                width: 47px;
                height: 34px;
                background-color: black;
                border:none;


            }
            .navbar-toggler .line{
                width: 100%;
                float: left;
                height: 2px;
                background-color: #fff;
                margin-bottom: 5px;
            }

            #secondnavbar_text1{
                text-align: center;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="index.php"><img src="images/JCLOGO.png" height="50" width="50"></a>         
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblesecondNavbar1">
                <span class="line "></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsiblesecondNavbar1">
                <ul class="navbar-nav" id="secondnavbar_text1">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: white; font-weight: bold;padding-top: 5px">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tutorial.php" style="color: white; font-weight: bold;padding-top: 5px">Tutorial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="product.php" style="color: white; font-weight: bold;padding-top: 5px">Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white; font-weight: bold;padding-top: 5px">Service</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="payment.php" style="color: white; font-weight: bold;padding-top: 5px">Payment</a>
                    </li>    
                </ul>
            </div>  
        </nav>
    </body>
</html>-->





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">Tutorial</a>
  <a href="#">Product</a>
  <a href="#">Service</a>
  <a href="#">Payment</a>
</div>

<div id="main">
<!--  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>-->
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
