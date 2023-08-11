<div class="row">
    <div class="large-6 medium-6 small-12 columns">
		<h1 class="text-center">File Changer</h1>
		<?php
include_once 'html5req.php';
echo fileowner('file_permissions.php') . "<br>";

/**
 * If we have Posix installed
 *
 * Tells us the Owner of the file
 */
$owner_id = fileowner('file_permissions.php');
$owner_array = posix_getpwuid($owner_id);
echo "<pre>";
print_r($owner_array);
echo "</pre>";

echo is_readable('file_permissions.php') ? 'Yes the file is readable' : 'No the file is not readable';
echo "<br>";
echo is_writable('file_permissions.php') ? 'Yes the file is writable' : 'No the file is not writeable';
?>
	</div>
</div>