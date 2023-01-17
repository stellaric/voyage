<?php
require('../sources/config.php');
?>
<?php
	session_start();
	session_destroy();
	header('Location:../index.php');
?>