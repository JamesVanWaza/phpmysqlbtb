<h1 class="text-center">File Names in the Current Directory</h1>
<p>List of file names in the current directory</p>
<?php 
	include_once 'html5req.php';
	/** the . is the current directory */
	$dir = ".";
	if (is_dir($dir)) {
		if ($dir_handle = opendir($dir)) {
			echo "<ol>";
			while ($filename = readdir($dir_handle)) {
				echo "<li>Filename: " .$filename. "</li>";
			}
			echo "</ol>";
			closedir($dir_handle);
		}
	}
	?>
	</div>
	<div class="row">
		<div class="large-6 medium-6 small-12 columns">
			<p>The filenames without the (..) from the directory</p>
				<?php
					/**
					 * Scandir(): reads all filenames into an array
					 * the Stripos - Removes the files with the .directory
					 */
					if (is_dir($dir)) {
					$dir_array = scandir($dir);
					echo "<ol>";
					foreach ($dir_array as $file) {
				?>
				<li>
					<?php
						if (stripos($file, '.')) {
							echo "filename: {$file} <br>";
						}
					?>
				</li>
				<?php
					}
			echo "</ol>";
		}
				?>
		</div>
	</div>
	

	