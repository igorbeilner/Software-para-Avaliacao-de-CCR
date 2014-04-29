<?php
	switch ($_GET['acao']) {

	//CADASTRO DO CARGO		
		case 'lista_professor':
			require_once 'application/cadastros/view/professor/listaProfessor.inc.php';
			break;
		
		case 'novo_cargo':
			require_once 'application/cadastros/view/cargo/frmCadCargo.inc.php';
			break;

		case 'editar_cargo':
			require_once 'application/cadastros/view/cargo/frmAltCargo.inc.php';
			break;
			
		case 'gravar_cargo':
			require_once 'application/cadastros/view/cargo/dataControls.inc.php';
			break;
		
		case 'update_cargo':
			require_once 'application/cadastros/view/cargo/dataControls.inc.php';
			break;	
			
		case 'delete_cargo':
			require_once 'application/cadastros/view/cargo/dataControls.inc.php';
			break;	

	//CADASTRO DA FUNÇÃO		
		case 'lista_funcao':
			require_once 'application/cadastros/view/funcao/listaFuncao.inc.php';
			break;
		
		case 'novo_funcao':
			require_once 'application/cadastros/view/funcao/frmCadFuncao.inc.php';
			break;

		case 'editar_funcao':
			require_once 'application/cadastros/view/funcao/frmAltFuncao.inc.php';
			break;
			
		case 'gravar_funcao':
			require_once 'application/cadastros/view/funcao/dataControls.inc.php';
			break;
		
		case 'update_funcao':
			require_once 'application/cadastros/view/funcao/dataControls.inc.php';
			break;	
			
		case 'delete_funcao':
			require_once 'application/cadastros/view/funcao/dataControls.inc.php';
			break;	

	//CADASTRO DO MUNICÍPIO
		case 'lista_municipio':
			require_once 'application/cadastros/view/municipio/listaMunicipio.inc.php';
			break;
		
		case 'novo_municipio':
			require_once 'application/cadastros/view/municipio/frmCadMunicipio.inc.php';
			break;

		case 'editar_municipio':
			require_once 'application/cadastros/view/municipio/frmAltMunicipio.inc.php';
			break;
			
		case 'gravar_municipio':
			require_once 'application/cadastros/view/municipio/dataControls.inc.php';
			break;
		
		case 'update_municipio':
			require_once 'application/cadastros/view/municipio/dataControls.inc.php';
			break;	
			
		case 'delete_municipio':
			require_once 'application/cadastros/view/municipio/dataControls.inc.php';
			break;	

	//CADASTRO DO USUÁRIO
		case 'lista_usuario':
			require_once 'application/cadastros/view/usuario/listaUsuario.inc.php';
			break;
		
		case 'novo_usuario':
			require_once 'application/cadastros/view/usuario/frmCadUsuario.inc.php';
			break;

		case 'editar_usuario':
			require_once 'application/cadastros/view/usuario/frmAltUsuario.inc.php';
			break;
			
		case 'gravar_usuario':
			require_once 'application/cadastros/view/usuario/dataControls.inc.php';
			break;
		
		case 'update_usuario':
			require_once 'application/cadastros/view/usuario/dataControls.inc.php';
			break;	
			
		case 'delete_usuario':
			require_once 'application/cadastros/view/usuario/dataControls.inc.php';
			break;	

			
	}
?>