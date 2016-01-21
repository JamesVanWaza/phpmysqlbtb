<h1 class="text-center">File Reading</h1>
<?php 
	include_once ('html5req.php');
	$file = 'filetest.txt';
	if ($handle = fopen($file, 'r')) { //reads the file
		$content = fread($handle, 6); //The second argument reads the number of bytes. Each character is a byte.
		fclose($handle);
	}

	echo $content;
	echo "<br>";

	echo "<br>";
	echo nl2br($content);
	echo "<hr>";

	/** Use filesize() to read the whole file */
	$file = 'filesize.txt';
	if ($handle = fopen($file, 'r')) { //read the file
		$content = fread($handle, filesize($file));
		fclose($handle);
	}

	echo $content;
	echo "<br>";

	echo "<br>";
	echo nl2br($content);
	echo "<hr>";

	/**
	 * file_get_contents(): shortcut for fopen/fread/fclose
	 * 
	 * Companion to shortcut file_put_contents()
	 */
	$content = file_get_contents($file);
	echo $content;
	echo "<hr>";

	/** Incremental Reading */
	$file = 'filetest.txt';
	$content = "";
	if ($handle = fopen($file, 'r')) { //read
		while (!feof($handle)) {
			$content .= fgets($handle);	
		}
		fclose($handle);
		
	}
	echo $content;
	echo "<hr>";
?>