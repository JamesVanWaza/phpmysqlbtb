<?php
    include_once('html5req.php');
    ?>
        <div class="row">
            <div class="large-12 columns">
                <?php
                    $a = 1;
                    $b = $a;
                    $b = 2;

                    echo "a: {$a} / b: {$b}<br>";
                    //returns 1/2

                    $a = 1;
                    $b =& $a;
                    $b = 2;

                    echo "a: {$a} / b: {$b}<br>";
                    //returns 2/2 the value of a is returned as 2 
                ?>
            </div>
        </div>  