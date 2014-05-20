<?php
switch ($_GET['acao']) {
	case 'listRelGeral':
		require_once 'application/relatorios/view/listRelGeral.inc.php';
		break;
}

?>