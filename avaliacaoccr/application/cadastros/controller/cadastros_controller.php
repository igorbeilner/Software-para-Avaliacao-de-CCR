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

		case 'cadastra_disciplina':
			require_once 'application/cadastros/view/disciplina/cadDisciplina.inc.php';
			break;	

		case 'cadastra_alternativa':
			require_once 'application/cadastros/view/alternativa/cadAlternativa.inc.php';
			break;		
		
		case 'gravar_professor':
			require_once 'application/cadastros/view/professor/dataControls.inc.php';
			break;			
		
		case 'gravar_disciplina':
			require_once 'application/cadastros/view/disciplina/dataControls.inc.php';
			break;	

		case 'gravar_alternativa':
			require_once 'application/cadastros/view/alternativa/dataControls.inc.php';
			break;			
		
		case 'gravar_enquete':
			require_once 'application/cadastros/view/enquete/dataControls.inc.php';
			break;

		case 'gravar_enquete_importada':
			require_once 'application/cadastros/view/enquete/importDataControls.inc.php';
			break;

		case 'gravar_enquete_editada':
			require_once 'application/cadastros/view/enquete/editDataControls.inc.php';
			break;

		case 'import_enquete':
			require_once 'application/cadastros/view/enquete/importEnquete.inc.php';
			break;

		case 'editar_enquete':
			require_once 'application/cadastros/view/enquete/editEnquete.inc.php';
			break;

		case 'excluir_enquete':
			require_once 'application/cadastros/view/enquete/excluirEnquete.inc.php';
	}
?>