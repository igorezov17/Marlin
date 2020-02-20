<?php
include "func/func.php";
$db = include "db/start.php";



//$post = $db->getOne('task', 2);



$posts = $db->getAll('task'); // а вот здесь уже получаем необходимую выборку

include "index.view.php";
?>

  