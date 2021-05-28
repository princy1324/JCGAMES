<html>
    <head>
        <title>Video Upload</title>
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="196 x 196">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script type="text/javascript">
            function validation() {
                var name = document.link_upload.link_name.value;
                if (name == null || name == "") {
                    alert("Paste the link!!!");
                    return false;
                }
                var title = document.link_upload.link_title.value;
                if (title == null || name == "") {
                    alert("Paste the Title!!!");
                    return false;
                }
            }
        </script>
        <style>
             #font{
            font-size: 20px;
        }
        #demo{

            color:#000;
            font-family:serif;
            font-size: 20px;

        }

        #demo1{
            color:#040505;
            font-family: serif;
            padding-bottom: 10px;
            padding-right: 5px;
        }
        
        @media only screen and (max-width: 500px) {
                #demo{

            color:#000;
            font-family:serif;
            font-size: 20px;

        }

        #demo1{
            color:#040505;
            font-family: serif;
            padding-bottom: 10px;
            padding-right: 5px;
            font-size: 15px;
        }
        #upload_table{
            width:20%;
            margin-left: 0%;
            margin-right: 2px;
        }

            }
        </style>
    </head>
    <body>
        <br><br>
    <center>
        <div class="container">
        <form action="link_upload_connect.php" name="link_upload" id="link_upload" method="POST" onsubmit="return validation()">
            <table class="table-hover responsive" id="font">

                                        <tbody>
                                            <tr>
                                                <td>

                                                </td>
                                                <td>
                                                    <h4 id="demo"><b>Upload Video</b></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label id="demo1"><b>Paste link </b></label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="https://youtube.com/embed/(EnterID)" name="link_name" id="link_name" size="80px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label id="demo1"><b>Title</b></label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" size="12" name="link_title" id="link_title"  placeholder="Enter Title">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                        <center><button type="submit" class="btn btn-primary">Upload</button></center>
                                                </td>
                                            </tr>
                                        </tbody>
            </table>
            
        </form>
        </div>
    </center>    
        <?php
       
//      $servername = "sg3plcpnl0224";
//        $username = "johnnikson";
//        $password = "Nickson@143";
//        $dbname = "Jc-Lod";
         $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "JCGames";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM link_list";
        $result = $conn->query($query);
        ?> 
 
    <div class="container">
           <table id="upload_table" align="center" border="2px" style="width:80%; line-height:40px;"> 
                <tr> 
                    <th colspan="4"><center><h2>Uploaded Videos</h2></center></th> 
        </tr> 
       
        <tr>
            
            <th><center> ID</center> </th> 
           <th> <center>Link</center> </th>
           <th><center> Title </center> </th>
           <th><center> Delete </center></th>
       

    </tr> 

    <?php
    $i=0;
    while ($rows = \mysqli_fetch_array($result)) {
        ?> 
        <tr> <td><?php echo $rows['ID']; ?></td> 
            <td><?php echo $rows['link_name']; ?></td> 
             <td><?php echo $rows['link_title']; ?></td> 
             <td><center><a class="button btn btn-danger" href="delete-process.php?ID=<?php echo $rows["ID"]; ?>">Delete</a></center></td>
        </tr> 
        <?php
	$i++;
	}
	?>
        

</table> 
</div>
</body> 
</html>


