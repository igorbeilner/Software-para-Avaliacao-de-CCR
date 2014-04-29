<?php
	$data->tabela = 'municipio_cargo';
	switch($_GET['acao']){
		// GRAVAR CARGOS E FUNÇÕES, ATUALIZAÇÃO REALIZADA, ENTÃO GRAVAR TAMBÉM NAS TABELAS HISTÓRICO
		case 'grava_cargo_salario_funcao':			
			$qtd = $_POST['qtd'];
			// COLETANDO E TRANSFORMANDO OS VALORES RECEBIDOS DO POST
			for($i=0; $i<$qtd; $i++){
				$salario_base[$i] = str_replace(".", "", $_POST['muc_salario_base_'.$i]); // Retirando os "."
				$salario_base[$i] = str_replace(",", ".", $salario_base[$i]); // Trocando a "," por "." para gravar no banco
				$municipio = $_POST['mun_codigo'];
				$cargo[$i] = $_POST['car_codigo_'.$i];
				for($j=0; $j<5;$j++){	
					$valor_funcao[$i][$j] = str_replace(".", "", $_POST[$i.'_valorbase_'.$j]); // Retirando os "."
					$valor_funcao[$i][$j] = str_replace(",", ".", $valor_funcao[$i][$j]); // Trocando a "," por "." para gravar no banco								
					$partes = explode("_", $_POST[$i.'_funcodigo_'.$j]);
					$funcao[$i][$j] = $partes[1];
					$funcao_indice[$j] = $partes[2];
				}
			}		
			// CONSULTAS
			$sql = "SELECT *
					FROM municipio_cargo
					WHERE mun_codigo = ".$municipio;
			$municipio_cargo = $data->find('dynamic',$sql);
			$sql = "SELECT *
					FROM municipio_cargo_funcao
					WHERE mun_codigo = ".$municipio;
			$municipio_cargo_funcao = $data->find('dynamic',$sql);
			// MUNICIPIO_CARGO
			if(count($municipio_cargo) == 0){ // TABELA VAZIA
				$data->tabela = 'municipio_cargo';
				for($i=0; $i<$qtd; $i++){						
					$Array['car_codigo'] = $cargo[$i];
					$Array['mun_codigo'] = $municipio;
					$Array['muc_salario_base'] = $salario_base[$i];
					$data->add($Array);
				}
			}else{  // TABELA NÃO ESTÁ VAZIA, ENTÃO GRAVA NO HISTÓRICO E DEPOIS ATUALIZA A TABELA MUNICIPIO_CARGO
				$data->tabela = 'historico_municipio_cargo';
				for($i=0; $i<count($municipio_cargo); $i++){				
					$ArrayHistorico['car_codigo'] = $municipio_cargo[$i]['car_codigo'];				
					$ArrayHistorico['mun_codigo'] = $municipio_cargo[$i]['mun_codigo'];
					$ArrayHistorico['hmc_salario_base'] = $municipio_cargo[$i]['muc_salario_base'];
					$ArrayHistorico['hmc_data'] = date("Y-m-d");
					$data->add($ArrayHistorico);
				}		
				// Primeiramente, apagar todos os cargos e funções deste municipio	
				$data->tabela = 'municipio_cargo';
				for($i=0; $i<count($municipio_cargo); $i++){
					$Del['muc_codigo'] = $municipio_cargo[$i]['muc_codigo'];	
					$data->delete($Del);
				}	
				$data->tabela = 'municipio_cargo_funcao';
				for($i=0; $i<count($municipio_cargo_funcao); $i++){
					$Del2['mcf_codigo'] = $municipio_cargo_funcao[$i]['mcf_codigo'];	
					$data->delete($Del2);	
				}	
				// Inserindo cargo no município
				$data->tabela = 'municipio_cargo';
				for($i=0; $i<$qtd; $i++){						
					$Array['car_codigo'] = $cargo[$i];
					$Array['mun_codigo'] = $municipio;
					$Array['muc_salario_base'] = $salario_base[$i];
					$data->add($Array);
				}
			}
			// MUNICIPIO_CARGO_FUNCAO
			if(count($municipio_cargo_funcao) == 0){ // TABELA VAZIA
				$data->tabela = 'municipio_cargo_funcao';
				for($i=0; $i<$qtd; $i++){ // Cargos
					for($j=0; $j<5;$j++){ // Funções	
						if($funcao[$i][$j] != 0){ // Só grava se há função
							$Array2['car_codigo'] = $cargo[$i];
							$Array2['fun_codigo'] = $funcao[$i][$j];
							$Array2['mun_codigo'] = $municipio;
							$Array2['mcf_valor_base'] = $valor_funcao[$i][$j];		 		
							$data->add($Array2);
						}
					}				
				}					
			}else{ // TABELA NÃO ESTÁ VAZIA, ENTÃO GRAVA NO HISTÓRICO E DEPOIS ATUALIZA A TABELA MUNICIPIO_CARGO0_FUNCAO
				$data->tabela = 'historico_municipio_cargo_funcao';
				for($i=0; $i<count($municipio_cargo_funcao);$i++){ 	
					$ArrayHistorico2['car_codigo'] = $municipio_cargo_funcao[$i]['car_codigo'];
					$ArrayHistorico2['fun_codigo'] = $municipio_cargo_funcao[$i]['fun_codigo'];
					$ArrayHistorico2['mun_codigo'] = $municipio_cargo_funcao[$i]['mun_codigo'];
					$ArrayHistorico2['hmcf_valor_base'] = $municipio_cargo_funcao[$i]['mcf_valor_base'];
					$ArrayHistorico2['hmcf_data'] = date("Y-m-d");							 		
					$data->add($ArrayHistorico2);
				}		
				// Primeiramente, apagar todos os cargos e funções deste municipio	
				$data->tabela = 'municipio_cargo';
				for($i=0; $i<count($municipio_cargo); $i++){
					$Del['muc_codigo'] = $municipio_cargo[$i]['muc_codigo'];	
					$data->delete($Del);
				}	
				$data->tabela = 'municipio_cargo_funcao';
				for($i=0; $i<count($municipio_cargo_funcao); $i++){
					$Del2['mcf_codigo'] = $municipio_cargo_funcao[$i]['mcf_codigo'];	
					$data->delete($Del2);	
				}	
				$data->tabela = 'municipio_cargo_funcao';
				for($i=0; $i<$qtd; $i++){ // Cargos
					for($j=0; $j<5;$j++){ // Funções	
						if($funcao[$i][$j] != 0){ // Só grava se há função
							$Array2['car_codigo'] = $cargo[$i];
							$Array2['fun_codigo'] = $funcao[$i][$j];
							$Array2['mun_codigo'] = $municipio;
							$Array2['mcf_valor_base'] = $valor_funcao[$i][$j];		 		
							$data->add($Array2);
						}
					}				
				}					
			}
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
		
		//////////////////////////////////////// EDIÇÃO ///////////////////////////////////////////////////////////////////////////////////////
		
		// GRAVAR EDIÇÃO DE CARGOS E FUNÇÕES, NÃO GRAVA NAS TABELAS HISTÓRICO
		case 'update_cargo_salario_funcao':
			$qtd = $_POST['qtd'];
			// COLETANDO E TRANSFORMANDO OS VALORES RECEBIDOS DO POST
			for($i=0; $i<$qtd; $i++){
				$salario_base[$i] = str_replace(".", "", $_POST['muc_salario_base_'.$i]); // Retirando os "."
				$salario_base[$i] = str_replace(",", ".", $salario_base[$i]); // Trocando a "," por "." para gravar no banco
				$municipio = $_POST['mun_codigo'];
				$cargo[$i] = $_POST['car_codigo_'.$i];
				for($j=0; $j<5;$j++){	
					$valor_funcao[$i][$j] = str_replace(".", "", $_POST[$i.'_valorbase_'.$j]); // Retirando os "."
					$valor_funcao[$i][$j] = str_replace(",", ".", $valor_funcao[$i][$j]); // Trocando a "," por "." para gravar no banco								
					$partes = explode("_", $_POST[$i.'_funcodigo_'.$j]);
					$funcao[$i][$j] = $partes[1];
					$funcao_indice[$j] = $partes[2];
				}
			}					
			// CONSULTAS
			$sql = "SELECT *
					FROM municipio_cargo
					WHERE mun_codigo = ".$municipio;
			$municipio_cargo = $data->find('dynamic',$sql);
			$sql = "SELECT *
					FROM municipio_cargo_funcao
					WHERE mun_codigo = ".$municipio;
			$municipio_cargo_funcao = $data->find('dynamic',$sql);
			// MUNICIPIO_CARGO
			// Primeiramente, apagar todos os cargos e funções deste municipio	
			$data->tabela = 'municipio_cargo';
			for($i=0; $i<count($municipio_cargo); $i++){
				$Del['muc_codigo'] = $municipio_cargo[$i]['muc_codigo'];	
				$data->delete($Del);
			}	
			$data->tabela = 'municipio_cargo_funcao';
			for($i=0; $i<count($municipio_cargo_funcao); $i++){
				$Del2['mcf_codigo'] = $municipio_cargo_funcao[$i]['mcf_codigo'];	
				$data->delete($Del2);	
			}	
			// Inserindo cargo no município
			$data->tabela = 'municipio_cargo';
			for($i=0; $i<$qtd; $i++){						
				$Array['car_codigo'] = $cargo[$i];
				$Array['mun_codigo'] = $municipio;
				$Array['muc_salario_base'] = $salario_base[$i];
				$data->add($Array);
			}
			// MUNICIPIO_CARGO_FUNCAO
			// Primeiramente, apagar todos os cargos e funções deste municipio	
			$data->tabela = 'municipio_cargo';
			for($i=0; $i<count($municipio_cargo); $i++){
				$Del['muc_codigo'] = $municipio_cargo[$i]['muc_codigo'];	
				$data->delete($Del);
			}	
			$data->tabela = 'municipio_cargo_funcao';
			for($i=0; $i<count($municipio_cargo_funcao); $i++){
				$Del2['mcf_codigo'] = $municipio_cargo_funcao[$i]['mcf_codigo'];	
				$data->delete($Del2);	
			}	
			$data->tabela = 'municipio_cargo_funcao';
			for($i=0; $i<$qtd; $i++){ // Cargos
				for($j=0; $j<5;$j++){ // Funções	
					if($funcao[$i][$j] != 0){ // Só grava se há função
						$Array2['car_codigo'] = $cargo[$i];
						$Array2['fun_codigo'] = $funcao[$i][$j];
						$Array2['mun_codigo'] = $municipio;
						$Array2['mcf_valor_base'] = $valor_funcao[$i][$j];		 		
						$data->add($Array2);
					}
				}				
			}		
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;		
	}	
?>