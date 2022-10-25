<?php 
header("Location: lessons.php"); 
require "db.php";
$data = $_POST;
//В ЭТОТ ФАЙЛ ВАЩЕ НЕ ЛЕЗЬ НАХУЙ 
?> 
<?php
if(isset($_POST['upload']))
{ 	
	$videos = R::dispense('videos'); 
	$videos->name=$data['videoName'];
	$videos->descr=$data['videoDescr']; 
	$videos->path=$data['videoFrame']; 
	R::store($videos); 
}
elseif(isset($_POST['delete']))
{
	$videoId = $data['videoId'];
	$lastVideo = R::load('videos', $videoId);
	R::trash($lastVideo);
}
elseif(isset($_POST['favorite']))
{
	$videoId = $data['videoId'];
	$userId = $data['userId'];
	$favorites = R::dispense('favorites');
	$favorites->user = $userId;
	$favorites->video = $videoId;
	R::store($favorites);
}