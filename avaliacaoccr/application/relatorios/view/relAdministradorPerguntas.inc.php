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
		
			$sql = "select r.res_cod from enq_per_res as r where r.per_cod =".$res[$i]['per_cod']." and enq_cod =".$enq;
			$result = $data->find('dynamic', $sql);
			$num_res = count($result);

			if (count($result) > 0){
			 
	?>
			<div id = "list_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; display:block;">
				<div class="linha_sol" style="width: 100%;">
					<?php
					
					?>
					<div class="coluna" style="float:left; width: 300px; font-weight: bold;"><?php echo $res[$i]['per_desc'];?></div>
					<div class="coluna" style="float: left; width: 50px; margin-left: 420px;"><?php echo $num_res;?></div>							
					<div style="clear: both;"></div>
                    <?php 
						 
						if ($res[$i]['per_tipo'] == 0){
							if (count($result) > 5){
							
								echo "<div class='coluna' style='width:765px; margin-left: 10px; background-color:#E6E6FA; margin-top:10px;'>";
							
									for ($j = 0; $j < 5; $j++){
										$sql = "select r.res_desc, r.res_time
												from respostas as r
												where r.res_cod =".$result[$j]['res_cod']."";
													
										$resp = $data->find('dynamic', $sql);
								
										echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 150px;'>".$resp[0]['res_time']."</div>";
										echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 550px;'>".$resp[0]['res_desc']."</div>";
									}
								
									echo "<div class='coluna' id='vermais".$i."' style='margin-left: 690px; margin-top: 2px; width: 100px; cursor:pointer; font-weight: bold;' onclick='abrirmais(".$i.");'>Ver mais</div>";
									echo "<div id='mais".$i."' style='display:none;'>";
								
									for ($j = 5; $j < count($resp); $j++){
										$sql = "select r.res_desc, r.res_time
												from respostas as r
												where r.res_cod =".$result[$j]['res_cod']."";
													
										$resp = $data->find('dynamic', $sql);
										
										echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width:150px;'>".$resp[0]['res_time']."</div>";
										echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 550px;'>".$resp[0]['res_desc']."</div>";
								
									}
									echo "<div class='coluna' id='vermenos".$i."' style='margin-left: 680px; margin-top: 2px; width: 140px; cursor:pointer; font-weight: bold; display: none;' onclick='esconder(".$i.");'>Ver menos</div>";
									echo "</div>";
									
								echo "</div>";
								echo "<div style='clear:both;'></div>";                        
							}else{
								echo "<div class='coluna' style='width:765px; margin-left: 10px; background-color:#E6E6FA; margin-top:10px;'>";
							
									for ($j = 0; $j < count($resp); $j++){
										$sql = "select r.res_desc, r.res_time
												from respostas as r
												where r.res_cod =".$result[$j]['res_cod']."";
													
										$resp = $data->find('dynamic', $sql);
							
										echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 150px;'>".$resp[0]['res_time']."</div>";
										echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 550px;'>".$resp[0]['res_desc']."</div>";
								
						   
									}
								echo "</div>";
								echo "<div style='clear:both;'></div>";
							}
								
						}else if ($res[$i]['per_tipo'] == 1){
							$grafico = Array();
							$respostas = Array();
							for ($l = 0; $l < count($result); $l++){
								$sql = "select r.res_desc, r.res_time from
										respostas as r where
										r.res_cod = '".$result[$l]['res_cod']."'";
											
								$resp = $data->find('dynamic', $sql);
								array_push($respostas, array($resp[0]['res_time'], $resp[0]['res_desc']));
							}

							$sql = "select * from opcoes";
							$opcoes = $data->find('dynamic', $sql);

							for ($h = 0; $h < count($opcoes); $h++){
								$qtd = 0;
								for ($k = 0; $k < count($respostas); $k++){
									if ($opcoes[$h]['op_desc'] == $respostas[$k][1]){
										$qtd++;
									}
								}
								array_push($grafico, array($opcoes[$h]['op_desc'], $qtd));
							}
							
							echo phpHtmlChart($grafico, 'H', '', '', '8pt', 400, 'px', 15, 'px');

							echo "<div class='coluna' id='vermais".$i."' style='margin-left: 650px; margin-top: 2px; width: 150px; cursor:pointer; font-weight: bold;' onclick='abrirmais(".$i.");'>Mais informações</div>";							echo "<div id='mais".$i."' style='display:none;'>";
								echo "</br></br>";
								echo "<div class='coluna' style='float:left; width:10px; font-weight:bold; color:#000; margin-left:10px;'>Id</div>";
								echo "<div class='coluna' style='float:left; width:150px; font-weight:bold; color:#000; margin-left: 15px;'>Horário</div>";
								echo "<div class='coluna' style='float:left; width:580px; font-weight:bold; color:#000; margin-left:15px;'>Resposta</div></br>";
								for ($l = 0; $l < count($respostas); $l++){
									$m = $l + 1;
									echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 10px;'>".$m."</div>";
									echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 150px;'>".$respostas[$l][0]."</div>";
									echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 580px;'>".$respostas[$l][1]."</div>";
									
								}	
							echo "<div class='coluna' id='vermenos".$i."' style='margin-left: 700px; margin-top: 2px; width: 100px; cursor:pointer; font-weight: bold; display: none;' onclick='esconder(".$i.");'>Ver menos</div>";
							echo "</div>";
							echo "<div style='clear:both;'></div>";
						}

						
				echo "</div>";
				echo "<div style='clear:both;'></div>";
                
			echo "</div>";
			}
			}
			?>
	<a href="?module=relatorios&acao=rel_adm&semestre=<?php echo $sem?>" style="margin-left:600px; margin-top:40px;"><img src="application/images/back.png" title="Voltar" border="none" /></a> 

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