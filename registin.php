<?php
require_once "db/db.php";
require_once "classreg.php";

$name = htmlentities(trim($_POST['name']));
$email = htmlentities(trim($_POST['email']));
$pass = htmlentities(trim($_POST['pass']));
$povtpass = htmlentities(trim($_POST['povtpass']));

$user = new newuser($name, $email, $pass, $povtpass);
$testcls = $user->reg_user($name, $email, $pass, $povtpass);
$_SESSION['flash'] = $user->flash($testcls);
header ('Location:index.php');
?>

