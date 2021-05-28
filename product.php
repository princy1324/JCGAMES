<html>
    <head>
        <title>Product</title>
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="196 x 196">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <style>


            body{
                background: wheat; 
            }

            body {
                margin: 0;
                font-family: Arial;
            }

            .header {
                text-align: center;
                padding: 32px;
            }
            .row {
                display: flex;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            /* Create four equal columns that sits next to each other */
            .column {
                flex: 25%;
                max-width: 25%;
                padding: 0 4px;
            }

            .column img {
                margin-top: 8px;
                vertical-align: middle;
            }


            /* Responsive layout - makes a two column-layout instead of four columns */
            @media screen and (max-width: 800px) {
                .column {
                    flex: 50%;
                    max-width: 50%;
                }
            }

            /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .column {
                    flex: 100%;
                    width: 50%;

                }
            }
            #img1{
                border: 3px solid black;
                width: 60%;
                margin-bottom: 5px;
            }
            column{
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <br>
    <center> <?php include 'product_title.php'; ?>  </center>
    <br>
    <div class = "container" id="demo">

        <div class="img-responsive">
            <div class = "row">
                <!--                increase items as per rows do not create new columns-->               
                <div class = "column" style="margin-right: auto">
                    <center> <h4 class="title">Name</h4></center>
                    <img id="img1" src = "images/JCLOGO.png"  class="img-fluid mx-auto d-block">
                    <center>
                        <button  href="#" class="btn btn-primary " style="margin-bottom:4px;width:60%; font-size: large">Download</button><br>

                        <button href="#" class="btn btn-primary"  style="margin-bottom:5px;width:60%; font-size: large">Buy</button>
                    </center>
                    <br>
                    <br>
                    <center> <h4 class="title">Name</h4></center>
                    <img id="img1" src = "images/JCLOGO.png"  class="img-fluid mx-auto d-block">
                    <center>
                        <button  href="#" class="btn btn-primary " style="margin-bottom:4px;width:60%; font-size: large">Download</button><br>

                        <button href="#" class="btn btn-primary"  style="margin-bottom:5px;width:60%; font-size: large">Buy</button>
                    </center>
                    <br>
                    <br>
                </div>

                <div class = "column" style="margin-right: auto">
                    <center> <h4 class="title">Name</h4></center>
                    <img id="img1" src = "images/JCLOGO.png"  class="img-fluid mx-auto d-block">
                    <center>
                        <button  href="#" class="btn btn-primary " style="margin-bottom:4px;width:60%; font-size: large">Download</button><br>

                        <button href="#" class="btn btn-primary"  style="margin-bottom:5px;width:60%; font-size: large">Buy</button>
                    </center>
                    <br>
                    <br>
                    <center> <h4 class="title">Name</h4></center>
                    <img id="img1" src = "images/JCLOGO.png"  class="img-fluid mx-auto d-block">
                    <center>
                        <button  href="#" class="btn btn-primary " style="margin-bottom:4px;width:60%; font-size: large">Download</button><br>

                        <button href="#" class="btn btn-primary"  style="margin-bottom:5px;width:60%; font-size: large">Buy</button>
                    </center>
                    <br>
                    <br>
                </div>

                <div class = "column">
                    <center> <h4 class="title">Name</h4></center>
                    <img id="img1" src = "images/JCLOGO.png"  class="img-fluid mx-auto d-block">
                    <center>
                        <button  href="#" class="btn btn-primary " style="margin-bottom:4px;width:60%; font-size: large">Download</button><br>

                        <button href="#" class="btn btn-primary"  style="margin-bottom:5px;width:60%; font-size: large">Buy</button>
                    </center>
                    <br>
                    <br>
                    <center> <h4 class="title">Name</h4></center>
                    <img id="img1" src = "images/JCLOGO.png"  class="img-fluid mx-auto d-block">
                    <center>
                        <button  href="#" class="btn btn-primary " style="margin-bottom:4px;width:60%; font-size: large">Download</button><br>

                        <button href="#" class="btn btn-primary"  style="margin-bottom:5px;width:60%; font-size: large">Buy</button>
                    </center>
                    <br>
                    <br>
                </div>

                </body>
                </html>