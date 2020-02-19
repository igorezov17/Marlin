<?php
include "func/func.php";
$db = include "db/start.php";
$bob = $_POST['title'];
$desc = $_POST['content'];
$db->create('task', [
    "name" => $bob,
    "describes" => $desc,
]);
header('Location:index.php');

?>