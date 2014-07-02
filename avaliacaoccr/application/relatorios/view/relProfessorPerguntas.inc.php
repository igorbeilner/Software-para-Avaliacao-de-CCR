<?php
	include ('phpHtmlChart.php');
	
	if (isset($_GET['enq']))
		$enq = $_GET['enq'];
		
	if (isset($_GET['sem']))
		$sem = $_GET['sem'];
?>

<div id="table">
	<h2>Perguntas</h2>
    
	<?php
		
		//pega as perguntas da enquete selecionada		
		$sql = "select p.per_desc, t.per_cod, p.per_tipo from
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
                    <?php
                    	$sql = "select r.res_desc, r.res_time
								from respostas as r
								where r.per_cod =".$res[$i]['per_cod']."";
									
						$resp = $data->find('dynamic', $sql);
						 
						if ($res[$i]['per_tipo'] == 0){
							if (count($resp) > 5){
							
								echo "<div class='coluna' style='width:765px; margin-left: 10px; background-color:#E6E6FA; margin-top:10px;'>";
							
									for ($j = 0; $j < 5; $j++){
								
										echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 100px;'>".utf8_encode($resp[$j]['res_time'])."</div>";
										echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 550px;'>".utf8_encode($resp[$j]['res_desc'])."</div>";
									}
								
									echo "<div class='coluna' id='vermais".$i."' style='margin-left: 700px; margin-top: 2px; width: 60px; cursor:pointer; font-weight: bold;' onclick='abrirmais(".$i.");'>Ver mais</div>";
									echo "<div id='mais".$i."' style='display:none;'>";
								
									for ($j = 5; $j < count($resp); $j++){
										$n = $j + 1;	
										
										echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width:100px;'>".utf8_encode($resp[$j]['res_time'])."</div>";
										echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 550px;'>".utf8_encode($resp[$j]['res_desc'])."</div>";
								
									}
									echo "<div class='coluna' id='vermenos".$i."' style='margin-left: 690px; margin-top: 2px; width: 100px; cursor:pointer; font-weight: bold; display: none;' onclick='esconder(".$i.");'>Ver menos</div>";
									echo "</div>";
									
								echo "</div>";
								echo "<div style='clear:both;'></div>";                        
							}else{
								echo "<div class='coluna' style='width:765px; margin-left: 10px; background-color:#E6E6FA; margin-top:10px;'>";
							
									for ($j = 0; $j < count($resp); $j++){
										$n = $j + 1;
							
										echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 100px;'>".utf8_encode($resp[$j]['res_time'])."</div>";
										echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 550px;'>".utf8_encode($resp[$j]['res_desc'])."</div>";
								
						   
									}
								echo "</div>";
								echo "<div style='clear:both;'></div>";
							}
						}else if ($res[$i]['per_tipo'] == 1){
							$sql = "select o.op_desc, o.op_cod from
									(select po.op_cod 
									from perguntas_opcoes as po 
									where po.per_cod =".$res[$i]['per_cod'].") as t join opcoes as o
									where t.op_cod = o.op_cod";
							
							$options = $data->find('dynamic', $sql);
							
							$grafico = Array();
								
							for ($h = 0; $h < count($options); $h++){
								$sql = "select r.res_cod from
										respostas as r
										where r.res_desc = '".$options[$h]['op_desc']."'";
										
								$result = $data->find('dynamic', $sql);
								
								array_push($grafico, array(utf8_encode($options[$h]['op_desc']), count($result)));
							}
							
							echo phpHtmlChart($grafico, 'H', 'Gráfico de Respostas', 'Número de respostas', '8pt', 400, 'px', 15, 'px');
							echo "<div class='coluna' id='vermais".$i."' style='margin-left: 650px; margin-top: 2px; width: 150px; cursor:pointer; font-weight: bold;' onclick='abrirmais(".$i.");'>Mais informações</div>";
							$sql = "select r.res_desc, r.res_time from
									respostas as r where
									r.per_cod = '".$res[$i]['per_cod']."'";
											
							$resp = $data->find('dynamic', $sql);
							echo "<div id='mais".$i."' style='display:none;'>";
								echo "</br></br>";
								echo "<div class='coluna' style='float:left; width:10px; font-weight:bold; color:#000; margin-left:10px;'>Id</div>";
								echo "<div class='coluna' style='float:left; width:150px; font-weight:bold; color:#000; margin-left: 15px;'>Horário</div>";
								echo "<div class='coluna' style='float:left; width:580px; font-weight:bold; color:#000; margin-left:15px;'>Resposta</div></br>";
								for ($l = 0; $l < count($resp); $l++){
									$m = $l + 1;
									echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 10px;'>".$m."</div>";
									echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 150px;'>".utf8_encode($resp[$l]['res_time'])."</div>";
									echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 580px;'>".utf8_encode($resp[$l]['res_desc'])."</div>";
									
								}	
							echo "<div class='coluna' id='vermenos".$i."' style='margin-left: 700px; margin-top: 2px; width: 100px; cursor:pointer; font-weight: bold; display: none;' onclick='esconder(".$i.");'>Ver menos</div>";
							echo "</div>";
							echo "<div style='clear:both;'></div>";
						}
				echo "</div>";
				echo "<div style='clear:both;'></div>";
                
			echo "</div>";
	
			}
			?>
	<a href="?module=relatorios&acao=rel_professor&semestre=<?php echo $sem?>" style="margin-left:595px;"><img src="application/images/back.png" title="Voltar" border="none" /></a> 

</div>

<script>
	function abrirmais(indice){
		document.getElementById('vermais'+indice).style.display = "none";
		document.getElementById('mais'+indice).style.display = "block";	
		document.getElementById('vermenos'+indice).style.display = "block";	
	}

	function esconder(indice){
		document.getElementById('vermenos'+indice).style.display = "none";
		document.getElementById('mais'+indice).style.display = "none";	
		document.getElementById('vermais'+indice).style.display = "block";
	}
</script>