<?php
$db = include "func/func.php";
$db = include "db/start.php";

$post = $db->getOne('task', $_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Show</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md 8 offset-md-2">
            <h1><?php echo "Комментарий" ?></h1>
            <a href="/index.php" class="btn btn-success">Назад</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Тема</th>
                        <th>Комментарий</th>
                    </tr>
                    <tr>
                        <td><?php echo $post['id']; ?></td>
                        <td><?php echo $post['name']; ?></td>
                        <td><?php echo $post['describes']; ?></td>
                    </tr>
                </thead>
            </table>
            </div>
        </div>
    </div>

</body>
</html>