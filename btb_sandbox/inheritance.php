<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Inheritance</h1>
<?php
class Car {
	var $wheels = 4;
	var $doors = 4;

	function wheelsdoors() {
		return $this->wheels + $this->doors;
	}
}

//Inheriting everything from Cars
class CompactCar extends Car {
	var $doors = 2;
}
$car1 = new Car();
$car2 = new CompactCar();

echo "<h3>" . "Car 1" . "</h3>";
echo 'Number of wheels: ' . $car1->wheels . '<br>';
echo 'Number of doors: ' . $car1->doors . '<br>';
echo 'Sum of wheels and doors: ' . $car1->wheelsdoors() . '<br>';
echo '<hr>';

echo "<h3>" . "Car 2" . "</h3>";
echo 'Number of wheels: ' . $car2->wheels . '<br>';
echo 'Number of doors: ' . $car2->doors . '<br>';
echo 'Sum of wheels and doors: ' . $car2->wheelsdoors() . '<br>';
echo '<hr>';

/** Gets the parent class of Car - Null because car is already the parent */
echo "<b>Car is the Parent class: </b>" . get_parent_class('Car') . "<br>";

/** Gets the parent class of CompactCar */
echo "<b>Parent class of CompactCar: </b>" . get_parent_class('CompactCar') . "<br>";

/** Finding whether a parent is a subclass or not*/
echo is_subclass_of('Car', 'Car') ? 'true' : 'false'; //False
echo "<br>";
echo is_subclass_of('CompactCar', 'Car') ? 'true' : 'false'; //True
echo "<br>";
echo is_subclass_of('Car', 'CompactCar') ? 'true' : 'false'; //False
echo "<br>";
?>
		</div>
	</div>