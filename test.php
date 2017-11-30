<?php

/**
 * Created by PhpStorm.
 * User: kb427
 * Date: 2017/11/30
 * Time: 10:23
 */
class test
{

    static $id = 0;

    function __construct() {
        self::$id++;
    }

    static function tellAge(){
         static $age =0;

         echo "my age is ". $age."<br>";
         $age++;
    }

    static function getId() {
        return self::$id;
    }


}






test::tellAge();
test::tellAge();
test::tellAge();
test::tellAge();
/*
echo test::$id;
echo "<br>";
echo test::getId();
echo "<br>";
new test();
echo test::$id;
echo "<br>";
new test();
echo test::$id;
echo "<br>";
new test();
echo test::$id;
echo "<br>";
*/