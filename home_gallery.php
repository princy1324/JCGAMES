<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="196 x 196">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
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


        </style>
    </head>
    <body>

        <div class="container mt-3">

            <div id="myCarousel" class="carousel slide">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li class="item1 active"></li>
                    <li class="item2"></li>
                    <li class="item3"></li>
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
                <a class="carousel-control-prev" href="#myCarousel">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel">
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

    </body>
</html>
