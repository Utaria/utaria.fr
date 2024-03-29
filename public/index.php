<?php
setLocale(LC_ALL, "fr_FR.utf8");

require '../App/App.php';

$app = App::getInstance();

use \Core\Routing\Router;

// Le blog
Router::connect("blog/:id-:slug", "blog/view/id:([0-9]+)/slug:([a-z0-9-]+)");
Router::connect("blog/postcomment/:id", "blog/postcomment/id:([0-9]+)");

// Le guide
Router::connect("guide/:id-:slug", "guide/category/id:([0-9]+)/slug:([a-z0-9-]+)");
Router::connect("guide/:cid/:id-:slug", "guide/article/cid:([0-9]+)/id:([0-9]+)/slug:([a-z0-9-]+)");

$app->load();