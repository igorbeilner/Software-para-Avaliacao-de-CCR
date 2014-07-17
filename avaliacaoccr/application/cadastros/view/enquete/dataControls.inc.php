<?php
	switch($_GET['acao']){
		
		case 'gravar_enquete':	

			echo "qtd: ".$_POST['qtd_perg'];

			$aux = explode("/", $_POST['enq_semestre']);
			$sem_ano = $aux[0];
			$sem_parte = $aux[1];

			$sql = 'select s.sem_id 
					from semestre as s 
					where sem_ano = '.$sem_ano.' and sem_parte = '.$sem_parte.'';

			$res = $data->find('dynamic', $sql);

			$semestre = $res[0]['sem_id'];

			// Tabela ENQUETE
			$data->tabela = 'enquete';						
			$_POST['enq_data']         = $utils->formatDate('/', $_POST['enq_data']); // Transformando data p/ gravar no banco			
			$array['enq_nome']         = addslashes($_POST['enq_nome']); // Retirando caracteres especiais (') p/ nao dar erro ao gravar no banco
			$array['enq_num_perg']     = $_POST['qtd_perg'];
			$array['enq_num_resp_esp'] = $_POST['enq_num_resp_esp'];
			$array['enq_semestre']     = $semestre;
			$array['enq_data']         = $_POST['enq_data'];												
			$array['enq_status']       = $_POST['enq_status'];															
			$data->add($array);
			
			// Tabela PERGUNTAS
			$data->tabela = 'perguntas';
			$qtd_nova = 0;
			$qtd_car = 0;
			$cod_car = Array();
			for($i=1; $i<=$_POST['total_perg']; $i++){
				// TEXTO
				if($_POST['per_desc_'.$i.'_texto'] != ""){
					$array_texto['per_desc'] = $_POST['per_desc_'.$i.'_texto'];
					$array_texto['per_tipo'] = $_POST['tipo_'.$i];
					$data->add($array_texto);
					$qtd_nova++;
				}
				// ESCALA
				if($_POST['per_desc_'.$i.'_escala'] != ""){
					$array_escala['per_desc'] = $_POST['per_desc_'.$i.'_escala'];
					$array_escala['per_tipo'] = $_POST['tipo_'.$i];
					$data->add($array_escala);
					$qtd_nova++;
				}

				// Perguntas do BANCO
				if($_POST['escala_ac_'.$i] != ""){ // Escala
					$cod = explode(" - ", $_POST['escala_ac_'.$i]);	
					array_push($cod_car, $cod[0]);
					$qtd_car++;

				}
				if($_POST['texto_ac_'.$i] != ""){ // Texto
					$cod = explode(" - ", $_POST['texto_ac_'.$i]);	
					array_push($cod_car, $cod[0]);
					$qtd_car++;
				}

			}

			// Código da enquete
			$sql = "SELECT MAX(enq_cod) AS enq_cod
					FROM enquete";
			$enq_cod = $data->find("dynamic", $sql);

			// Código das novas perguntas
			$sql = "SELECT per_cod
					FROM perguntas
					ORDER BY per_cod DESC
					LIMIT 0, ".$qtd_nova;
			$pergs_novas_cod = $data->find("dynamic", $sql);

			// Grava na tabela enquete_perguntas
			// Novas perguntas
			$data->tabela = "enquete_perguntas";
			for($i=0; $i< $qtd_nova; $i++){
				$array_ep['enq_cod'] = $enq_cod[0]['enq_cod'];		
				$array_ep['per_cod'] = $pergs_novas_cod[$i]['per_cod'];
				$data->add($array_ep);
			}
			// Perguntas carregadas
			for($i=0; $i< $qtd_car; $i++){
				$array_ep2['enq_cod'] = $enq_cod[0]['enq_cod'];		
				$array_ep2['per_cod'] = $cod_car[$i];
				$data->add($array_ep2);
			}





			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
	
	}	
?>