<?php
require_once '../includes/initialize.php';
if (!$session->is_logged_in()) {
	redirect_to('login.php');
}
include_once '../public/layouts/admin-header.php';

$logfile = SITE_ROOT . DS . 'logs' . DS . 'log.txt';
if (!empty($_GET['clear']) == 'true') {
	file_put_contents($logfile, '');

	/** Add the first log entry */
	log_action('Logs cleared', "by User ID {$session->user_id}");

	/** redirect tp this same page so that the URL won't have "clear=true" anymore */
	redirect_to('logfile.php');
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
	echo "Could not read from {$logfile}";
}
include_once '../public/layouts/footer.php';
?>
