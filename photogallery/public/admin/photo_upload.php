<?php
require_once '../../includes/initialize.php';
if (!$session->is_logged_in()) {
	redirect_to('login.php');
}
include_once '../layouts/admin-header.php';
$max_file_size = 1048576;
/**
 * Expressed in bytes
 * 1 KB = 1000 Bytes
 * 100 KB = 100000 Bytes
 * 1 MB = 1 * 10^6 Bytes
 * 10 MB = 1 * 10^7 Bytes
 */
/** Use to debug
//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";
**/

if (isset($_POST['submit'])) {
	$photo = new Photograph();
	$photo->caption = $_POST['caption'];
	$photo->attach_file($_FILES['file_upload']);
	if ($photo->save()) {
		/** Success */
		$message = "Photograph uploaded successfully";
	} else {
		/** Failure */
		$message = join("<br>", $photo->errors);
	}
}
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Photo Gallery</title>
		<link rel="stylesheet" href="../css/main.css">
	</head>
	<body>
		<form action="photo_upload.php" enctype="multipart/form-data" method="post">
			<div class="row">
				<div class="large-6 medium-6 small-12 columns">
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>">
					<input type="file" name="file_upload" id="file_upload" />
				</div>
				<br>
				<div class="large-6 medium-6 small-12 columns">
					<label>Caption</label><input type="text" name="caption" value="">
				</div>
				<div class="large-12 medium-12 small-12 columns">
					<input type="submit" class="button tiny radius round submit" name="submit" value="Upload">
				</div>
			</div>
		</form>
		<?php include_once '../layouts/footer.php';?>
</body>
</html>
