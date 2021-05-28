<?php

    $name = "";
    $received = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$name = clean_input($_POST["name"]);
        $link_name = clean_input($_POST["link_name"]);
        $link_title = clean_input($_POST["link_title"]);
        //$email = clean_input($_POST["email"]);
        //$pass_word = clean_input($_POST["pass_word"]);
        //$confirm_pass= clean_input($_POST["confirm_pass"]);
        //$contact = clean_input($_POST["contact"]);
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "JCGames";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $stmt = $conn->prepare("INSERT INTO link_list (link_name,link_title) VALUES (?,?)");
        $stmt->bind_param("ss", $link_name, $link_title);
        
        $stmt->execute();
        $stmt->close();
        $conn->close();
       echo "<script type='text/javascript'>window.location.href='tutorial.php'; </script>"; 
       
    }
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
