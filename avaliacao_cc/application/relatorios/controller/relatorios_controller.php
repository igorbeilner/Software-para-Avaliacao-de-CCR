<?php
	switch ($_GET['acao']) {
		case 'geral':
			require_once 'application/relatorios/view/frmRelGeral.inc.php';
			break;
			
		case 'solicitacao':	
			require_once 'application/relatorios/view/frmSolicitacao.inc.php';
			break;	
	}	
?>