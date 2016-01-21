<h1 class="text-center">File Directory</h1>
<?php 
	include_once 'html5req.php';
	/** getcwd(): Current Working Directory */
	echo "<b>The Current Directory is: </b>". getcwd() . "<br>";

	/** mkdir(); Creates a new directory */ 
	//mkdir('new', '0777'); //0777 gives all permissions for creating the directory.

	/** Recursive directory creation */
	//mkdir('newdir/test/test2', 0777, true);
	
	
	/** Changing Directory */
	//chdir('newdir');
	
	/** Removing a directory */
	rmdir('new');
?>