<?php 

class QueryBuilder 
{

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param string $table
     */

    public function getAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $rezult = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rezult;
    }

    /**
     * @param string $table
     * @param array $data
     * @param int $id
     */

    public function updatePost($table, $data, $id)
    {
        $keys = array_keys($data);
        $string = '';
        foreach ($keys as $key)
        {
            $string .= $key . "=:" . $key . ",";
        }
        $keys = rtrim($string, ",");
        $sql = "UPDATE {$table} SET {$keys} WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $data['id'] = $id;
        $stmt->execute($data);
    }

    /**
     * @param string $table
     * @param array $data
     */

    public function createPost($table, $data)
    {
        $keys = implode(",",array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO {$table}({$keys}) VALUES({$values})";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }

    /**
     * @param string $table
     * @param int $id
     */

    public function deletePost($table, $id)
    {
        $sql = "DELETE FROM {$table} where id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    /**
     * @param string $table
     * @param int $id
     */

    public function getOne($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $params = [':id' => $id];
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}