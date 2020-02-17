<?php
include "func/func.php";
include "db/QueryBuilder.php";
$pdo = connectToDB();
$db = new QueryBuilder($pdo); // здесь только db и подключение к базе
$posts = $db->getAll(); // а вот здесь уже получаем необходимую выборку

include "index.view.php";
?>

