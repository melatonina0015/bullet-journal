<?php
session_start();
if(!isset($_SESSION["useremail"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <script type="text/javascript" defer src="/public/js/logout.js"></script>
    <title>Bullet</title>
</head>
<body>
    <div class="main">
        <header class="header">
            <img class="logo" src="public/img/logo.svg" alt="logo">
            <nav>
            </nav>
            <a class="cta "href="#"><button class="logout">Log out</button></a>
        </header>
        <section class="post-form">
            <h1>UPLOAD</h1>
            <form action="addPost" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="title" type="text" placeholder="title">
                <textarea name="content" rows=15 placeholder="content"></textarea>

                <input type="file" name="file"/><br/>
                <button type="submit">send</button>
            </form>
        </section>
    </div>
</body>
</html>