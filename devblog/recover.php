<?php

$db = new PDO("mysql:host=localhost;dbname=utaria","root","root");

$news = array();

$recover_news = $db->query("SELECT * FROM news ORDER by id DESC");

while($all = $recover_news->fetch())
{
	$news[] = $all;
}

foreach($news as $onenews)
{
	?>

		<h4><a href=""><?php echo $onenews["title"]; ?></a></h4>
		<p><?php echo $onenews["description"]; ?></p>
		
	<?php
}


?>