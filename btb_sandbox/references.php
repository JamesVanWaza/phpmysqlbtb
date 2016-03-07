<?php include_once 'html5req.php';?>
    <div class="small-12 medium-6 large-6 columns">
        <h1 class="text-center">Reference Assignment</h1>
<?php
$a = 1;
$b = $a;
$b = 2;

echo "a: {$a} / b: {$b}<br>";
//returns 1/2

$a = 1;

//b references a
$b = &$a;
$b = 2;

echo "a: {$a} / b: {$b}<br>";
//returns 2/2 the value of a is returned as 2
?>
    </div>
</div>