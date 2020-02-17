<?php
include "func/func.php";
$db = include "db/start.php";
$posts = $db->getAll(); // а вот здесь уже получаем необходимую выборку

include "index.view.php";
?>

  