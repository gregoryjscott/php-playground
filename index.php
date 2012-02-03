<?php
require 'Slim/Slim.php';

$app = new Slim();

$app->get('/', function () use ($app) {
    $app->render('home.php');
});

$app->get('/skiing', function () use ($app) {
    $app->render('skiing.php');
});

$app->get('/players', function () use ($app) {
    $app->render('players/index.php');
});

$app->get('/players/:id', function ($id) use ($app) {
    $app->render('players/show.php', array($id));
});

$app->run();