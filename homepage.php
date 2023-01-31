<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style/homepage.css">
</head>
<body>
    <h1>Welcome to Your Homepage!~</h1>
    <div class="view">
        <?php
            session_start();
            // get username, can not work
            $username = $_SESSION['user'];
            // if (isset($_POST['username'])) {
            //     $username = $_POST['username'];
            // }            
            $path = '/home/Fiona/hide/' .$username;
            // $path = '/home/Fiona/hide/Fiona';
            $files = scandir($path);
            foreach ($files as $file){
                if (is_file($path . '/' . $file)){
                    // echo $path;
                    // echo $username;
                    echo '<form class=delete action="delete.php" method="post">';
                    echo '<a href="' . $path . '/' . $username . '/' . $file . '">' . $file . '</a>';
                    echo '<input type="hidden" name="file" value="' . $file . '">';
                    echo '<input type="submit" value="Delete!">';
                    echo '</form>';
                }
            }

        ?>
    </div>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Who's file you are uploading?</p>
        <input type="text" name='username' placeholder="Please input your username" required><br><br>
        <label for="file">Click to select files: </label>
        <input type="file" name="file" id="file"><br>
        <input type="submit" name="submit" value="Upload">
    </form>

</body>
</html>