<?php
	switch ($_GET['acao']) {
		case 'relatorios':
			require_once 'application/relatorios/view/relProfessor.inc.php';
			break;
			
		case 'adm':	
			require_once 'application/relatorios/view/relAdministrador.inc.php';
			break;	
			
		case 'professor_perguntas':	
			require_once 'application/relatorios/view/relProfessorPerguntas.inc.php';
			break;	
			
		case 'professor':	
			require_once 'application/relatorios/view/relProfessor.inc.php';
			break;	
			
		case 'professor_respostas':	
			require_once 'application/relatorios/view/relProfessorRespostas.inc.php';
			break;	
			
			
	}	
?>