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
<<<<<<< HEAD
		case 'cadastra_disciplina':
			require_once 'application/cadastros/view/disciplina/cadDisciplina.inc.php';
			break;		
		case 'gravar_professor':
			require_once 'application/cadastros/view/professor/dataControls.inc.php';
			break;			
		case 'gravar_disciplina':
			require_once 'application/cadastros/view/disciplina/dataControls.inc.php';
			break;			
=======

		case 'gravar_enquete':
			require_once 'application/cadastros/view/enquete/dataControls.inc.php';
			break;
>>>>>>> 3b9beb33e0cf81baa87c349fe25387e8908ba424
	}
?>