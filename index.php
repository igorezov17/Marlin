<?php
require_once 'db/db.php';
require_once 'Func/func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="loghead">
                <h1>Регистрация</h1>
                    <?php if ($_SESSION['flash']) {?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['flash'];?>
                    </div>
                        <?php unset($_SESSION['flash']); }?>
                    </div>
            </div>
                <form action="registin.php" method="POST">
                    <div class="form-group">
                        <label for="">Имя пользователя</label>
                        <input type="text" name="name" placeholder="Введите имя" class="form-control">
                    </div >
                    <div class="form-group">
                    <label for="">Email пользователя</label>
                        <input type="text" name="email" placeholder="Введите email" class="form-control" title="В формате @ya.ru и не более 25 символов" required aria-required="true">
                    </div >
                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input type="password" name="pass" placeholder="Введите пароль" class="form-control" autocomplete="current-password">
                    </div>
                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input type="password" name="povtpass" placeholder="Повторите пароль" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>