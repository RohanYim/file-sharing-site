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
            $path = '/home/RohanSong/hide/' .$username;
            // $path = '/home/Fiona/hide/Fiona';
            $files = scandir($path);
            // echo "Your files";
            echo '<table width="580"border="1"cellpadding="1"cellspacing="1"bordercolor="#fff"bgcolor="#c117e50">
            <tr>
                <td width="145"align="center"bgcolor="#fff">File Name</td>
                <td width="145"align="center"bgcolor="#fff">Sizes</td>
                <td width="145"align="center"bgcolor="#fff">Type</td>
                <td width="145"align="center"bgcolor="#fff">Action</td>
            </tr>';
            foreach ($files as $key=>$value){
                if (is_file($path . '/' . $value)){
                    $bytes = filesize($path . '/' . $value);
                    $size = round($bytes/1024,2);
                    $type = pathinfo($path . '/' . $value, PATHINFO_EXTENSION);
                    echo '<tr>
                    <td height="25"align="center"bgcolor="#fff" class="STLE2"><a href="view.php?file=' . $value . '">' . $value . '</a></td>
                    <td align="center"bgcolor="#fff" class="STLE2">'.$size.'kbs</td>
                    <td align="center"bgcolor="#fff" class="STLE2">'.$type.'</td>
                    <td align="center"bgcolor="#fff" class="STLE2"><form class=delete action="delete.php" method="post"><input type="hidden" name="file" value="' . $value . '"><input type="submit" value="Delete!"></form></td>
                    </tr>';
                }
            }
        ?>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <p>Who's file you are uploading?</p>
            <input type="text" name='username' placeholder="Please input your username" required><br><br>
            <label for="file">Click to select files: </label>
            <input type="file" name="file" id="file"><br>
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>

</body>
</html>