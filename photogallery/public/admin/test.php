<?php
require_once '../includes/initialize.php';
if (!$session->is_logged_in()) {
	redirect_to('login.php');
}
include_once '../public/layouts/admin-header.php';
?>
<?php
// $user = new User();
// $user->username = "johnsmith";
// $user->password = "abcd12345";
// $user->first_name = "John";
// $user->last_name = "Smith";

//$user = User::find_by_id(2);
//$user->delete();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Photo Gallery</title>
	<link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
	<div class="row">
		<div class="large-6 columns medium-6 columns small-12 columns">
			<header>
				<h2>Photo Gallery</h2>
			</header>
			<section id="main">
				<h3>Menu</h3>
			</section>
		</div>
	</div>
	<?php include_once '../public/layouts/footer.php';?>
</body>
</html>
