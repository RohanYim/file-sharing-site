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
    <h1>Log In System</h1><br>
    <h2>Welcome to our file management system!</h2><br>
    <form class="loginInput" action="login.php" method="POST">
        User ID: <input type="text" name="username" placeholder="Please input your username" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
    
    <?php
        // Check User List
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $label = false;
            $userslist = fopen("/home/Fiona/users.txt", "r") or exit("Unable to open file!");
            // or use json_encode :>
            while(!feof($userslist)){
                $getname = fgets($userslist);
                if($username == $getname){
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
                echo "Congratulations! Log in Sucessfully!";
                header("Location: homepage.php");
                exit;
            }
            if($lable == false && var_dump($username === null)){
                echo "Error: User does not exist. Please check your username and try again!";
            }
        }
    ?>
</body>

</html>