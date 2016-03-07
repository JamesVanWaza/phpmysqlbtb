<?php include_once 'html5req.php';?>
<div class="row">
    <div class="small-12 medium-6 large-6 columns">
        <h1 class="text-center">Variable Scope</h1>
<?php
$var = 1;
function test1() {
	$var = 2;
	echo $var . "<br>";
}
test1();
echo $var . "<br>";
echo "<hr>";

$var = 1;
function test2() {
	global $var;
	$var = 2;
	echo $var . "<br>";
}
test2();
echo $var . "<br>";
echo "<hr>";

/**  The value increments */
$var = 1;
function test3() {
	static $var = 2;
	echo $var . "<br>";
	$var++;
}
test3();
echo $var . "<br>";
?>
    </div>
</div>