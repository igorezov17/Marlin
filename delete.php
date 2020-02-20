<?php
include "func/func.php";
$db = include "db/start.php";

$db->delete('task', $_GET['id']);
header ('Location:index.php');
?>