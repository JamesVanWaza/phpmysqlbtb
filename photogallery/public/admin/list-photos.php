<?php
require_once '../../includes/initialize.php';
require_once '../../includes/functions.php';
require_once '../../includes/session.php';
if (!$session->is_logged_in()) {
	redirect_to('login.php');
}
include_once '../layouts/admin-header.php';

/** Find all the photos */
$photos = Photograph::find_all();
?>
<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Filename</th>
            <th>Caption</th>
            <th>Size</th>
            <th>Type</th>
        </tr>
    </thead>
    <?php foreach ($photos as $photo): ?>
		<tr>
			<td><img src="../<?php echo $photo->image_path(); ?>" alt="" width="100"></td>
			<td><?php echo $photo->filename(); ?></td>
			<td><?php echo $photo->caption(); ?></td>
			<td><?php echo $photo->size > 1024 ? round($photo->size / 1024) . 'KB' : $photo->size . " bytes"; ?></td>
			<td><?php echo $photo->type(); ?></td>
		</tr>
    <?php endforeach;?>
</table>
<br>
<i class="fa fa-picture-o" aria-hidden="true"></i> <a href="photo_upload.php">Upload a new photograph</a>
<?php include_once '../layouts/footer.php';?>