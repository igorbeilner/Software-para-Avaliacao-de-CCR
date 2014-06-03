<?php
	include ('phpHtmlChart.php');
		
	if (isset($_GET['per']))
		$per = $_GET['per'];
		
	if (isset($_GET['enq']))
		$enq = $_GET['enq'];
?>

<div id="table">
	<h2>Respostas</h2>
    
	<?php
		
		//pega as perguntas da enquete selecionada		
		$sql = "select p.per_desc, p.per_tipo 
				from perguntas as p
				where p.per_cod =".$per."";
						
		$perg = $data->find('dynamic', $sql);
		
		$sql = "select r.res_desc
				from respostas as r
				where r.per_cod =".$per."";
				
		$res = $data->find('dynamic', $sql);
		
		if(count($res) > 0){
			$flag = 1; //Mostrar rodapé paginação
	?>
			<div id="cab_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; margin-top:10px; display:block;">
				<div class="linha" style="width: 100%;">
					<div class="coluna" style="float:left; width:100%; font-weight:bold; color:#000;">Pergunta: <?php echo utf8_encode($perg[0]['per_desc']);?></div>
					<div class="coluna" style="float:left; width:100%; font-weight:bold; color:#000;height:10px;"></div>
					<div class="coluna" style="float:left; width:50px; font-weight:bold; color:#000;">Id</div>
					<div class="coluna" style="float:left; width:70px; font-weight:bold; color:#000; margin-left:10px;">Horário</div>
					<div class="coluna" style="float:left; width:400px; font-weight:bold; color:#000; margin-left: 20px;">Resposta</div>
				<div style="clear: both;"></div>
			</div>
		</div>	
	<?php		 
		}
		
		for($i = 0; $i < count($res); $i++){
			 
	?>
			<div id = "list_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; display:block;">
				<div class="linha_sol" style="width: 100%;">
						<div class="coluna" style="float:left; width: 50px;"><?php echo $i;?></div>
						<div class="coluna" style="float:left; width: 70px; margin-left: 10px;">1</div>
						<div class="coluna" style="float: left; width: 400px; margin-left: 20px;"><?php echo utf8_encode($res[$i]['res_desc']);?></div>							
						<div style="clear: both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
	<?php
			}
			if ($perg[0]['per_tipo'] == 1){
				$sql = "select o.op_desc, o.op_cod from
						(select po.op_cod 
						from perguntas_opcoes as po 
						where po.per_cod =".$per.") as t join opcoes as o
						where t.op_cod = o.op_cod";
				
				$res = $data->find('dynamic', $sql);
				
				$grafico = Array();
					
				for ($i = 0; $i < count($res); $i++){
					$sql = "select r.res_cod from
							respostas as r
							where r.res_desc = '".$res[$i]['op_desc']."'";
							
					$result = $data->find('dynamic', $sql);
					
					array_push($grafico, array(utf8_encode($res[$i]['op_desc']), count($result)));
					
				}
				
				echo phpHtmlChart($grafico, 'H', 'Gráfico de Respostas', 'Número de respostas', '8pt', 400, 'px', 15, 'px');
			}
	?>
    
    
    
    <!--botão voltar-->
	<a href="?module=relatorios&acao=adm_perguntas&enq=<?php echo $enq?>" style="margin-left:595px;"><img src="application/images/voltar.png" title="Voltar" border="none" /></a> 

</div>