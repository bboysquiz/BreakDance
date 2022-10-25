<?php 
header("Location: cab.php"); 
require "db.php";
$data = $_POST;
?> 
<?php
if(isset($_POST['deleteFav']))
{
	$favVideoId = $data['favVideoId'];
	$lastFavVideo = R::load('favorites', $favVideoId);
	R::trash($lastFavVideo);
}