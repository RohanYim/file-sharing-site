<?php
$username = $_POST['username'];
// check if successfully uploaded
if ($_FILES["file"]["error"] > 0){
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
}else{
    $path = '/home/RohanSong/hide/' .$username;
    if(!file_exists($path)){
        echo '<script>alert("User not found, back and try again!")</script>';
    }else{
        // check if this file already exist
        if (file_exists("/home/RohanSong/hide/$username/" . $_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] . " has already existed. ";
        }else{
            // filename check
            if(!preg_match('/^[\w_\.\-]+$/', $_FILES["file"]["name"]) ){
                echo "Invalid filename";
                exit;
            }
            // replace filr from temp folder to user's folder
            if(move_uploaded_file($_FILES["file"]["tmp_name"], "/home/RohanSong/hide/$username/" . $_FILES["file"]["name"])){
                echo "Successfully saved!";
            }else{
                echo "Upload failed!";
            }
        }
    }
}
?>