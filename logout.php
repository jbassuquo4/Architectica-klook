<?php
	include_once 'config/init.php';
	if (isset($_GET['action']) && $_GET['action'] == logout) {
		session_unset();
		session_destroy();
		redirect('login-page.php');
	}

?>