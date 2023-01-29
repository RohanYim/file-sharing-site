<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php
    $allowedExts = array("excel", "jpg", "jpeg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    echo $_FILES["file"]["size"];
    $extension = end($temp);
    if (($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "document/excel"
    || ($_FILES["file"]["type"] == "document/excel")
    && ($_FILES["file"]["size"] < 1048576)
    && in_array($extension, $allowedExts))
    {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Erros:" . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            echo "Upload File Name:" . $_FILES["file"]["name"] . "<br>";
            echo "File type:" . $_FILES["file"]["type"] . "<br>";
            echo "File size:" . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            
            if (file_exists("upload/" . $_FILES["file"]["name"]))
            {
                echo $_FILES["file"]["name"] . " File have already existed";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                echo "File saved at" . "upload/" . $_FILES["file"]["name"];
            }
        }
    }
    else
    {
        echo "Invaild type!";
    }
    ?>
</body>
</html>