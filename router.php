<?php

$url = explode('/', $_SERVER['REQUEST_URI']);
require_once("php/db.php");
require_once("php/classes/User.php");

if ($url[1] == "blog") {
    $content = file_get_contents("pages/blog.html");
} else if ($url[1] == "contact") {
    $content = file_get_contents("pages/contact.php");
} else if ($url[1] == "login") {
    $content = file_get_contents("pages/login.html");
} else if ($url[1] == "register") {
     $content = file_get_contents("pages/register.html");
} else if  ($url[1] == "users") {
    require_once("pages/users/index.html");
} else if ($url[1] == "addUser") {
    echo User::addUser($_POST["name"], $_POST["lastname"], $_POST["email"], $_POST["pass"]);
} else if ($url[1] == "loginUser") {
    echo User::loginUser($_POST["email"], $_POST["pass"]);
} else {
    $content = file_get_contents("pages/index.php");
}
if (!empty($content))
require_once("template.php");

// if ($url[1] == "blog") {
//     require_once("blog.html");
// }
// if ($url[1] == "contact") {
//     require_once("contact.php");
// }
// if ($url[1] == "home") {
//     require_once("index.php");
// }

// for ($i = 0; $i < count($url); $i++) {
//     echo $url[$i]."<hr>";
// }

