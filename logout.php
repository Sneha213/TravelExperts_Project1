<?php
	session_start();
	$_SESSION = Array();
	header('Location: login.php');
?>