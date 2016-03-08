<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Class Examples: 2</h1>
<?php
class Person {
	/** If a function is inside a class it is called a method */
	function say_hello() {
		echo "Hello from inside a class. <br>";
	}
}
//Gets the list of php default classes methods
$methods = get_class_methods('Person');

foreach ($methods as $method) {
	echo $method . "<br>";
}

//Finding out whether a method exists
if (method_exists('Person', 'say_hello')) {
	echo "Method does exist. <br>";
} else {
	echo "Method does not exist";
}
?>
        </div>
    </div>