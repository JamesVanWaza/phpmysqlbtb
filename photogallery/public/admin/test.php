<?php 
	require_once ('../../includes/initialize.php');
	if (!$session->is_logged_in()) {
		redirect_to('login.php');
	}
	include_once ('../layouts/admin-header.php');
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
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<div class="row">
		<div class="large-6 columns medium-6 columns small-12 columns">
			<header id="header">
				<h1>Photo Gallery</h1>
			</header>
			<section id="main">
				<h2>Menu</h2>
			</section>
		</div>
	</div>
	<?php include_once ('../layouts/admin-footer.php'); ?>
</body>
</html>