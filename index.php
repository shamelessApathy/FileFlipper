<?php 

// Juuuuust building a basic MVC here
require_once('uri_router.php');
$router = new uri_router();

$request_uri = $_SERVER['REQUEST_URI'];


$router->load($request_uri);




//require_once("html_header.php");
//require_once("views/view.home.php");






?>