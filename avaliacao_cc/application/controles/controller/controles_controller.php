<?php
	switch ($_GET['acao']) {

		// ATIVAR CARGOS DO MUNICÍPIO

		// Seleciona o municipio p ativar o cargo (adm)
		case 'ativa_cargo':
			require_once 'application/controles/view/municipio_cargo/AtivaMunicipioCargo.inc.php';
			break;
		
		// Seleciona os cargos para o município
		case 'ativa_cargo_seleciona':
			require_once 'application/controles/view/municipio_cargo/AtivaCargoSeleciona.inc.php';
			break;

		case 'ativa_cargo_salario':
			require_once 'application/controles/view/municipio_cargo/AtivaCargoSalario.inc.php';
			break;

		case 'grava_cargo_salario_funcao':
			require_once 'application/controles/view/municipio_cargo/dataControls.inc.php';
			break;

		case 'edita_cargo_seleciona':
			require_once 'application/controles/view/municipio_cargo/AltCargoSeleciona.inc.php';
			break;

		case 'altera_cargo_salario':
			require_once 'application/controles/view/municipio_cargo/AltCargoSalario.inc.php';
			break;

		case 'update_cargo_salario_funcao':
			require_once 'application/controles/view/municipio_cargo/dataControls.inc.php';
			break;
			
		// REAJUSTE
		case 'municipio_reajuste':
			require_once 'application/controles/view/reajuste/selecionaMunicipio.inc.php';
			break;
	
		case 'insere_reajuste':
			require_once 'application/controles/view/reajuste/reajusta.inc.php';
			break;
			
		case 'grava_reajuste':
			require_once 'application/controles/view/reajuste/dataControls.inc.php';
			break;	
			
	}
?>