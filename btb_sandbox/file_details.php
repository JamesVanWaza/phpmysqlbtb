<div class="row">
    <div class="large-6 medium-6 small-12 columns">
<h1 class="text-center">File Details</h1>
<?php
include_once 'html5req.php';
$filename = 'filetest.txt';
echo "<b>The number of the filesize in bytes is: </b>" . filesize($filename) . "<br>"; //number in bytes

/** filemtime(filename): last modified (changed content) */
/** filectime(filename): last changed (changed content or metadata) */
/** fileatime(filename): last accessed (any read/change) */

echo "<b>The date and time the file was last modified is: </b>" . strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br>";
echo "<b>The date and time the file was last changed is: </b>" . strftime('%m/%d/%Y %H:%M', filectime($filename)) . "<br>";
echo "<b>The date and time the file was last accessed is: </b>" . strftime('%m/%d/%Y %H:%M', fileatime($filename)) . "<br>";

echo "<hr>";

$path_parts = pathinfo(__FILE__);
echo "<pre>";
print_r($path_parts);
echo "</pre>";

echo "<hr>";

echo "<b>Path of file: </b>" . $path_parts['dirname'] . "<br>"; // "/Users/jgacuca/Dropbox/htdocs/2016/April/PHPMYSQLBTB/btb_sandbox"
echo "<b>Full name of file: </b>" . $path_parts['basename'] . "<br>"; // "file_details.php"
echo "<b>File Extension: </b>" . $path_parts['extension'] . "<br>"; // "php"
echo "<b>Name of file without extension: </b>" . $path_parts['filename'] . "<br>"; // "file_details"
?>
	</div>
</div>
<?php include 'footer.php';?>