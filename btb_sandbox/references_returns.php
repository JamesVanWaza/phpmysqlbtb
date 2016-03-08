<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Reference as Function Return Values</h1>
<?php
function ref_return() {
	global $a;
	$a = $a * 2;
	return $a;
}

$a = 10;
$b = ref_return();
echo "a: {$a} / b: {$b}<br>";

function &increment() {
	static $var = 0;
	$var++;
	return $var;
}
$a = &increment();
increment();
$a++;
increment();
echo "a: {$a}<br>";
?>
		</div>
	</div>