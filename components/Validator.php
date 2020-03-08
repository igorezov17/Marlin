<?php

class Validator 
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = htmlentities(trim($email));
        $this->password = htmlentities(trim($password));
        
    }

    public function notEmpty()
    {
        if (!empty($this->email) && !empty($this->password))
        {
            return true;
        } else 
        {
            return false;
        }
    }

    public function isEmail()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        } else {
            return false;
        }
    }

    

    public function truePassword($min = 6, $max = 30)
    {
        if (strlen($this->password)>=$min && strlen($this->password)<$max)
        {
            return true;
        } else {
            return false;
        }
    }

    public function trueValid()
    {
        if ($this->notEmpty() == true && $this->isEmail() == true && $this->truePassword()==true)
        {
            return [$this->email, $this->password];
        } 
        else
        {
            return "ты не там";
        }
    }
}
