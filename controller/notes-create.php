<?php

$header ="Create New Note";

//Call Database
$config = require('config.php');
$db = new Database($config["database"]);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $content = $_POST['my_content'];
    $slug = $_POST['slug'];

    $query="INSERT INTO `posts`(`title`, `my_content`, `slug`, `category_id`, `writer_id`) VALUES (:title,:content,:slug,1,1)";
    $notes = $db->query($query,[
        "title"=>$title,
        "content"=>$content,
        "slug"=>$slug,
    ]);
}





require "view/notes-create.view.php";