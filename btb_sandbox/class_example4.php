<div class="row">
    <div class="large-6 columns medium-6 columns small-12 columns">
		<?php
			include_once('html5req.php');
			class Person {
			    function say_hello(){
			        echo "Hello from inside the class. " . get_class($this) . "<br>";
			    }  
			    
			    function hello(){
			        $this->say_hello();
			    }
			}    
			$person= new Person();
			$person->say_hello();
			$person->hello();
		?>	
	</div>
</div>