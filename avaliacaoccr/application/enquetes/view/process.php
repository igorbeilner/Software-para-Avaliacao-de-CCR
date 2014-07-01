<?php
	if (isset($_GET['enq_cod'])){
		$enq_cod = $_GET['enq_cod'];
	}

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

				$sql = "INSERT INTO respostas (res_desc, per_cod) VALUES ('".$value."','".$result[$i]['per_cod']."')";

				$r = $data->executaSQL($sql);
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

					$sql = "INSERT INTO respostas (res_desc, per_cod) VALUES ('".$value."','".$result[$i]['per_cod']."')";

					$r = $data->executaSQL($sql);

					break;
				}
			}

		}

	}

?>

<h2 style="margin-left:37%;"> Resposta enviada com sucesso! </h2>