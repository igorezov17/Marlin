<?php
//$db = include __DIR__ . "/../db/start.php";
include "/../components/Router.php";



$frontrout = new Router;
$frontrout->getRout($_SERVER['REQUEST_URI']);

?>

  