<?php 
header("Location: cab.php"); 
require "db.php";
//В ЭТОТ ФАЙЛ ВАЩЕ НЕ ЛЕЗЬ НАХУЙ 
?> 
<?php 
if (!file_exists('img/cab')) { 
mkdir('img/cab', 0777, true); 
} 
if(isset($_POST['upload']))
{ 	
	$lastImage = R::findOne( 'images', "`user_id`=?", array($_SESSION['logged_id']));
	R::trash($lastImage);
	$_SESSION['file_name'] = $_FILES['image']['name'];
	$file_name = $_FILES['image']['name']; 
	$file_size = $_FILES['image']['size']; 
	$file_tmp = $_FILES['image']['tmp_name']; 
	$file_type = $_FILES['image']['type']; 
	$img_place = "img/cab".$file_name ; 
	move_uploaded_file($file_tmp, $img_place); 
	$images = R::dispense('images'); 
	$images->name=$file_name; 
	$images->path=$img_place; 
	$images->user_id=$_SESSION['logged_id'];
	R::store($images); 
}
elseif(isset($_POST['reupload']))
{
	$lastFilePlace = "img/cab".$_SESSION['file_name'];
	unlink($lastFilePlace); 
	$lastImage = R::findOne( 'images', "`user_id`=?", array($_SESSION['logged_id']));
	R::trash($lastImage);
	$_SESSION['file_name'] = $_FILES['image']['name'];
	$file_name = $_FILES['image']['name']; 
	$file_size = $_FILES['image']['size']; 
	$file_tmp = $_FILES['image']['tmp_name']; 
	$file_type = $_FILES['image']['type'];
	$img_place = "img/cab/".$file_name ; 
	move_uploaded_file($file_tmp, $img_place); 
	$images = R::dispense('images'); 
	$images->name=$file_name; 
	$images->path=$img_place; 
	$images->user_id=$_SESSION['logged_id'];
	R::store($images); 
}
elseif(isset($_POST['delete']))
{
	$lastFilePlace = "img/cab".$_SESSION['file_name'];
	unlink($lastFilePlace); 
	$lastImage = R::findOne( 'images', "`user_id`=?", array($_SESSION['logged_id']));
	R::trash($lastImage);
	$images = R::dispense('images'); 
	$images->name= "nophoto.png"; 
	$images->path="img/cab/nophoto.png"; 
	$images->user_id=$_SESSION['logged_id'];
	R::store($images); 
}
