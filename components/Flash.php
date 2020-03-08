<?php

class Flash
{
    const FLASH_KEY = "flash";

    /**
     * @param string $massage
     */
    public static function set($massage)
    {
        $_SESSION[self::FLASH_KEY] = $massage;
    } 

    public static function has()
    {
        return isset($_SESSION[self::FLASH_KEY]);
    }

    public static function get()
    { 
        return $_SESSION[self::FLASH_KEY];
    }
    public static function delete()
    {
        unset($_SESSION[self::FLASH_KEY]);
    }
    
    public static function getAndDelete()
    {
        $sesFlash = self::get();
        self::delete();
        return $sesFlash;
    }
}

?>