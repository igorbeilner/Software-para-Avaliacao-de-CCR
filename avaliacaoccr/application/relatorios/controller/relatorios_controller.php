<?php
	switch ($_GET['acao']) {
		case 'rel_professor':
			require_once 'application/relatorios/view/relProfessor.inc.php';
			break;
			
		case 'professor_perguntas':	
			require_once 'application/relatorios/view/relProfessorPerguntas.inc.php';
			break;	
			
		case 'professor_respostas':	
			require_once 'application/relatorios/view/relProfessorRespostas.inc.php';
			break;
			
		case 'rel_adm':	
			require_once 'application/relatorios/view/relAdministrador.inc.php';
			break;	
			
		case 'adm_perguntas':
			require_once 'application/relatorios/view/relAdministradorPerguntas.inc.php';
			break;	
			
			
		case 'adm_respostas':
			require_once 'application/relatorios/view/relAdministradorRespostas.inc.php';
			break;	
			
	}	
?>