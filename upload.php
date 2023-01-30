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
            echo $_FILES["file"]["tmp_name"];
            if(move_uploaded_file($_FILES["file"]["tmp_name"], "/home/RohanSong/hide/$username/" . $_FILES["file"]["name"])){
                echo "File saved in: " . "/home/RohanSong/hide/$username/" . $_FILES["file"]["name"];
            }else{
                echo "Upload failed.";
            }

        }
    }
}
?>