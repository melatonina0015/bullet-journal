<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <title>Bullet</title>
</head>
<body>
    <div class="main">
        <header class="header">
            <img class="logo" src="public/img/logo.svg" alt="logo">
            <nav>
                <ul class="nav_links">
                    <li><a href="#">Tiles</a></li>
                    <li><a href="#">Options</a></li>
                    <li><a href="#">Info</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <a class="cta "href="#"><button>Log out</button></a>
        </header>
        <section class="posts">
            <div id="post_1">
                <img src="public/uploads/<?= $post->getImage() ?>">
                <div>
                    <h2><?= $post->getTitle() ?></h2>
                    <p><?= $post->getContent() ?></p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>