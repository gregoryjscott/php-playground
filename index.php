<?php
require 'Slim/Slim.php';

$app = new Slim();

$app->get('/', function () {
    $template = <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <nav><a href='/php-playground/players'>Player Index</a></nav>
    </body>
</html>
EOT;
    echo $template;
});

$app->get('/players', function () {
    $template = <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <title>Players Index</title>
    </head>
    <body>
        <nav><a href='/php-playground'>back to Home</a></nav>
        <ul>
            <li><a href='/php-playground/players/1'>Player 1</a></li>
            <li><a href='/php-playground/players/2'>Player 2</a></li>
            <li><a href='/php-playground/players/3'>Player 3</a></li>
        </ul>
    </body>
</html>
EOT;
    echo $template;
});

$app->get('/players/:id', function ($id) {
    $template = <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <title>Players $id</title>
    </head>
    <body>
        <nav><a href='/php-playground/players'>back to Player Index</a></nav>
        Imagine the details of player $id here.
    </body>
</html>
EOT;
    echo $template;
});

$app->run();