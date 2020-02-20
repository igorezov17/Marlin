<?php

$driver = 'mysql';
$host = '127.0.0.1';
$dbname = 'test';
$dbuser = 'root';
$pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];



try {
    $dsn = "$driver:host=$host;dbname=$dbname;charset=$charset";

    $pdo = new PDO($dsn, $dbuser, $pass, $options);
} catch (PDOException $e) {
    exit ($e->getMessage());
}

session_start();

if (isset($_COOKIE['page_visit']))
{
    setcookie('page_visit', ++$_COOKIE['page_visit'], time()+5);
} else {
    setcookie('page_visit', 1, time()+5);
    $_COOKIE['page_visit'] = 1;
}

