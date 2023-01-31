<?php   
 session_start();
 $username = $_SESSION['user'];    
 
 $path = '/home/RohanSong/hide/' .$username;
 
if (isset($_POST['file'])) {
    $file = $_POST['file'];
    if (is_file($path . '/' . $file)) {
        unlink($path . '/' . $file);
        echo 'Document ' . $file . ' have already been deleted';
    } else {
        echo 'Document ' . $file . ' did not exist';
    }
}
?>