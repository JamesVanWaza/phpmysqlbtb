<?php
function strip_zeros_from_date($marked_string = "") {
	//remove the marked zeros
	$no_zeros = str_replace('*0', '', $marked_string);

	//remove any remaining marks
	$cleaned_string = str_replace('*', '', $no_zeros);
	return $cleaned_string;
}

function redirect_to($location = null) {
	if ($location != null) {
		header("Location: {$location}");
		exit();
	}
}

function output_message($message = "") {
	if (!empty($message)) {
		return "<p class=\"message\">{$message}</p>";
	} else {
		return "";
	}
}

/** The function is used to load the class when the required user.php is either missing */
function __autoload($class_name) {
	$class_name = strtolower($class_name);

	$path = "../includes/{$class_name}.php";
	if (file_exists($path)) {
		require_once '$path';
	} else {
		die("The file {$class_name}.php could not be found");
	}
}

function log_action($action, $message = "") {
	$logfile = SITE_ROOT . DS . 'logs' . DS . 'log.txt';
	$new = file_exists($logfile) ? false : true;
	if ($handle = fopen($logfile, 'a')) {
		/** append */
		$timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
		$content = "{$timestamp} | {$action} : {$message}\n ";
		fwrite($handle, $content);
		fclose($handle);
		if ($new) {
			# code...
		} else {
			# code...
		}
	}
}