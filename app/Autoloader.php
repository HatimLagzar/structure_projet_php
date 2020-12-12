<?php

class Autoloader {
    public static function autoload($class) {
        require __DIR__ . "/$class.php";
    }
    
    public static function register() {
        spl_autoload_register(array(
            __CLASS__,
            'autoload'
        ));
    }
}