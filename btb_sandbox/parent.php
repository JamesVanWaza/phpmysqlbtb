<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Parent</h1>
<?php
class A
{
    static $a = 1;

    /** self means the name of the class */
    public static function modified_a()
    {
        return self::$a + 10;
    }

    public function hello()
    {
        echo 'Hello <br>';
    }
}

class B extends A
{
    public static function attr_test()
    {
        /** parent is B(the name of the class) */
        echo parent::$a;
    }

    public static function method_test()
    {
        echo parent::modified_a();
    }

    public function instance_test()
    {
        echo parent::hello();
    }

    public function hello()
    {
        echo "******";

        parent::hello();
        echo "******";
    }
}
echo B::$a . '<br>';
echo B::modified_a() . '<br>';

echo B::attr_test() . '<br>';
echo B::method_test() . '<br>';

$object = new B();
$object->instance_test();
$object->hello();
?>
            </div>
        </div>