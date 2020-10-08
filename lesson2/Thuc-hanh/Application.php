<?php


class Application
{
private $name;
public static $count=0;


    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }
    public function _toString(){
        return 'Application name: '. $this->name;
    }
}
echo "Total objects count:".Application::$count."<br>";
$app1=new Application("App one");
echo "Total objects count: ".Application::$count."<br>";
$app2=new Application("App two");
echo "Total objects count: ".Application::$count."<br>";
print_r($app1);
echo "<br>";
print_r($app2);


