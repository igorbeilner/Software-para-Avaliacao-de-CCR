<?php
	switch ($_GET['acao']) {
		case 'professor':
			require_once 'application/relatorios/view/relProfessor.inc.php';
			break;
			
		case 'adm':	
			require_once 'application/relatorios/view/relAdministrador.inc.php';
			break;	
	}	
?>