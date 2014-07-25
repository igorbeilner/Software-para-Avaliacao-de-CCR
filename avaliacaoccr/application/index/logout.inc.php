<?php
	session_start();
    $login = new Login();
	$login->logout();
	$_SESSION['logado'] = 0;
?>
