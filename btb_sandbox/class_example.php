<div class="row">
	<div class="large-6 columns medium-6 columns small-12 columns">
		<?php
			include_once('html5req.php');
			class Person {
			    
			}

			//Gets the list of php default classes
			$classes = get_declared_classes();
			echo "<h1 class='text-center'>" . "Declared PHP Classes" . "</h1>";
			echo "<ol>";
				foreach($classes as $class){
				    echo '<li>' . $class . "</li>";
				}
			echo "</ol>";

			if(class_exists("Person")){
			    echo "<h2>" . "That class has been defined." ."<br></h2>" ;
			} else {
			    echo "Class not defined! <br>";
			}
		?>
	</div>
</div>
