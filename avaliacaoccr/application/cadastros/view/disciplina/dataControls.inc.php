<?php
	$data->tabela = 'disciplina';
	switch($_GET['acao']){
		
		case 'gravar_disciplina':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
	
			
			$_POST['dis_nome'] = addslashes($_POST['dis_nome']);
			$_POST['dis_nome'] = mb_strtoupper($_POST['dis_nome'],'UTF-8');		

			$ok = $data->add($_POST);
			if( $ok ){
				echo '<script>alert("DISCIPLINA JÁ ESTÁ CADASTRADA!")</script>';
			}
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
	}	

	if( $ok ){ ?>
		<h2 style="text-align: center; margin-top:50px; width: 800px;">DISCIPLINA CADASTRADA COM SUCESSO!</h2>
<?php } ?>
