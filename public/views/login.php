<?php
session_start();
if(isset($_SESSION["useremail"])){
    header("location: ../main");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <script src="https://kit.fontawesome.com/e550729287.js" crossorigin="anonymous"></script>
    <title>Bullet - Welcome!</title>
</head>
<body>
    <div class="main">
        <div class="nav">
            <div class="logo">
                <p>bullet</p>
            </div>
            <div class="register_button">
                <div class="sign_up" role="button" onclick="location.href='register'">
                    <p>Sign up</p>
                </div>
            </div>
        </div>
        <div class="container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php if(isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <p>Welcome back!</p>
                <input name="email" type="text" placeholder="Enter your email">
                <input name="password" type="password" placeholder="Enter your password">
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>