<?php
	switch ($_GET['acao']) {
		case 'enquetes':
			require_once 'application/enquetes/view/enquete.php';
			break;

		case 'process':
			require_once 'application/enquetes/view/process.php';
			break;
			
	}	
?>