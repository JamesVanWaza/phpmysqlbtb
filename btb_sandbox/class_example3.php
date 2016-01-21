<div class="row">
    <div class="large-6 columns medium-6 columns small-12 columns">
        <?php
            include_once('html5req.php');
            class Person {
                function say_hello(){
                    echo "Hello from inside a class. <br>";
                }  
            }    

            $person = new Person();
            $person2 = new Person();

            echo get_class($person) . '<br>';

            if (is_a($person, 'Person')) {
                echo "Yup, it's a Person. <br>";
            } else{
                echo "Not a Person . <br>";
            }

            /** Inside the person class, it is calling the say_hello() function */
            $person->say_hello();
        ?>
    </div>
</div>