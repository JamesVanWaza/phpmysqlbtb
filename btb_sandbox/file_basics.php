<div class="row">
    <div class="large-6 medium-6 small-12 columns">
<h1 class="text-center">File Basics</h1>
<?php
include_once 'html5req.php';
/** Gives the location of the file_basics.php */
echo "<b>The location of this file is found in: </b>" . __FILE__ . "<br>";

/** Gets the line number of file_basics.php */
echo "<b>The current line number in the file is : </b>" . __LINE__ . "<br>";

echo "<b>The Directory of the file is : </b>" . dirname(__FILE__) . "<br>";
?>
	</div>
</div>