<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 23:10
 */

class Singleton
{
    private static $instance;
    
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
    
    private function __construct()
    {
    }
    
    private function __clone()
    {
    }
    
    private function __wakeup()
    {
    }
}