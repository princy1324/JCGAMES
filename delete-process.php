<?php
include_once 'connection.php';
$sql = "DELETE FROM link_list WHERE ID='" . $_GET["ID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
     echo "<script type='text/javascript'>window.location.href='tutorial.php'; </script>"; 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>