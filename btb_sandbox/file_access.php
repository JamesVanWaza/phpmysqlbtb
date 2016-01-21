<?php 
	/** See http://php.net/manual/en/function.fopen.php */
	$file = 'filetest.txt';
	if ($handle = fopen($file, 'w')) {
		fclose($handle);
	} else {
		echo "Could not open file for writing";
	}
?>