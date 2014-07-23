<?php
	switch($_GET['acao']){
		
		case 'gravar_alternativa':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
			
			$data->tabela = 'opcoes';
			$array['op_desc'] = $_POST['op_desc'];		
			$data->add($array);
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
	}	
?>