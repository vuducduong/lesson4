<?php
class Application{
    private static $name;
    private function __construct()
    {
    }
    public static function getInstance(){
        if(self::$name===null){
            self::$name = new Application();
            echo "alo";
        }
        return self::$name;
    }
}
$app1= Application::getInstance();