<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style/login.css">
</head>

<body>
    <h1>Login System</h1><br><br>
    <form class=loginInput action="login.php" method="POST">
        User ID: <input type="text" name="username" placeholder="Please input your username" required>
        <input type="submit" name="submit" value="Login">
    </form>
    
        <?php
        // Check User List
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $label = false;
            $userslist = fopen("/home/RohanSong/hide/users.txt", "r") or die("Unable to open file!");
            // or use json_encode :>
            while(!feof($userslist)){
                $getname = trim(fgets($userslist));
                // echo $getname;
                if(strcmp($username,$getname)==0){
                    $label = true;
                    break;
                }
            }
            fclose($userslist);
        
            // Judge whether the user can login in successfully
            if($label == true){
                session_start();
                $_SESSION['user'] = $username;
                $_SESSION['login'] = true;
                echo "Login Sucessfully!";
                header("Location: homepage.php?username=".$username);
            }
            if($label == false && empty($username)){
                echo "Error: User does not exist. Please check your username and try again!";
            }
        } 
    ?>
</body>

</html>