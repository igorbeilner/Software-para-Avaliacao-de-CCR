<?php
	switch($_GET['acao']){

		case 'gravar_enquete':

			//echo "qtd: ".$_POST['qtd_perg']."<br />";
			//echo "vetor: ".$_POST['perg_alter']."<br />";


			//echo "vetor: ".$_POST['perg_alter_novo'];
			$num_enq = $_POST['qtd_pd'];

			//Grava as informações das enquetes no banco

			$aux = explode("/", $_POST['enq_semestre']);
			$sem_ano = $aux[0];
			$sem_parte = $aux[1];

			$sql = 'select s.sem_id
					from semestre as s
					where sem_ano = '.$sem_ano.' and sem_parte = '.$sem_parte.'';

			$res = $data->find('dynamic', $sql);

			$semestre = $res[0]['sem_id'];

			#data de inicio
			$_POST['enq_data'] = $utils->formatDate('/', $_POST['enq_data']); // Transformando data p/ gravar no banco
			#data de fim
			$_POST['enq_data_fim'] = $utils->formatDate('/', $_POST['enq_data_fim']);

			for ($m = 0; $m < $num_enq; $m++){

				// Tabela ENQUETE
				$data->tabela = 'enquete';
				$array['enq_nome']         = addslashes($_POST['enq_nome']); // Retirando caracteres especiais (') p/ nao dar erro ao gravar no banco
				$array['enq_num_perg']     = $_POST['qtd_perg'];
				$array['enq_num_resp_esp'] = $_POST['enq_num_resp_esp'];
				$array['enq_semestre']     = $semestre;
				$array['enq_data']         = $_POST['enq_data'];
				$array['enq_data_fim']     = $_POST['enq_data_fim'];
				$array['enq_status']       = $_POST['enq_status'];
				$array['enq_num_resp'] 	   = 0;
				$data->add($array);
			}

			// Tabela PERGUNTAS
			$data->tabela = 'perguntas';
			$qtd_nova = 0;
			$qtd_car = 0;
			$cod_car = Array();
			for($i=1; $i<=$_POST['total_perg']; $i++){
				// TEXTO
				if($_POST['per_desc_'.$i.'_texto'] != ""){
					$array_texto['per_desc'] = $_POST['per_desc_'.$i.'_texto'];
					$array_texto['per_tipo'] = $_POST['text_tipo_'.$i];
					$data->add($array_texto);
					$qtd_nova++;
				}
				// ESCALA
				if($_POST['per_desc_'.$i.'_escala'] != ""){
					$array_escala['per_desc'] = $_POST['per_desc_'.$i.'_escala'];
					$array_escala['per_tipo'] = $_POST['escala_tipo_'.$i];
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

			if ($qtd_nova > 0){
				// Código das enquetes
				// Código das novas perguntas
				$sql = "SELECT enq_cod
						FROM enquete
						ORDER BY enq_cod DESC
						LIMIT 0,".$num_enq;
				$enqs = $data->find("dynamic", $sql);

				// Código das novas perguntas
				$sql = "SELECT per_cod
						FROM perguntas
						ORDER BY per_cod DESC
						LIMIT 0, ".$qtd_nova;
				$pergs_novas_cod = $data->find("dynamic", $sql);

				//Relaciona as perguntas com as enquetes
				$data->tabela = "enquete_perguntas";
				for ($i = 0; $i < count($enqs); $i++){
					// Grava na tabela enquete_perguntas
					// Novas perguntas
					for($j=$qtd_nova - 1; $j >= 0; $j--){
						$array_ep['enq_cod'] = $enqs[$i]['enq_cod'];
						$array_ep['per_cod'] = $pergs_novas_cod[$j]['per_cod'];
						$data->add($array_ep);
					}
					// Perguntas carregadas
					for($j=$qtd_car - 1; $j >= 0; $j--){
						$array_ep2['enq_cod'] = $enqs[$i]['enq_cod'];
						$array_ep2['per_cod'] = $cod_car[$j];
						$data->add($array_ep2);
					}
				}

				// Grava na tabela perguntas_opcoes
				//echo "<br/>qtd_nova: ".$qtd_nova;
				$sql = "SELECT per_cod
						FROM perguntas
						WHERE per_tipo = 1
						ORDER BY per_cod DESC
						LIMIT 0, ".$qtd_nova;
				$pergs_novas_escala = $data->find("dynamic", $sql);

				$indice = 0;
				$aux1 = explode (',', $_POST['perg_alter']);

				$data->tabela = 'perguntas_opcoes';
				for($j = sizeof($aux1) - 1; $j >= 0; $j--){
					$aux = explode('_', $aux1[$j]);
					$perg = $aux[0];
					$alter = $aux[1];
					$aux = explode('_', $aux1[$j-1]);
					$next_perg = $aux[0];

					$array_per_opc['per_cod'] = $pergs_novas_escala[$indice]['per_cod'];
					$array_per_opc['op_cod'] = $alter;
					$data->add($array_per_opc);

					if ($perg != $next_perg) $indice++;
				}
			}

			$array_pd = Array();

			$indice = 0;
			$data->tabela = "enq_disc_prof";
			for ($i = 0; $i < 20; $i++){
				if (isset($_POST['pro_'.$i]) && isset($_POST['disc_'.$i])){
					$array_pd[$indice] = array($_POST['pro_'.$i], $_POST['disc_'.$i]);
					$indice++;
					///gravar na tabela enq_prof_disc
				}
			}

			echo '<h2 style="text-align: center; margin-top:50px; width: 800px;">ENQUETE GRAVADA COM SUCESSO!</h2>';

			echo "<div class='linha'>";
			echo "<div class='coluna' style='width: 800px; font-weight:bold; margin-bottom: 20px;'>Links para as enquetes:</div>";
			for ($i = 0; $i < count($enqs); $i++){
				echo "<div class='coluna' style='width: 800px;'>";
					$urlExplode = explode('?',$_SERVER["REQUEST_URI"]);
					echo 'http://' . $_SERVER['HTTP_HOST']  .  $urlExplode[0]  ."enquete-".$enqs[$i]['enq_cod'];
				echo "</div>";
				$array_edp['enq_cod'] = $enqs[$i]['enq_cod'];
				$array_edp['pro_cod'] = $_POST['pro_'.$i];
				$array_edp['dis_cod'] = $_POST['disc_'.$i];
				$data->add($array_edp);
			}
			echo "</div>";

		break;
	}
?>
