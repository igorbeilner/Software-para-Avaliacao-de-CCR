<?php
	switch($_GET['acao']){
		
		case 'gravar_enquete_importada':	
		//Esta importação de enquete sera substituida por edição de enquete!!!!
			$qtd_enq = $_POST['enqimp_qtd_pd'];
			$aux = explode("/", $_POST['enqimp_semestre']);
			$sem_ano = $aux[0];
			$sem_parte = $aux[1];
			$sql = 'select s.sem_id 
					from semestre as s 
					where sem_ano = '.$sem_ano.' and sem_parte = '.$sem_parte.'';

			$res = $data->find('dynamic', $sql);

			$semestre = $res[0]['sem_id'];

			$qtd_pergs_imp = $_POST['enqimp_qtd_perg_imp'];
			$qtd_pergs_nova = $_POST['enqimp_qtd_perg'];
			$total_pergs = $qtd_pergs_imp + $qtd_pergs_nova;

			$_POST['enqimp_data']         = $utils->formatDate('/', $_POST['enqimp_data']); // Transformando data p/ gravar no banco		

			// Tabela ENQUETE
			$data->tabela = 'enquete';		

			for ($m = 0; $m < $qtd_enq; $m++){				
				if($m==0&&isset($_POST['enqimp_enq_cod'])){
				// este if é para não importar e editar enquetes não selecionadas
					$array['enq_cod']		   = $_POST['enqimp_enq_cod'];
					$array['enq_nome']         = addslashes($_POST['enqimp_enq_nome']); // Retirando caracteres especiais (') p/ nao dar erro ao gravar no banco
					$array['enq_num_perg']     = $total_pergs;
					$array['enq_num_resp_esp'] = $_POST['enqimp_resp_esp'];
					$array['enq_semestre']     = $semestre;
					$array['enq_data']         = $_POST['enqimp_data'];												
					$array['enq_status']       = $_POST['enqimp_status'];	
					$array['enq_num_resp']     = 0;																
					$data->update($array);
				}
				else{
					$array['enq_nome']         = addslashes($_POST['enqimp_enq_nome']); // Retirando caracteres especiais (') p/ nao dar erro ao gravar no banco
					$array['enq_num_perg']     = $total_pergs;
					$array['enq_num_resp_esp'] = $_POST['enqimp_resp_esp'];
					$array['enq_semestre']     = $semestre;
					$array['enq_data']         = $_POST['enqimp_data'];												
					$array['enq_status']       = $_POST['enqimp_status'];	
					$array['enq_num_resp']     = 0;																
					$data->add($array);
				}
			}
			unset($array);
			$sql = "SELECT enq_cod 
					FROM enquete 
					ORDER BY enq_cod DESC
					LIMIT 0,".$qtd_enq-1;
			$enqs=array();
			if(isset($_POST['enqimp_enq_cod']))
				$enqs[0]['enq_cod']=$_POST['enqimp_enq_cod'];
			if($qtd_enq>1)	//se Tiver mais de um professor/disciplina vai criar mais codigo de enquete.
				array_push($enqs,$data->find('dynamic',$sql));
			// Tabela PERGUNTAS
			$data->tabela = 'perguntas';
			$qtd_nova = 0;
			$qtd_car = 0;
			$cod_car = Array();
			$sql = "SELECT * 
					FROM perguntas 
					NATURAL JOIN enquete_perguntas
					WHERE per_tipo=0";
			$perguntas_texto = $data->find('dynamic',$sql);
			$sql = "SELECT * 
					FROM perguntas
					NATURAL JOIN enquete_perguntas
					WHERE per_tipo=1";
			$perguntas_escala = $data->find('dynamic',$sql);
			$perguntas_ativas=array();
			$indice_perguntas=0;
			$existe=false;
			for($i=1; $i<=$_POST['enqimp_total_perg']; $i++){
				// TEXTO

				if($_POST['enqimp_nova_per_desc_'.$i.'_texto'] != ""){
					$existe=false;
					$array_texto['per_cod']  = $_POST['enqimp_nova_per_cod'.$i];
					$array_texto['per_desc'] = $_POST['enqimp_nova_per_desc_'.$i.'_texto'];
					$array_texto['per_tipo'] = $_POST['enqimp_nova_text_tipo_'.$i];
					if(isset($array_texto['per_cod'])) {
						for ($p=0; $p < count($perguntas_texto); $p++) { 
							if($perguntas_texto[$p]['per_cod']==$array_texto['per_cod']){
								$existe=true;
								break;
							};
						};
					}
					if($existe){
						$perguntas_ativas[$indice_perguntas]=$perguntas_texto[$p]['per_cod'];
						//$array_texto[$i]['per_cod']=$perguntas_texto[$p]['per_cod'];
						//$data->update($array_texto);
						$indice_perguntas++;
					}
					else
						$data->add($array_texto);	
					$qtd_nova++;
				}
				// ESCALA
				if($_POST['enqimp_nova_per_desc_'.$i.'_escala'] != ""){
					$existe=false;
					$array_escala['per_cod']  = $_POST['enqimp_nova_per_cod'.$i];
					$array_escala['per_desc'] = $_POST['enqimp_nova_per_desc_'.$i.'_escala'];
					$array_escala['per_tipo'] = $_POST['enqimp_nova_escala_tipo_'.$i];
					for ($p=0; $p < count($perguntas_escala); $p++) { 
						if($perguntas_escala[$p]['per_cod']==$array_escala['per_cod']){
							$existe=true;
							break;
						};
					}
					if($existe){
						$perguntas_ativas[$indice_perguntas]=$perguntas_escala[$p]['per_cod'];
						//$array_escala['per_cod']=$perguntas_escala[$p]['per_cod'];
						//$data->update($array_escala);
						$indice_perguntas++;
					}
					else
						$data->add($array_escala);
					$qtd_nova++;
				}

				// Perguntas do BANCO
				if($_POST['enqimp_nova_escala_ac_'.$i] != ""){ // Escala
					$cod = explode(" - ", $_POST['enqimp_nova_escala_ac_'.$i]);	
					array_push($cod_car, $cod[0]);
					$qtd_car++;

				}
				if($_POST['enqimp_nova_texto_ac_'.$i] != ""){ // Texto
					$cod = explode(" - ", $_POST['enqimp_nova_texto_ac_'.$i]);	
					array_push($cod_car, $cod[0]);
					$qtd_car++;
				}

			}

			if ($qtd_nova > 0){
				// Código da enquete está na variavel    $enqs a enquete atual no [0] e as outras estão 
				//Grava as perguntas importads junto com a enquete na tabela enquete_perguntas
				$data->tabela = "enquete_perguntas";
				$total = $_POST['enqimp_total_imp'];
				unset($array);
				$array=array();
				$array_import_text=array();
				for ($j = 0; $j < count($enqs); $j++){
					for ($i = 0; $i < $total; $i++){
						//echo "<br/>i = ".$i;
						if (isset($_POST['enqimp_per_desc_'.$i.'_escala'])){
							$array['per_cod'] = $_POST['escala_per_cod_'.$i];
							$array['enq_cod'] = $enqs[$j]['enq_cod'];
							$data->add($array);
						}

						if (isset($_POST['enqimp_per_desc_'.$i.'_texto'])){
							$array_import_text['per_cod'] = $_POST['texto_per_cod_'.$i];
							$array_import_text['enq_cod'] = $enqs[$j];
							$data->add($array_import_text);
						}
					}
				}
				unset($array_import_text);
				unset($array);
				$sql = "SELECT *
						FROM perguntas
						NATURAL JOIN enquete_perguntas
						WHERE enq_cod=".$enqs[0];
				$perguntas_delete = $data->find('dynamic',$sql);
				$Deletar=array();
				for( $i = 0 ; $i < count($perguntas_delete) ; $i++ ) {
					$set=false;
					for( $h = 0 ; $h < $indice_perguntas; $h++ ) {
						if($perguntas_delete[$i]['per_cod']==$perguntas_texto[$h]['per_cod']&&$set==false){
							$Deletar[$i]=$h;
							$set=true;
						}
						else if($perguntas_delete[$i]['per_cod']==$perguntas_escala[$h]['per_cod']&&$set==false){
							$Deletar[$i]=$h;
							$set=true;
						}
						else if($set==false){
							$Deletar[$i]=0;
						};
					};
				
				};
				$perguntas_deletar=array();
				$indice_delete=0;
				for($i=0;$i<$indice_perguntas;$i++){
					if($Deletar[$i]==0){
						$perguntas_deletar[$indice_delete]=$perguntas_delete[$i]['per_cod'];
						$indice_delete++;
					};
				};
				for($i = 0; $i < $indice_delete; $i++){
					$sql = "DELETE FROM enquete_perguntas
							WHERE enq_cod=".$enqs[0]."
							AND per_cod=".$perguntas_deletar[$i];
					$retorno = $data->delete('dynamic',$sql);
					if($retorno==true){
						echo $perguntas_deletar[$i]['per_cod'].' ';	
					}
				};
				unset($indice_perguntas);
				unset($indice_delete);
				unset($existe);
				// Código das novas perguntas
				$sql = "SELECT per_cod
						FROM perguntas
						ORDER BY per_cod DESC
						LIMIT 0, ".$qtd_nova;
				$pergs_novas_cod = $data->find("dynamic", $sql);

				// Grava na tabela enquete_perguntas
				// Novas perguntas
				$data->tabela = "enquete_perguntas";

				for ($j = 0; $j < count($enqs); $j++){
					for($i=$qtd_nova - 1; $i >= 0; $i--){
						$array_ep['enq_cod'] = $enqs[$j];		
						$array_ep['per_cod'] = $pergs_novas_cod[$i]['per_cod'];
						$data->add($array_ep);
					}
					// Perguntas carregadas
					for($i=$qtd_car - 1; $i >= 0; $i--){
						$array_ep2['enq_cod'] = $enqs[$j];		
						$array_ep2['per_cod'] = $cod_car[$i];
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
				$aux1 = explode (',', $_POST['enqimp_perg_alter']);
				
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
			unset($array);
			$array = Array();

			$indice = 0;
			$data->tabela = "enq_disc_prof";

			echo '<h2 style="text-align: center; margin-top:50px; width: 800px;">ENQUETE GRAVADA COM SUCESSO!</h2>';

			echo "<div class='linha'>";
			echo "<div class='coluna' style='width: 800px; font-weight:bold; margin-bottom: 20px;'>Links para as enquetes:</div>";
			$pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$site=explode('?',$pagina);
			//echo $site[0];
			$sql = "SELECT edi_cod
					FROM enq_disc_prof
					WHERE enq_cod=".$enqs[0]['enq_cod'];
			$existe=$data->find('dynamic',$sql);
			for ($i = 0; $i < count($enqs); $i++){
				echo "<div class='coluna' style='width: 800px;'>";
					if(isset($_POST['enqimp_enq_cod']))
						echo $site[0]."enquete-".$enqs[0]['enq_cod'];
					else
						echo $site[0]."enquete-".$enqs[$i]['enq_cod'];
				echo "</div>";
				if($i==0&&isset($existe[0]['edi_cod']))
					$array['edi_cod'] = $existe[0]['edi_cod'];
				$array['enq_cod'] = $enqs[$i]['enq_cod'];
				$array['pro_cod'] = $_POST['pro_'.$i];
				$array['dis_cod'] = $_POST['disc_'.$i];
				if($i==0 && isset($_POST['enqimp_enq_cod']))
					$data->update($array);
				else
					$data->add($array);
			}
			echo "</div>";
			unset($array);

			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
	
	}	
?>