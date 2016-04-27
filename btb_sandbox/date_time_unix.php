<div class="row">
	<div class="large-6 medium-6 small-12 columns">
		<h1 class="text-center">Dates and Times: Unix</h1>
<?php
include_once 'html5req.php';
date_default_timezone_set('America/New_York');
//Getting the Unix Timestamp
echo "<h3>" . "Number of seconds passed since 1970" . "</h3>";
echo "Current timestamp: " . time() . "<br>";
?>
	</div>
</div>