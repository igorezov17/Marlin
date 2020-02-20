<?php
include "func/func.php";
$db = include "db/start.php";
$post = $db->getOne('task', $_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
        <div class="form-group">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="update.php?id = <?php ['id'];?>" method="POST">
                            <h2>Edit</h2>
                            <input type="hidden" value="<?php echo $post['id'] ?>" name="id">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                            <label for="">Content</label>
                            <input type="text" name="content" class="form-control">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Изменить</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>