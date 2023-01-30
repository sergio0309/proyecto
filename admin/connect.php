<?php
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_HOST','localhost');
	define('DB_NAME','kingsfields_database');
	
	$connection = mysqli_connect('localhost', 'root', '');
	if(!$connection) {
		echo "Database connection failed.";
	}
	$dbselect  = mysqli_select_db($connection,'kingsfields_database');
	if(!$dbselect) {
		echo "Database selection failed.";
	}
?>