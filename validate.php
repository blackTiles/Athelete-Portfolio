
<?php
    $pass = $_GET["pwd"];
    $btn = $_GET["sub"];
    $link = "index.html";
    if(isset($btn)){
        if ($pass=='satyam'){
            header('Location: passwordmanage.html');
            exit;
        }
        else{
            
            echo '<script>alert("wrong password");
            window.location = "gallery.php";
            </script>';
        }
    }
    else{
        echo '';
    }
?>