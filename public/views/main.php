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
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" defer src="/public/js/logout.js"></script>
    <title>Bullet</title>
</head>
<body>
    <div class="main">
        <header class="header">
            <img class="logo" src="public/img/logo.svg" alt="logo">
            <div class="search-bar">
                <input type="search" placeholder="search post">
            </div>
            <nav>
                <div class="add_post" role="button" onclick="location.href='add_post'">
                    <p>Add Post</p>
                </div>
            </nav>
            <a class="cta" href="#"><button class="logout">Log out</button></a>
        </header>
        <section class="posts">
            <?php foreach($posts as $post): ?>
                <div id="post_1">
                    <img src="/public/uploads/<?= $post->getImage() ?>">
                    <div>
                        <h2><?= $post->getTitle() ?></h2>
                        <p><?= $post->getContent() ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</body>

<template id="post-template">
    <div id="">
        <img src="">
        <div>
            <h2>title</h2>
            <p>description</p>
            </div>
        </div>
    </div>
</template>

</html>