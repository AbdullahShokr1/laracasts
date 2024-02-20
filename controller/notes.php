<?php

$header ="Notes";

//Call Database
$config = require('config.php');
$db = new Database($config["database"]);

$query="SELECT * FROM `posts` WHERE `category_id` = 1";

$notes = $db->query($query)->get();



require "view/notes.view.php";