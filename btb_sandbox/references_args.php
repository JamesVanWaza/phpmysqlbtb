<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Reference Assignment</h1>
<?php
function ref_test(&$var) {
	//when the & is used the var and a are the same - the number becomes 10
	$var = $var * 2;
}
$a = 10;
ref_test($a);
echo $a;
?>
		</div>
	</div>