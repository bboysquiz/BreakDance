<?php

require "libs/rb.php";

R::setup( 'mysql:host=localhost;dbname=breaking_education','root', '' );
$mysqli = new mysqli("localhost", "root", "", "breaking_education");
if (!R::testConnection())
{
	exit ('Нет соедиенения с базой данных!!!');
}
session_start();?>

