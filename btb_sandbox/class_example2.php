<div class="row">
    <div class="large-6 columns medium-6 columns small-12 columns">
        <?php
            include_once('html5req.php');
            class Person {
                /** If a function is inside a class it is called a method */
                function say_hello(){
                    echo "Hello from inside a class. <br>";
                }  
            }    
            //Gets the list of php default classes methods
            $methods = get_class_methods('Person');
            
            foreach($methods as $method){
                echo $method . "<br>";
            }
            
            //Finding out whether a method exists
            if(method_exists('Person', 'say_hello')){
                echo "Method does exist. <br>";
            } else {
                echo "Method does not exist";
            }
        ?>
    </div>
</div>