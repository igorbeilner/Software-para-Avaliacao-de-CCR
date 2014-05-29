<?php
	if (isset($_GET['pro'])){
		$pro = $_GET['pro'];	
	}
?>

<div id="table">
	<h2>Relatórios de enquetes</h2>
    
    <div>
        <form action="?module=relatorios&acao=rel_professor" id="frmBusca" method="get">
            <input type="hidden" name="module" value="relatorios" />
            <input type="hidden" name="acao" value="rel_professor" />
            <a style="position:relative; top:7px; left:2px;">Selecione o semestre:</a> <br />
            <select name="semestre" style="margin-top:10px;width:200px;" onchange="location = this.options[this.selectedIndex].value;">
            <?php
				//seleciona os semestres cadastrados e disponibiliza para o usuário
				$sql = "SELECT *
						FROM semestre
						ORDER BY sem_id ASC";
				$result = $data->find('dynamic',$sql);				
				
				echo "<option value=0>Selecione</option>";
				for ($i = 0; $i <  count($result); $i++){
					$n = $i + 1;
					echo "<option value=?module=relatorios&acao=rel_professor&pro=".$pro."&semestre=".$n.">".$result[$i]['sem_ano']."/".$result[$i]['sem_parte']."</option>";
				}
			?>
            </select>
			<input style="position:relative; top:5px; left: 5px;" type="submit" value=""/>

        </form>                
    </div>
    
	<?php
		$semestre = $_GET['semestre'];
		
		if ($semestre > 0){
			$sql = "select *
					from professor as p
					where p.pro_siape =".$pro."";
				
			$res = $data->find('dynamic', $sql);
			
			$pro_cod = $res[0]['pro_cod'];
			
			$sql = "SELECT *
					FROM enquete as e join enq_disc_prof as ed
					WHERE e.enq_semestre =".$semestre." and ed.pro_cod =".$pro_cod."";
			$result = $data->find('dynamic', $sql);	
			
			
			
			//procura o status das enquetes, os nomes das disciplinas das enquetes e os códigos das disciplinas
			for ($i = 0; $i < count($result); $i++){
				$sql = "select t.enq_status, d.dis_nome, d.dis_cod, t.enq_cod from
						(select e.enq_status, ed.dis_cod, ed.enq_cod
						from enquete as e join enq_disc_prof as ed
						where ed.enq_cod =".$result[$i]['enq_cod']." and e.enq_cod =".$result[$i]['enq_cod']." and ed.pro_cod =".$pro_cod.") as t 
						join disciplina as d 
						where t.dis_cod = d.dis_cod";
						
				$res = $data->find('dynamic', $sql);
				
			}
			
			//ta retornando coisa que não deve, verificar isso.
			//tive que fazer mudanças, pq do jeito que estava, o professor podia ver as enquetes de todos, enquanto que ele só pode ver a dele.
			
			if(count($res) > 0){
				$flag = 1; //Mostrar rodapé paginação
	?>
				<div id="cab_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; margin-top:10px;">
					<div class="linha" style="width: 100%;">	
						<div class="coluna" style="float:left; width:300px; font-weight:bold; color:#000;">Disciplina</div>
						<div class="coluna" style="float:left; width:50px; font-weight:bold; color:#000; margin-left: 415px;">Estado</div>
						<div style="clear: both;"></div>
					</div>
				</div>	
	<?php
			}else{
				$sql = "select * from semestre where sem_id =".$semestre."";
				
				$result = $data->find('dynamic',$sql);	
				
				echo "<p style='font-size:18px; margin-left:30px;'> Não existem enquetes cadastradas para o semestre ".$result[0]['sem_ano']."/".$result[0]['sem_parte']."!</p>";
				$flag = 0; //Esconder rodapé paginação
			}
		
		 
			for($i = 0; $i < count($res); $i++){
			 
	?>
				<div id = "list_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px;">
					<div class="linha_sol" style="width: 100%;">
							<div class="coluna" style="float:left; width: 300px;"><a href="?module=relatorios&acao=professor_perguntas&enq=<?php echo $res[$i]['enq_cod']?>&sem=<?php echo $semestre?>" ><?php echo utf8_encode($res[$i]['dis_nome']);?></a></div>
							<?php if ($res[$i]['enq_status'] == 0){?>
								<div class="coluna" style="float: left; width: 50px; margin-left: 415px;">Desativa</div>
							<?php }else if($res[$i]['enq_status'] == 1){?>
								<div class="coluna" style="float: left; width: 50px; margin-left: 415px;">Ativa</div>
							<?php } ?>
							<div style="clear: both;"></div>
					</div>
					<div style="clear:both;"></div>
				</div>
				
	<?php
			}
	?>
		<a href="?module=relatorios&acao=professor" style="margin-left:595px;"><img src="application/images/voltar.png" title="Voltar" border="none" /></a> 
	<?php	
		}
	?>
	
	

</div>