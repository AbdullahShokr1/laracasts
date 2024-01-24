<?php
$config = require('config.php');
require('function.php');

//require('route.php');


//Connect to database 
require("Database.php");

$db = new Database($config["database"]);

$id = $_GET['id'];
$query="SELECT title FROM blogs where id = :id";

$posts = $db->query($query,[":id"=>$id])->fetch();
dd($posts);

