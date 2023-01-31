<?php
$username = $_POST['username'];
if ($_FILES["file"]["error"] > 0){
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
}else{
    $path = '/home/RohanSong/hide/' .$username;
    if(!file_exists($path)){
        echo '<script>alert("User not found, back and try again!")</script>';
    }else{
        if (file_exists("/home/RohanSong/hide/$username/" . $_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] . " has already existed. ";
        }else{
            if(!preg_match('/^[\w_\.\-]+$/', $_FILES["file"]["name"]) ){
                echo "Invalid filename";
                exit;
            }
            if(move_uploaded_file($_FILES["file"]["tmp_name"], "/home/RohanSong/hide/$username/" . $_FILES["file"]["name"])){
                echo "Successfully saved!";
            }else{
                echo "Upload failed!";
            }
        }
    }
}
?>