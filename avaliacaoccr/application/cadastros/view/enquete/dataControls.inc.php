<?php
	switch($_GET['acao']){
		
		case 'gravar_enquete':	

			echo "qtd: ".$_POST['qtd_perg'];

			// Tabela ENQUETE
			$data->tabela = 'enquete';						
			$_POST['enq_data']         = $utils->formatDate('/', $_POST['enq_data']); // Transformando data p/ gravar no banco			
			$array['enq_nome']         = addslashes($_POST['enq_nome']); // Retirando caracteres especiais (') p/ nao dar erro ao gravar no banco
			$array['enq_num_perg']     = $_POST['qtd_perg'];
			$array['enq_num_resp_esp'] = $_POST['enq_num_resp_esp'];
			$array['enq_semestre']     = $_POST['enq_semestre'];
			$array['enq_data']         = $_POST['enq_data'];												
			$array['enq_status']       = $_POST['enq_status'];															
			$data->add($array);
			
			// Tabela PERGUNTAS
			$data->tabela = 'perguntas';
			for($i=1; $i<=$_POST['total_perg']; $i++){
				// TEXTO
				if($_POST['per_desc_'.$i.'_texto'] != ""){
					$array_texto['per_desc'] = $_POST['per_desc_'.$i.'_texto'];
					$array_texto['per_tipo'] = $_POST['tipo_'.$i];
					$data->add($array_texto);
				}
				// ESCALA
				if($_POST['per_desc_'.$i.'_escala'] != ""){
					$array_escala['per_desc'] = $_POST['per_desc_'.$i.'_escala'];
					$array_escala['per_tipo'] = $_POST['tipo_'.$i];
					$data->add($array_escala);
				}



			}






			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
	
	}	
?>