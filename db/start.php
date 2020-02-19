<?php
$config = include "config.php";
include "db/QueryBuilder.php";
include "db/Connection.php";

return new QueryBuilder(
    Connection::make($config['database'])
); // здесь только db и подключение к базе

?>