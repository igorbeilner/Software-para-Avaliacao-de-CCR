<?php
	switch ($_GET['acao']) {

	//CADASTRO DO CARGO		
		case 'professor':
			require_once 'application/relatorios/view/relProfessor.php';
			break;
			
		case 'lista_professor':
			require_once 'application/cadastros/view/professor/listaProfessor.inc.php';
			break;
		
		case 'nova_enquete':
			require_once 'application/cadastros/view/enquete/cadEnquete.inc.php';
			break;
		case 'cadastra_professor':
			require_once 'application/cadastros/view/professor/cadProfessor.inc.php';
			break;

		case 'gravar_enquete':
			require_once 'application/cadastros/view/enquete/dataControls.inc.php';
			break;
	}
?>