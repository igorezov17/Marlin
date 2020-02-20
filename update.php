<?php
include "func/func.php";
$db = include "db/start.php";
$db->update('task', $_POST, $_GET['id']);
header('Location:index.php');

?>

