<?php
require_once '../../includes/initialize.php';
require_once '../../includes/functions.php';
require_once '../../includes/session.php';
if (!$session->is_logged_in()) {
	redirect_to('login.php');
}
include_once '../layouts/admin-header.php';
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Photo Gallery</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<div class="row">
		<div class="large-6 columns medium-6 columns small-12 columns">
			<p>Welcome Logged in user</p>
		</div>
	</div>
	<nav>
		<ul>
			<li><a href="logfile.php">Log File</a></li>
		</ul>
	</nav>
	<?php include_once '../layouts/footer.php';?>
</body>
</html>
