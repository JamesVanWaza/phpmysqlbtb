<?php
require_once '../../includes/initialize.php';
if ($session->is_logged_in()) {
	redirect_to("index.php");
}

/** Remember to give your form's submit tag a name="submit" attribute! */
if (isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	/** Check database to see if username/password exists */
	$found_user = User::authenticate($username, $password);

	if ($found_user) {
		$session->login($found_user);
		redirect_to('index.php');
	} else {
		/** Username/password combo was not found in the database */
		$message = "Username/password combination incorrect.";
	}
} else {
	/** Form has not been submitted */
	$username = "";
	$password = "";
}

include_once 'html5req.php';
?>
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<header id="header">
				<h1 class="text-center">Photo Gallery</h1>
			</header>
			<section id="main">
				<h2 class="text-center">Staff Login</h2>
			</section>
		</div>
	</div>
	<form action="login.php" method="post">
	  <div class="row">
	    <div class="large-6 medium-6 small-12 columns">
	      <label>Username
	        <input type="text" name="username" value="<?php echo htmlentities($username); ?>" />
	      </label>
	    </div>

	    <div class="large-6 medium-6 small-12 columns">
	      <label>Password
	        <input type="password" name="password" value="<?php echo htmlentities($password); ?>" />
	      </label>
	    </div>


		<div class="large-12 medium-12 small-12 columns">
			<button class="tiny radius" name="submit">Submit</button>
		</div>
	  </div>
	</form>

<?php
if (isset($database)) {
	$database->close_connection();
}
?>