<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Class Examples: 3</h1>
<?php
class Person {
	function say_hello() {
		echo "Hello from inside a class. <br>";
	}
}

$person = new Person();
$person2 = new Person();

echo get_class($person) . '<br>';

if (is_a($person, 'Person')) {
	echo "Yup, it's a Person. <br>";
} else {
	echo "Not a Person . <br>";
}

/** Inside the person class, it is calling the say_hello() function */
$person->say_hello();
?>
        </div>
    </div>