<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$username = $_POST['username'];
if ($_FILES["file"]["error"] > 0){
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
}else{
    $path = '/home/Fiona/hide/' .$username;
    if(!file_exists($path)){
        echo '<script>alert("User not found, back and try again!")</script>';
    }else{
        if (file_exists("/home/Fiona/hide/$username/" . $_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] . " has already existed. ";
        }else{
            echo $_FILES["file"]["tmp_name"];
            if(move_uploaded_file($_FILES["file"]["tmp_name"], "/home/Fiona/hide/$username/" . $_FILES["file"]["name"])){
                echo "File saved in: " . "/home/Fiona/hide/$username/" . $_FILES["file"]["name"];
            }else{
                echo "Upload failed!";
            }
        }
    }
}
?>