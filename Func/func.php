<?php

/*require_once "/db/db.php";

function newUser($name, $email, $pass, $povtpass)
{
            $res = valid($name, $email, $pass, $povtpass);
            if ($res == true)
            {
                $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
                $stmf = $pdo->prepare('SELECT email FROM users WHERE email = :email');
                $paramf = [':email' => $email];
                $stmf->execute($paramf);
                $res = $stmf->fetch(PDO::FETCH_ASSOC);
                if ($res['email'] != $email)
                {
                    $pwd = password_hash($pass, PASSWORD_DEFAULT);
                    $stin = $pdo->prepare('INSERT INTO users(name, email, password) VALUES (:name, :email, :pwd)');
                    $paramin = [':name' => $name, ':email' => $email, ':pwd' => $pwd];
                    if ($stin->execute($paramin))
                    {
                        $res = "Регистрация прошла успешно";
                    }
                    else 
                    {
                        $res = "Упс, что-то пошло не так";
                    }
                }
            } 
    return $res; 
}


function valid($name, $email, $pass, $povtpass)
{
    if(!empty($name) && !empty($email) && !empty($pass))
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            if ($pass == $povtpass)
            {
                $res = true;
            } 
            else
            {
                $res = "Введите одинаковые пароли";
            }
        } 
        else
        {
            $res = "Введите корректный пароль";
        }
    } 
    else 
    {
        $res = "Заполните все поля";
    }
    return $res;
}

function flash($obt)
{
    if ($obt == 1)
    {
        $res = "Регистрация прошла успешно";
    } 
    else
    {
        $res = $obt;
    }
    return $res;
}*/

function debug($obt)
{
    echo "<pre>";
    print_r($obt);
    echo "</pre>";
}


