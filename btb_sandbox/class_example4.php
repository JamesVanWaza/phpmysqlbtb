<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Class Examples: 4</h1>
		<?php
class Person {
	function say_hello() {
		echo "Hello from inside the class. " . get_class($this) . "<br>";
	}

	function hello() {
		$this->say_hello();
	}
}
$person = new Person();
$person->say_hello();
$person->hello();
?>
		</div>
	</div>