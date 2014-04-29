<?php
	$data->tabela = 'municipio_cargo';
	switch($_GET['acao']){

		case 'grava_reajuste':			
			echo "cargo_selecionado: ".$_POST['cargo']."<br />";
			echo "funcao_selecionado: ".$_POST['funcao']."<br />";
			echo "municipio: ".$_POST['mun_codigo']."<br />";	
			echo "reajuste_cargo: ".$_POST['reajuste_cargo']."<br />";					
			echo "reajuste_funcao: ".$_POST['reajuste_funcao']."<br />";								
			
			
			$sql = "SELECT mc.muc_salario_base
					FROM municipio_cargo AS mc
						JOIN municipio AS m ON (mc.mun_codigo = m.mun_codigo)
					WHERE mc.mun_codigo = ".$_POST['mun_codigo'];
			$cargo_municipio = $data->find('dynamic',$sql);				
			
			// gravar valor atual na tabela historico...
			// apagar valor atual da tabela municipio_cargo
			// insirir na tabela municipio_cargo os valores ja calculados
			
			// CALCULO DO REAJUSTE
			for($i=0; $i< count($cargo_municipio); $i++){
				$credito[$i] = ($_POST['reajuste_cargo'] * $cargo_municipio[$i]['muc_salario_base'])/100;
				$cargo_municipio[$i]['muc_salario_base'] = $cargo_municipio[$i]['muc_salario_base'] + $credito[$i];	
			}
			
			
			
			//echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_cargo'>";	
		break;
	}	
?>