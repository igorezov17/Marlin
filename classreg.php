<?php

class newuser
{
    public $name;
    public $email;
    public $pass;
    public $povtpass;

    /*public function __construct($name, $email, $pass, $povtpass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->povtpass = $povtpass;
    }*/

    public function reg_user($name, $email, $pass, $povtpass)
    {
        $result = $this->valid($name, $email, $pass, $povtpass);
        if ($result == false)
        {
            $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
            $stmf = $pdo->prepare('SELECT name, email FROM users WHERE email = :email');
            $paramf = [':email' => $email];
            $stmf->execute($paramf);
            $rest = $stmf->fetch(PDO::FETCH_ASSOC);
            if ($rest['email'] != $email)
            {
                $pwd = password_hash($pass, PASSWORD_DEFAULT);
                $stin = $pdo->prepare('INSERT INTO users(name, email, password) VALUES (:name, :email, :pwd)');
                $paramin = [':name' => $name, ':email' => $email, ':pwd' => $pwd];
                if ($stin->execute($paramin))
                {
                    
                    $result = "Регистрация прошла успешно";
                }
                else 
                {
                    $result = "Упс, что-то пошло не так";
                }
            } else 
            {
                $result = "Пользователь с таким email уже существует";
            }
            
        } 
        return $result; 
    }

    private function valid($name, $email, $pass, $povtpass)
    {
        if(!empty($name) && !empty($email) && !empty($pass))
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            if ($pass == $povtpass)
            {
                $res = false;
            } 
            else
            {
                $res = "Введите одинаковые пароли";
            }
        } 
        else
        {
            $res = "Введите корректный email";
        }
        } 
        else 
        {
            $res = "Заполните все поля";
        }
        return $res;
    }

    public function flash($obt)
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
    }
}
?>