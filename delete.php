<?php
if (isset($_POST['file'])) {
    $file = $_POST['file'];
    if (is_file($dir . '/' . $file)) {
        unlink($dir . '/' . $file);
        echo 'Document' . $file . ' have already been deleted';
    } else {
        echo 'Document' . $file . ' did not exist';
    }
}
?>