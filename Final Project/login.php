<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <link rel="icon" href="/favicon-lock.ico">

    <link href="assets/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link href="assets/icons/googlefonts.css" rel='stylesheet' type='text/css'>
    <link href="font-awesome-4.6.1/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        ::-webkit-input-placeholder {
            color: #48cfad;
        }
        /*Specific pseudoclass to change placeholder text and make it more readable found here 
        
        https://css-tricks.com/snippets/css/style-placeholder-text/  
        
        */
    </style>

</head>

<?php

    session_start();

    if(isset($_POST['login']))//Logging In
    {
        
        $link = mysqli_connect("localhost", "root", "", "users") or die ("Connection Error " . mysqli_error($link));

        $sql = "SELECT * FROM accounts WHERE username = ?";
        
        $stmt = mysqli_prepare($link, $sql) or die("PREPARE!");

        $username = $_POST['username'];
		$password = $_POST['password'];
        mysqli_stmt_bind_param($stmt, "s", $username) or die("Bind Param Error");
        
        mysqli_stmt_execute($stmt) or die("Execute Error");
        
		$result = mysqli_stmt_get_result($stmt) or die("GET RESULT");
		$array = mysqli_fetch_assoc($result) or die("Fetch assoc");
        mysqli_close($link);

        $hpass = $array['hashed_password'];
        
        if($password == $hpass)
        {
            $_SESSION['username'] = $username;
            setcookie("LoggedIn", $username);
            header("Location: index.php");
        }
        else
        {
            echo "<h4>Incorrect username or password.</h4>";
        }
       
    }

    if(isset($_POST['newuser']))//Creating new user
    {
        $link = mysqli_connect("localhost", "root", "", "users") or die;
		$sql = "INSERT INTO accounts(username, hashed_password) VALUES (?,?)";
		$stmt = mysqli_prepare($link, $sql);
                
		$user = $_POST['username'];
        $hpass = $_POST['password'];
		//$hpass = password_hash($_POST['password'], PASSWORD_BCRYPT) or die;
        
        mysqli_stmt_bind_param($stmt, "ss", $user, $hpass) or die;
        
        if(mysqli_stmt_execute($stmt))
        {
            echo "<h4>Success! You have created a new user!</h4>";
        }
        else
        {
            echo "<h4>Could not create user</h4>";
        }
    }

    ?>

    <body>

        <div class="container">
            <h1>Login</h1>
            <div class="contact-form" id="contact">
                <div class="row">
                    <form action="login.php" method="POST">
                        <div class="row form-group">
                            <input class='form-control' type="text" name="username" placeholder="Username">
                        </div>
                        <div class="row form-group">
                            <input class='form-control' type="password" name="password" placeholder="Password">
                        </div>
                        <div class="row form-group">
                            <input class=" btn btn-info" type="submit" name="login" value="Login" />
                            <input class=" btn btn-info" type="submit" name="newuser" value="Create New User" />
                            <a class=" btn btn-info" href="pictures.php">To Protected Content</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>