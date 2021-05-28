<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="196 x 196">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
        <script src="other/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Payment</title>

        <style>
            body, html {
                height: 100%;
                margin: 0;
            }

            .bg{
                height:100vh;
                background-position:center;
                background-repeat: no-repeat;
                background-size: cover;
            }  
            #demo{

                color:#000;
                font-family:cursive;
                font-size: 35px;

            }

            #demo1{
                color:#040505;
                font-family: cursive;
                padding-bottom: 10px;
                margin-right: 15px;
            }

            * {
                box-sizing: border-box;
            }

            /* Create two equal columns that floats next to each other */
            .column {
                float: left;
                width: 50%;
                padding: 10px;
                height: 300px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            #font{
                font-size: 25px;
            }

            center {
                margin-left:auto; 
                margin-right:auto;
            }


        </style>
    </head>
    <!--<body onload="document.register.user_name.focus();">-->
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container-fluid">
            <div class="bg">
                <div class="column">
                    <!--<div class="bg">--> 

                    <div class="form-group">
                        <form name='payment'  id='payment'  action="#" method="post">
                            <div class="center">
                                <table class="table-hover responsive center" id="font">

                                    <tbody>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                                <h4 id="demo"><b>Payment</b></h4>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label id="demo1"><b>Name</b></label>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="user_name" size="12" name="user_name" placeholder="Enter Username">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label id="demo1"><b>E-mail</b></label>
                                            </td>
                                            <td>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label id="demo1"><b>Amount</b></label>
                                            </td>
                                            <td>
                                                <input type="integer" class="form-control" id="amount" name="amount" placeholder="Enter Amount" minlength="1" max="10">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label for="product_name" id="demo1"><b>Select Product</b></label>
                                            </td>
                                            <td><select id="product_name" name="product_name">
                                                    <option value="volvo">Select</option>
                                                    <option value="saab">S</option>
                                                    <option value="fiat">F</option>
                                                    <option value="audi">A</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary">Submit</button>    <button type="reset" class="btn btn-primary">Cancel</button>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>

    </body>
</html>