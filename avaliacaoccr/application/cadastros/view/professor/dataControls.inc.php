<?php
	$data->tabela = 'professor';
	switch($_GET['acao']){
		
		case 'gravar_professor':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
	
			$sql="SELECT * FROM professor";
			$result=$data->find('dynamic',$sql);
			$_POST['pro_nome'] = addslashes($_POST['pro_nome']);
			$_POST['pro_nome'] = mb_strtoupper($_POST['pro_nome'],'UTF-8');
			$array['pro_nome'] = $_POST['pro_nome'];
			$array['pro_cpf'] = addslashes($_POST['pro_cpf']);
			$array['pro_siape'] = addslashes($_POST['pro_siape']);		
			$array['pro_permissao'] = 1;	
			$existe=false;
			for($i = 0 ; $i < count($result) ; $i++){
				if($result[$i]['pro_cpf']==$array['pro_cpf']||$result[$i]['pro_siape']==$array['pro_siape'])
					$existe=true;
			};
			if(!$existe)
				$ok = $data->add($array);
			else
				$ok = $data->update($array);
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
	}	
?>
<?php if( $ok ) { ?>
	<h2 style="text-align: center; margin-top:50px; width: 800px;">PROFESSOR CADASTRADO COM SUCESSO!</h2>
<?php
	} 
	else{ 
		echo '<script>alert("PROFESSOR JÁ ESTÁ CADASTRADO!")</script>';
	}
?>