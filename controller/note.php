<?php

$header ="Note";
$currentUser=1;


//Call Database
$config = require('config.php');
$db = new Database($config["database"]);

$query="SELECT * FROM `posts` WHERE id = :id";
$id = $_GET['id'];

$note = $db->query($query,[":id"=>$id])->findOrFail();

authorize($note['category_id'] === $currentUser);

require "view/note.view.php";