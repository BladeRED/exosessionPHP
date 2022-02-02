<?php

class Session
{


    private $attributs = [];

    // Récupère les élements en session //

    public function __construct()
    {
        session_start();
    }

    public function __get($name)
    {
        return $this->attributs[$name];
    }

    public function __set($name, $value)
    {
        return $this->attributs[$name] = $value;
    }

    public function __isset($name)
    {

        return isset($this->attributs[$name]);
    }

    public function __unset($name)
    {
        unset($this->attributs[$name]);
    }

    public function __destruct()
    {
        $this->attributs["sleeping"] = time();
    }


}

?>