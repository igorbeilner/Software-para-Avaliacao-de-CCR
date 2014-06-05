<?php
	switch($_GET['acao']){
		
		case 'gravar_enquete':			
			$data->tabela = 'enquete';	
					
			$_POST['enq_data']         = $utils->formatDate('/', $_POST['enq_data']); // Transformando data p/ gravar no banco
			$array['enq_nome']         = addslashes($_POST['enq_nome']); // Retirando caracteres especiais (') p/ nao dar erro ao gravar no banco
			$array['enq_num_perg']     = $_POST['enq_num_perg'];
			$array['enq_num_resp_esp'] = $_POST['enq_num_resp_esp'];
			$array['enq_semestre']     = $_POST['enq_semestre'];
			$array['enq_data']         = $_POST['enq_data'];												
			$array['enq_status']       = $_POST['enq_status'];															
			$data->add($array);
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
	
	}	
?>