<?php
	$data->tabela = 'professor';
	switch($_GET['acao']){
		
		case 'gravar_professor':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
	
			
			$_POST['pro_nome'] = addslashes($_POST['pro_nome']);
			$_POST['pro_nome'] = mb_strtoupper($_POST['pro_nome'],'UTF-8');			
			$data->add($_POST);
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
	}	
?>