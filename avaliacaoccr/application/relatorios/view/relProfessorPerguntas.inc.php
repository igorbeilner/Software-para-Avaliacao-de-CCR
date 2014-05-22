<?php
		
	if (isset($_GET['enq']))
		$enq = $_GET['enq'];
		
	if (isset($_GET['sem']))
		$sem = $_GET['sem'];
?>

<div id="table">
	<h2>Perguntas</h2>
    
	<?php
		
		//pega as perguntas da enquete selecionada		
		$sql = "select p.per_desc, t.per_cod from
				(select ep.per_cod, e.enq_cod from enquete as e join enquete_perguntas as ep
					where ep.enq_cod =".$enq." and e.enq_cod=".$enq.") as t join perguntas as p
					where p.per_cod = t.per_cod";
						
		$res = $data->find('dynamic', $sql);
		
		if(count($res) > 0){
			$flag = 1; //Mostrar rodapé paginação
	?>
			<div id="cab_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; margin-top:10px; display:block;">
				<div class="linha" style="width: 100%;">	
					<div class="coluna" style="float:left; width:300px; font-weight:bold; color:#000;">Pergunta</div>
					<div class="coluna" style="float:left; width:140px; font-weight:bold; color:#000; margin-left: 340px;">Número de respostas</div>
				<div style="clear: both;"></div>
			</div>
		</div>	
	<?php		 
		}
		
		for($i = 0; $i < count($res); $i++){
		
			$sql = "select r.res_cod from respostas as r where r.per_cod =".$res[$i]['per_cod']."";
			$result = $data->find('dynamic', $sql);
			$num_res = count($result);
			 
	?>
			<div id = "list_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; display:block;">
				<div class="linha_sol" style="width: 100%;">
						<div class="coluna" style="float:left; width: 300px;"><a href="?module=relatorios&acao=professor_respostas&per=<?php echo $res[$i]['per_cod']?>&enq=<?php echo $enq?>" ><?php echo utf8_encode($res[$i]['per_desc']);?></a></div>
						<div class="coluna" style="float: left; width: 50px; margin-left: 420px;"><?php echo $num_res;?></div>							
						<div style="clear: both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
	<?php
			}
	?>
	<a href="?module=relatorios&acao=relatorios&semestre=<?php echo $sem?>" style="margin-left:595px;"><img src="application/images/voltar.png" title="Voltar" border="none" /></a> 

</div>