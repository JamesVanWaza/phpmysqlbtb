<?php
require_once '../includes/initialize.php';
require_once '../includes/functions.php';
require_once '../includes/session.php';
if (!$session->is_logged_in()) {
    redirect_to('login.php');
}
include_once '../public/layouts/admin-header.php';
include_once '../public/admin/layouts/admin-header.php';
?>
<div class="row">
	<div class="large-6 columns medium-6 columns small-12 columns">
		<p>Welcome Logged in user</p>
	</div>
</div>
<nav>
	<ul class="side-nav">
		<li><a href="logfile.php">Log File</a></li>
	</ul>
</nav>
	<?php include_once '../public/layouts/footer.php';?>
	<?php include_once '../public/admin/layouts/footer.php';?>