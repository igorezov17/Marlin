<?php

class QueryBuilder{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getAll()
    {
        $sql = "SELECT * FROM task";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
    }
}

?>