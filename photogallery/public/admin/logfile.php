<?php
require_once '../../includes/initialize.php';
if (!$session->is_logged_in()) {
	redirect_to('login.php');
}
include_once '../layouts/admin-header.php';
?>