<?php
$config = include __DIR__ . '/../config.php';
include __DIR__ . "/../db/QueryBuilder.php";
//include "/../components/QueryBuilder.php";
include __DIR__ . "/../db/Connection.php";
include __DIR__ . "/../func/func.php";


return new QueryBuilder(
    Connection::make($config['database1'])
); // здесь только db и подключение к базе

?>