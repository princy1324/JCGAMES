<html>
    <head>
        <title>Tutorial</title>
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
            #table {
                display: table;
            }

            .row {
                display: ruby;
            }

            #bg{
                background-color:#f1f1f1;
            }

            .cell {
                display: table-cell;
                margin-left:40%;
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

            @media only screen and (max-width: 500px) {
                .cell {
                    display: table-cell;
                    margin-left: 0%;
                }
                #iframe_size{
                    width: 400px;
                    height: 315px;
                }
            }
        </style>
    </head>
    <body>
        <!--    navbar-->

        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="index.php"><img src="images/JCLOGO.png" height="50" width="50"></a> 
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
        <!--        navbar end-->

        <br>
        <?php include 'tutorial_title.php'; ?>
        <br>
        <div id="bg">
            <div class="container">

                <?php
                include_once 'connection.php';

                $sql_link = "SELECT * FROM link_list Order BY id DESC ";
                $result_link = $conn->query($sql_link);
                ?>
                <div class="container">
                    <div id="table">
                        <div class="row">
                            <div class="cell">
                                <?php
                                while ($row = \mysqli_fetch_array($result_link)) {
                                    ?>

                                    <iframe id="iframe_size" src="<?php echo html_entity_decode($row['link_name'], ENT_QUOTES, "UTF-8"); ?>" width="580" height="315" frameborder="10"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                    </iframe> 
                                    <h5 style="font-family: serif; font-weight: bold; color: black; position: absolute"><?php echo $row['link_title'];
                                    ?></h5>
                                        <?php
                                        echo '<br>';
                                        echo '<br>';
                                        echo '<br>';
                                    }
                                    ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>