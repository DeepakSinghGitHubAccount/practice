<?php
trait Singleton
{
    private static $instance;

    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

class DbReader extends ArrayObject
{
    use Singleton;
    public function fun(){

    	echo "Hello";
    }
}

class  FileReader
{
    use Singleton;
}



$a = DbReader::getInstance();
$b = FileReader::getInstance();
echo "<pre>";
var_dump($a);  //object(DbReader)
var_dump($b);  //object(FileReader)

$a->fun();
?>