<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Sharing Web</title>
    <link rel="stylesheet" href="FileSharing.css" type="text/css">
</head>
<body>
    <div>
        <?php 
            $username = $_GET['username'];
            echo "<div style='font-size: 40px; font-weight: bolder;'>Welcome, $username!</div>"; 
        ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <br>
            Who's file you are uploading? <input type="text" name='username'><br>
            <label for="file">Click to select files: </label>
            <input type="file" name="file" id="file"><br>
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>
</body>
</html>