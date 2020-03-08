<?php

require "/../classes/foo/order.php";
require "/../classes/bar/order.php";

use classes\foo\order as forder;
use classes\bar\order as border;


$myfoo = new forder;
$mybar = new border;

var_dump($myfoo, $mybar);
$db = include __DIR__ . "/../db/start.php";
$posts = $db->getAll('task'); // а вот здесь уже получаем необходимую выборку
include __DIR__ . "/../index.view.php";

?>