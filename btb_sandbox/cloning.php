<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Cloning</h1>
<?php
class Beverage {
	public $name;

	public function __construct() {
		echo 'New beverage was created. <br>';
	}

	public function __clone() {
		echo 'Existing beverage was cloned. <br>';
	}
}

$a = new Beverage();
$a->name = 'coffee';
$b = $a; // always a reference with objects
$b->name = 'tea';
echo $a->name;

echo "<br>";
//Clone
$c = clone $a;
$c->name = 'orange juice';
echo $a->name;
echo "<br>";
echo $b->name;
?>
		</div>
	</div>