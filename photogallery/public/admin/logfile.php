<?php
require_once '../../includes/initialize.php';
if (!$session->is_logged_in()) {
	redirect_to('login.php');
}
include_once '../layouts/admin-header.php';

$logfile = SITE_ROOT . DS . 'logs' . DS . 'log.txt';
if ($_GET['clear'] == 'true') {
	# code...
}
?>
<a href="index.php">&laquo; Back</a>
<h2>Log File</h2>
<p><a href="logfile.php?clear=true">Clear log file</a></p>
<?php
if (file_exists($logfile) && is_readable($logfile) && $handle = fopen($logfile, 'r')) {
	/** read */
	echo "<ul class='side-nav'>";
	while (!feof($handle)) {
		$entry = fgets($handle);
		if (trim($entry) != "") {
			echo "<li>{$entry}</li>";
		}
	}
	echo "</ul>";
	fclose($handle);
} else {
	# code...
}
include_once '../layouts/admin-footer.php'
?>