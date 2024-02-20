<?php

function dd($value){
    echo"<pre>";
    var_dump($value);
    echo"</pre>";
    die();
}

function isURL($value){
    return $_SERVER['REQUEST_URI'] === $value;

}

function authorize($condition, $status = Responsive::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
}