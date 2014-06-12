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
					<div class="coluna" style="float:left; width: 300px; font-weight: bold;"><?php echo utf8_encode($res[$i]['per_desc']);?></div>
					<div class="coluna" style="float: left; width: 50px; margin-left: 420px;"><?php echo $num_res;?></div>							
					<div style="clear: both;"></div>
                    <?php 
                      	$sql = "select r.res_desc
								from respostas as r
								where r.per_cod =".$res[$i]['per_cod']."";
									
						$resp = $data->find('dynamic', $sql);
							
						if (count($resp) > 5){
						
                      		echo "<div class='coluna' style='width:765px; margin-left: 10px; background-color:#E6E6FA; margin-top:10px;'>";
                        
								for ($j = 0; $j < 5; $j++){
									$n = $j + 1;
							
									echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 10px;'>".$n."</div>";
									echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 730px;'>".utf8_encode($resp[$j]['res_desc'])."</div>";
								}
							
								echo "<div class='coluna' id='vermais".$i."' style='margin-left: 700px; margin-top: 2px; width: 60px; cursor:pointer; font-weight: bold;' onclick='abrirmais(".$i.");'>Ver mais</div>";
								echo "<div id='mais".$i."' style='display:none;'>";
							
								for ($j = 5; $j < count($resp); $j++){
									$n = $j + 1;	
									
									echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 10px;'>".$n."</div>";
									echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 730px;'>".utf8_encode($resp[$j]['res_desc'])."</div>";
							
								}
							
								echo "</div>";
								
							echo "</div>";
							echo "<div style='clear:both;'></div>";                        
						}else{
                        	echo "<div class='coluna' style='width:765px; margin-left: 10px; background-color:#E6E6FA; margin-top:10px;'>";
                        
								for ($j = 0; $j < count($resp); $j++){
									$n = $j + 1;
						
                        			echo "<div class='coluna' style='margin-left: 10px; margin-top: 7px; width: 10px;'>".$n."</div>";
									echo "<div class='coluna' style='margin-left: 15px; margin-top: 7px; width: 730px;'>".utf8_encode($resp[$j]['res_desc'])."</div>";
                            
                       
								}
						}
                        	echo "</div>";
				echo "</div>";
				echo "<div style='clear:both;'></div>";
                
			echo "</div>";
	
			}
			?>
	<a href="?module=relatorios&acao=rel_adm&semestre=<?php echo $sem?>" style="margin-left:810px; margin-top:40px;"><img src="application/images/voltar.png" title="Voltar" border="none" /></a> 

</div>

<script>
	function abrirmais(indice){
		document.getElementById('vermais'+indice).style.display = "none";
		document.getElementById('mais'+indice).style.display = "block";	
	}
</script>