<?php
	include('config.php');

	$google_client->revokeToken();

	session_destroy();

	header('index.php');
?>