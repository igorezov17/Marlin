<?php

class Router
{
    private $routes = [
        '/about' => 'func/about.php',
        '/' => 'func/homepage.php'
    ];
    
    /**
     * @param string $newrout
     * @param string $waytofile
     */
    public function newRout($newrout, $waytofile)
    {
        $this->routes += array($newrout => $waytofile);
        return $this->routes;
    }

    /**
     * @param string $rout
     */
    public function getRout($rout)
    {
        if (array_key_exists($rout, $this->routes))
        {
            include __DIR__ . "/../" . $this->routes[$rout];
        } else {
            echo "404";
        }
    }
}

?>