<?php
 $username = '';
 if (isset($_POST['username'])) {
     $username = $_POST['username'];
 }            
 // $path = '/home/Fiona/hide/' .$username;
 $path = '/home/Fiona/hide/Fiona';
 
if (isset($_POST['file'])) {
    echo $path;
    echo $file;
    $file = $_POST['file'];
    if (is_file($path . '/' . $file)) {
        unlink($path . '/' . $file);
        echo 'Document' . $file . ' have already been deleted';
    } else {
        echo 'Document' . $file . ' did not exist';
    }
}
?>