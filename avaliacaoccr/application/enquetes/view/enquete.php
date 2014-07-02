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
?>
<h2 style="margin-left:25%;"><?php echo utf8_encode($result[0]['enq_nome']) ?></h2>

<form action="<?php echo "process-".$enq_cod."" ?>" id="form_enquete" method="post">
<?php
	for ($i = 0; $i < count($result); $i++){	
		$n = $i + 1;
		if ($result[$i]['per_tipo'] == 0){
?>
           	<div class="linha">
           		<div style="width: 100%; margin-top: 8px; margin-left:0px;" class="coluna"><?php echo $n." - ".utf8_encode($result[$i]['per_desc']) ?></div><br/>
           		<textarea class="cad_enq" style="width: 500px; height: 75px;" type='text' name='<?php echo "text_".$result[$i]['per_cod']."" ?>' id='text_".$i."' cols="20" rows="3" ></textarea>
           	</div>
<?php
		}else if ($result[$i]['per_tipo'] == 1){
?>

			<div class="linha">
           		<div style="width: 100%; margin-top: 8px; margin-left:0px; margin-bottom:5px;" class="coluna"><?php echo $n." - ".utf8_encode($result[$i]['per_desc']) ?></div><br/>
           		<?php
           			$sql = "select o.op_desc from
							(select op.op_cod from
           					perguntas as p join perguntas_opcoes as op 
           					where p.per_cod = ".$result[$i]['per_cod']." and op.per_cod = ".$result[$i]['per_cod'].") as t 
							join opcoes as o where t.op_cod = o.op_cod";

					$res = $data->find('dynamic', $sql);

					for ($j = 0; $j < count($res); $j++){
           		?>
           			<div class="linha" style="margin-left: 15px;">
						<input type="radio" name="<?php echo "op_".$result[$i]['per_cod']."_".$res[$j]['op_cod'].""?>" value="<?php echo $res[$j]['op_desc']?>"> <?php echo utf8_encode($res[$j]['op_desc'])?>
					</div>
				<?php
					}
				?>
				<input style="margin-top:10px;" type="submit" value="Enviar resposta">	
           	</div>
<?php
		}				
	}
?>
</form>


