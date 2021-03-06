<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('main', 'PostController');
Routing::get('register', 'DefaultController');
Routing::get('add_post', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('addPost', 'PostController');
Routing::post('search', 'PostController');
Routing::post('register', 'SecurityController');
Routing::post("logout", 'SecurityController');

Routing::run($path);