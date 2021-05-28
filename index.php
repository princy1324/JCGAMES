<!DOCTYPE html>
<html lang="en">
    <head>
        <title>JC Games</title>
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="196 x 196">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            #bg{
                background: grey;
            }

            .hide {
                display: none;
            }

            .whatsapp:hover + .hide {
                display: block;
                color: red;
            }

            .navbar-nav{
                margin-left: auto;

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

            #utube{
                height: 30px;
                width: auto;
            }
            #watimg{
                height: 30px;
                width: 45px;

            }
            #credit{
                font-family: Brush Script MT; 
                font-size: 40px ; 
                color: aqua;
            }

            /*#bg_image {*/
            /*    display: block;*/
            /*    margin-left: auto;*/
            /*    margin-right: auto;*/
            /*    width: 50%;*/
            /*    height: auto;*/
            /*}*/

            #secondnavbar_text{
                text-align: center;
            }


            #gateway{
                font-family: initial;
                font-size: large;
                font-weight: bold;

            }

            a:link, a:visited {
               
                color: white;
                              
                
            }

            a:hover, a:active {
                color: yellow;
            }
            @media only screen and (max-width: 600px) {
                #watimg {
                    height: 25px;
                    width: auto;                    
                }
                #utube{
                    height: 20px;
                    width: auto;
                }


                #gateway{
                    font-family: initial;
                    font-size: small;
                    font-weight: bold;

                }
                #gateway_img{
                    margin: auto;
                }

            }
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
                height: 100%;

            }
            .fixed-height {
                max-height: 400px;
                margin-left:  auto;
                margin-right: auto;

            }

            @media only screen and (max-width: 600px) {

                .fixed-height {
                    max-height: 200px;
                    margin-left:  auto;
                    margin-right: auto;

                }


            }


        </style>

    </head>
    <body id="bg">
        <div>

            <nav class="navbar navbar-expand">
                <a class="navbar-brand" href="index.php"><img src="images/JCLOGO.png" height="50" width="50"></a>         
                <ul class="nav navbar-nav text-center">
                    <li class="nav-item"><a class="nav-link" href="index.php"><?php include 'jc.php'; ?></a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/+917395889255" target="_blank"><img src="images/whatsapp.png" class="whatsapp" id="watimg"></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/c/JohnNickson/featured" target="_blank"><img src="images/youtubelogo.jpg" id="utube" ></a>
                    </li>
                </ul>                
            </nav>
            <br>


            <nav class="navbar navbar-expand-md">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblesecondNavbar">
                    <span class="line "></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsiblesecondNavbar">
                    <ul class="navbar-nav" id="secondnavbar_text">
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
            <img src="images/LOD_Banner.png">

            <h3 style=" color: darkblue; font-weight: bold; font-family: initial; font-size: x-large; margin-top: 10px"><center>Project We Made</center></h3>
            <div class="container mt-3">

                <div id="myCarousel" class="carousel slide">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li class="item1 active"></li>
                        <li class="item2"></li>
                        <li class="item3"></li>
                        <li class="item4"></li>
                        <li class="item5"></li>

                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/gallery.jpg" alt="Image" width="1000" height="500" class="fixed-height">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery (1).jpeg" alt="Image" width="1000" height="500" class="fixed-height">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery (2).jpeg" alt="Image" width="1000" height="500" class="fixed-height">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery (3).jpeg" alt="Image" width="1000" height="500" class="fixed-height">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery (4).jpeg" alt="Image" width="1000" height="500" class="fixed-height">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery (5).jpeg" alt="Image" width="1000" height="500" class="fixed-height">
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    // Activate Carousel with a specified interval
                    $("#myCarousel").carousel({interval: 500});

                    // Enable Carousel Indicators
                    $(".item1").click(function () {
                        $("#myCarousel").carousel(0);
                    });
                    $(".item2").click(function () {
                        $("#myCarousel").carousel(1);
                    });
                    $(".item3").click(function () {
                        $("#myCarousel").carousel(2);
                    });

                    // Enable Carousel Controls
                    $(".carousel-control-prev").click(function () {
                        $("#myCarousel").carousel("prev");
                    });
                    $(".carousel-control-next").click(function () {
                        $("#myCarousel").carousel("next");
                    });
                });
            </script>
            <br>
            <br>
            <br>

            <center><h3 style=" color: white; font-weight: bold; font-family: initial; font-size: x-large">Withdraw Winnings with</h3></center>
            <br>
            <div class="container">
                <div class="ml-5 row">
                    <div class="col"><img id="gateway_img" src="images/Paytm_logo.png" width="50%" height="auto" ><p class="pl-2" id="gateway">Paytm Wallet</p></div>
                    <div class="col"><img class="pt-3 pb-1" src="images/upi_logo.jpg" width="40%" height="auto" ><p class="mt-4 pl-4" id="gateway">UPI</p></div>
                    <div class="mt-5 col"><img class="pb-1"src="images/amazon_pay_logo.png" width="70%" height="auto" ><p class="mt-4 pt-2 pl-4" id="gateway">Amazon Pay</p></div>
                    <div class="ml-2 col"><img class="pb-4" src="images/bank_transfer.png" width="35%" height="auto"><p class="mt-4" id="gateway">Bank Transfer</p></div>
                </div>
            </div>
            <center><img src="images/Download.png"></center>

            <br>
            <br><br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <footer>
                <hr>
                <center>
                    <label type="submit"  class="btn btn-block" style="max-width:40%; font-weight: bold">Contact Us</label>
                    <a href="privacyandpolicy.php"  class="btn btn-block" style="max-width:40%; font-weight: bold">Terms and Condition</a>
                    <p>All the Rights Reserved <a href="index.php" title="JC Games">JC Games</a></p>
                </center>
            </footer>

    </body>
</html>
