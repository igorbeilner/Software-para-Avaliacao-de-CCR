<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
function __autoload($nomeClasse) {
	if (implode('/',explode('_',$nomeClasse))== 'FPDF'){
		require_once 'library/fpdf/'.implode('/',explode('_',$nomeClasse)).'.php';
	}else{
		require_once 'library/'.implode('/',explode('_',$nomeClasse)).'.php';
	}
}
 try {
    $factory = new Command_Factory();
    $factory->createCommand()->execute();
} catch (Exception_Pagenotfound $ep) {
    echo '<h1>ERRO 404 - Página não encontrada</h1>';
} catch (Exception $e) {
    echo '<h1>ERRO 500 - Erro na execução</h1>';
}
?>