<?php  
    require_once 'dbConfig.php'; 
    if(isset($_POST["update"])){
        $sql= mysqli_query($db,"UPDATE marathons set total='" . $_POST['total'] . "', full='" . $_POST['full'] . "', half='" . $_POST['half'] . "'");
        if ($db->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo $db->connect_error;
          }
    }

?>