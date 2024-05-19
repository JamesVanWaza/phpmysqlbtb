<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Class Examples</h1>
<?php
class Person {

}

//Gets the list of php default classes
$classes = get_declared_classes();
echo "<h3 class='text-center'>" . "Declared PHP Classes" . "</h3>";
echo "<ol>";
foreach ($classes as $class) {
	echo '<li>' . $class . "</li>";
}
echo "</ol>";

if (class_exists("Person")) {
	echo "<h2>" . "That class has been defined." . "<br></h2>";
} else {
	echo "Class not defined! <br>";
}
?>
		</div>
	</div>
