<?php
	switch($_GET['acao']){
		
		case 'gravar_alternativa':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
			if($_POST['op_peso']>100)	
			   $_POST['op_peso']=100;
			
			else if($_POST['op_peso']<0)	
				    $_POST['op_peso']=0;

			$data->tabela = 'opcoes';
			$array['op_desc'] = html_entity_decode(addslashes($_POST['op_desc']));			
			$array['op_peso'] = $_POST['op_peso'];		
			$data->add($array);
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
	}	
?>

<h2 style="text-align: center; margin-top:50px; width: 800px;">ALTERNATIVA CADASTRADA COM SUCESSO!</h2>