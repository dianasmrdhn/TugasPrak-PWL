<?php
	require_once 'vendor/autoload.php';

	$google_client = new google_client();
	
	$google_client->setClientId('449697252011-3ene0le99uad11bqs178i2tet5iebrdi.apps.googleusercontent.com');
	$google_client->setClientSecret('7wtC9-qKZaKllwLvGwUk_aoT');
	$google_client->setRedirectUri('http://localhost/Tugas-PWL/index.php');
	$google_client->addScope('email');
	$google_client->addScope('profile');

	session_start();
?>