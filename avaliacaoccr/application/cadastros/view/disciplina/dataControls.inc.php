<?php
	$data->tabela = 'disciplina';
	switch($_GET['acao']){
		
		case 'gravar_disciplina':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
	
			
			$_POST['dis_nome'] = addslashes($_POST['dis_nome']);
			$_POST['dis_nome'] = mb_strtoupper($_POST['dis_nome'],'UTF-8');		
			$data->add($_POST);
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
	}	
?>