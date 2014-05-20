<?php
	$data->tabela = 'cargo';
	switch($_GET['acao']){
		
		case 'gravar_cargo':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
			$_POST['car_descricao'] = addslashes($_POST['car_descricao']);
			$Array['car_descricao'] = $_POST['car_descricao'];
			// Tudo Maiusculo
			$Array['car_descricao'] = mb_strtoupper($_POST['car_descricao'],'UTF-8');
			$data->add($Array);
			echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
		case 'update_cargo':
			$Array['car_codigo'] = $_POST['car_codigo'];
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
			$_POST['car_descricao'] = addslashes($_POST['car_descricao']);
			$Array['car_descricao'] = $_POST['car_descricao'];
			// Tudo Maiusculo
			$Array['car_descricao'] = mb_strtoupper($_POST['car_descricao'],'UTF-8');			
			$data->update($Array);
			echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;		
		
		case 'delete_cargo':
			$Array['car_codigo'] = $_POST['car_codigo'];
			$data->delete($Array);
			echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;		
	}	
?>