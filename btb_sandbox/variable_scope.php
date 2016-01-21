<?php
include_once('html5req.php');
    $var = 1; 
    function test1(){
        $var = 2;
        echo $var . "<br>";
    }
    test1();
    echo $var . "<br>";
    echo "<hr>";

    $var = 1;
    function test2(){
        global $var;
        $var = 2;
        echo $var . "<br>";
    }
    test2();
    echo $var . "<br>";
    echo "<hr>";

    /**  The value increments */
    $var = 1;
    function test3(){
        static $var = 2;
        echo $var . "<br>";
        $var ++;
    }
    test3();
    echo $var . "<br>";
?>