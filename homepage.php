<!DOCTYPE html>
<html lang="en">

<!-- <?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

$username = $_SESSION['user'];
$path = "/home/Fiona/public_html/module2-group-module2-510576-505908/files" . $username;
?> -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style/homepage.css">
</head>
<body>
    <h1>Welcome to Your Homepage!~</h1><br><br>
    <div class="view">
        <p>Here are files you uploaded before:</p>
        <?php
            // $path = "/home/Fiona/public_html/module2-group-module2-510576-505908/files" . $username;
            $path = "/home/Fiona/public_html/module2-group-module2-510576-505908/files/Fiona"
            $files = scandir($path);
            foreach ($files as $file){
                if (is_file($dir . '/' . $file)){
                    echo '<form action="delete.php" method="post">';
                    echo '<a href="' . $dir . '/' . $file . '">' . $file . '</a>';
                    echo '<input type="hidden" name="file" value="' . $file . '">';
                    echo '<input type="submit" value="Delete!">';
                    echo '</form>';
                }
            }
        ?>
    </div>
    
    <div class="upload" action="upload.php" method="POST">
        <p>Please enter the file name to upload:</p>
    </div>

</body>
</html>