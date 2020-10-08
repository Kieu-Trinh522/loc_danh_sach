<?php


class Application1
{
    private static $instance ;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Application1();
            echo 'alo';
        }
        return self::$instance;
    }

}

$app1 = Application1::getInstance();
$app2 = Application1::getInstance();
//print_r($app1);
//print_r($app2);
//print_r($app3);