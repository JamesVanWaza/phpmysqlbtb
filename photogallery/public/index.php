<?php

/**
 * Commented out because it is not required, see the __autoload function
 * require_once ('../includes/functions.php');
 */

require_once '../includes/database.php';
require_once '../includes/user.php';
include_once 'layouts/admin-header.php';
?>
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
    <?php
$user = User::find_by_id(1);
echo $user->full_name();

echo "<hr>";

$users = User::find_all();
foreach ($users as $user) {
	echo "User: " . $user->username . "<br>";
	echo "Name: " . $user->full_name() . "<br /><br />";
}
?>
  </div>
</div>
<?php include_once 'layouts/footer.php';?>
