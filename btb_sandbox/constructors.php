<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Constructors and Destructors</h1>
<?php
class Table
{
    public $legs;
    public static $total_tables = 0;

    public function __construct()
    {
        $this->legs = 4;
        Table::$total_tables++;
    }

    public function __destruct()
    {
        Table::$total_tables--;
    }
}
$table = new Table();
echo $table->legs . '<br>';

echo Table::$total_tables . '<br>';
$t1 = new Table();

echo Table::$total_tables . '<br>';
$t2 = new Table();

echo Table::$total_tables . '<br>';
$t3 = new Table();

?>
        </div>
    </div>