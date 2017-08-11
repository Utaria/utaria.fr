<?php

$db = new PDO("mysql:host=localhost;dbname=utaria","root","root");

if(isset($_POST["title"],$_POST["content"]) && !empty($_POST["title"]) && !empty($_POST["content"]))
{
	$title = htmlspecialchars(trim($_POST["title"]));
	$content = htmlspecialchars(trim($_POST["content"]));

	$db->exec("INSERT INTO news(id,title,description,autodate) VALUES('','$title','$content','')");

}

?>