<?php
class Application{
    private $name;
    public static $count=0;

    public function __construct($name)
    {
        $this->name=$name;
        self::$count++;
    }
    public function __toString()
    {
        return "$this->name";
    }
}
$app1= new Application("app 1");
$app2=new Application("app 2");
echo "total object count:".Application::$count;