<?php
include  __DIR__ . "/../func/func.php";
//debug($_SERVER);
/*$db = include "db/start.php";
$posts = $db->getAll('task'); // а вот здесь уже получаем необходимую выборку
include "index.view.php";*/
//debug("здрасте");
  $routes = [
    "/" => 'public/index.php',
    "/about" => '/../func/about.php',
    "post/5" => '/../func/post.php'
];
$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes))
{
    include ($routes[$route]);
    
} else 
{
    debug(404);
}




?>

  