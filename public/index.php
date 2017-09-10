<?php
setLocale(LC_ALL, "fr_FR.utf8");

require '../App/App.php';

$app = App::getInstance();

\Core\Routing\Router::connect("blog/:id-:slug", "blog/view/id:([0-9]+)/slug:([a-z0-9-]+)");

$app->load();