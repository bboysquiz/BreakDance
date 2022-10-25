<?php

require "libs/rb.php";

R::setup( 'mysql:host=localhost;dbname=bboys168_breaking_education','bboys168_bboy', 'dsi725VLn3' );
$mysqli = new mysqli("localhost", "bboys168_bboy", "dsi725VLn3", "bboys168_breaking_education");
if (!R::testConnection())
{
	exit ('Нет соедиенения с базой данных!!!');
}
//else {
	//echo 'Есть соединение!!!';
//}
/*проверка соединения */
//if ($mysqli->connect_errno) {
//    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
//    exit();
//}
//else {
//	echo 'Есть соединение!!! Кирилл';
//}
session_start();?>

