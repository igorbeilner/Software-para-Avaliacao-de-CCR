<?php
	$data->tabela = 'professor';
	switch($_GET['acao']){
		
		case 'gravar_professor':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
	
			
			$_POST['pro_nome'] = addslashes($_POST['pro_nome']);
			$_POST['pro_nome'] = mb_strtoupper($_POST['pro_nome'],'UTF-8');
			$array['pro_nome'] = $_POST['pro_nome'];
			$array['pro_cpf'] = addslashes($_POST['pro_cpf']);
			$array['pro_siape'] = addslashes($_POST['pro_siape']);		
			$array['pro_permissao'] = 2;	
			$data->add($array);
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
	}	
?>