<?php
	if (isset($_GET['enq_cod'])){
		$enq_cod = $_GET['enq_cod'];
	}
	echo '<meta charset="UTF-8">'; 
	$aux = explode("-", $enq_cod);
	$enq_cod = $aux[1];

		$sql = "select p.per_desc, p.per_tipo, p.per_cod, j.enq_nome from
				(select e.enq_cod, ep.per_cod, e.enq_nome 
				from enquete as e join enquete_perguntas as ep
				where e.enq_cod = ".$enq_cod." and ep.enq_cod = ".$enq_cod.") as j join perguntas as p
				where j.per_cod = p.per_cod";

		$result = $data->find('dynamic', $sql);
		for ($i = 0; $i < count($result); $i++){	
			$n = $i + 1;
			if ($result[$i]['per_tipo'] == 0){
				if (isset($_POST["text_".$result[$i]['per_cod'].""])){
					$value = $_POST["text_".$result[$i]['per_cod'].""];
					if ($value != ""){	
						$sql = "INSERT INTO respostas (res_desc) VALUES ('".$value."')";

						$r = $data->executaSQL($sql);

						$sql = "SELECT MAX(res_cod) AS res_cod
							FROM respostas";
						$res_cod = $data->find('dynamic', $sql);
						
						$data->tabela = "enq_per_res";
						$array['enq_cod'] = $enq_cod;
						$array['per_cod'] = $result[$i]['per_cod'];
						$array['res_cod'] = $res_cod[0]['res_cod'];
						$data->add($array);
					}
				}
			}else{
				$sql = "select o.op_desc from
						(select op.op_cod from
	           			perguntas as p join perguntas_opcoes as op 
	           			where p.per_cod = ".$result[$i]['per_cod']." and op.per_cod = ".$result[$i]['per_cod'].") as t 
						join opcoes as o where t.op_cod = o.op_cod";

				$res = $data->find('dynamic', $sql);

				for ($j = 0; $j < count($res); $j++){
					if (isset($_POST["op_".$result[$i]['per_cod']."_".$res[$j]['op_cod'].""])){
						$value = $_POST["op_".$result[$i]['per_cod']."_".$res[$j]['op_cod'].""];

						$sql = "INSERT INTO respostas (res_desc) VALUES ('".$value."')";

						$r = $data->executaSQL($sql);

						$sql = "SELECT MAX(res_cod) AS res_cod
							FROM respostas";
						$res_cod = $data->find('dynamic', $sql);
						
						$data->tabela = "enq_per_res";
						$array['enq_cod'] = $enq_cod;
						$array['per_cod'] = $result[$i]['per_cod'];
						$array['res_cod'] = $res_cod[0]['res_cod'];
						$data->add($array);
						break;
					}
				}

			}

		}

		$data->tabela = "enquete";
		$sql = "SELECT enq_num_perg FROM enquete WHERE enq_cod='$enq_cod'";
		$result = $data->find('dynamic', $sql);
		$num_resp = $result[0]['enq_num_resp'] + 1;

		$resss['enq_cod']      = $enq_cod;
		$resss['enq_num_resp'] = $num_resp;
		$data->update($resss);

		$data->tabela = "alu_enq";
		$array_alu['alu_cod'] = $_SESSION['userId'];
		$array_alu['enq_cod'] = $enq_cod;
		$data->add($array_alu);
?>
		<h2 style="margin-left:37%;"> Resposta enviada com sucesso! </h2>
