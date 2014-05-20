<?php
	// Permissão do usuário para validar se poderá alterar os dados...
	/*
	$sql = "SELECT *
			FROM professor
			WHERE pro_siape = ".$_SESSION['userId'];
	$usuario = $data->find('dynamic',$sql);			
	

	$sql = "SELECT *
			 FROM professor";
	if($_GET['filtro'] == ''){
		$sql .= '';
	}if($_GET['filtro'] != ''){
		$sql .= ' WHERE '.$_GET['tipo_filtro'].' LIKE "%'.$_GET['filtro'].'%"';
	}else{
		if($_GET['tipo_filtro'] == 'pro_cod'){
			$sql .= ' ORDER BY pro_cod ASC';	
		}else
			if($_GET['tipo_filtro'] == 'pro_nome'){
				$sql .= ' ORDER BY pro_nome ASC';	
			}else{
				$sql .= '';	
			}
	}
	$result = $data->find('dynamic',$sql);
	*/
?>

<div id="table">
	<h2>Menu</h2>
    
    <div>
        <form action="?module=relatorios&acao=professor" id="frmBusca" method="get">
            <input type="hidden" name="module" value="relatorios" />
            <input type="hidden" name="acao" value="professor" />
            <a style="position:relative; top:7px; left:2px;">Selecione o semestre:</a> <br />
            <select name="semestre" style="margin-top:10px;width:200px;">
            <?php
				//seleciona os semestres cadastrados e disponibiliza para o usuário
				$sql = "SELECT *
						FROM semestre
						ORDER BY sem_id ASC";
				$result = $data->find('dynamic',$sql);				
				
				echo "<option value=0>Selecione</option>";
				for ($i = 0; $i <  count($result); $i++){
					$n = $i + 1;
					echo "<option value=".$n.">".$result[$i]['sem_ano']."/".$result[$i]['sem_parte']."</option>";
				}
			?>
            </select>
			<input style="position:relative; top:5px; left: 5px;" type="submit" value=""/>

        </form>                
    </div>
    
	<?php
		$semestre = $_GET['semestre'];
		
		if ($semestre > 0){
		
			$sql = "SELECT *
					FROM enquete
					WHERE enq_semestre =".$semestre."";
			$result = $data->find('dynamic',$sql);	
			
			for ($i = 0; $i < count($result); $i++){
				$sql = "select t.enq_status, d.dis_nome, d.dis_cod from
						(select e.enq_status, ed.dis_cod, ed.enq_cod
						from enquete as e join enquete_disciplina as ed
						where ed.enq_cod =".$result[$i]['enq_cod']." and e.enq_cod =".$result[$i]['enq_cod'].") as t join disciplina as d 
						where t.dis_cod = d.dis_cod";
						
				$res = $data->find('dynamic', $sql);
			}
			
			if(count($result) > 0){
				$flag = 1; //Mostrar rodapé paginação
	?>
				<div class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; margin-top:10px;">
					<div class="linha" style="width: 100%;">	
						<div class="coluna" style="float:left; width:300px; font-weight:bold; color:#000;">Disciplina</div>
						<div class="coluna" style="float:left; width:50px; font-weight:bold; color:#000; margin-left: 400px;">Status</div>
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
				<div class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px;">
					<div class="linha_sol" style="width: 100%;">
							<div class="coluna" style="float:left; width: 300px;" onclick="show_questions('<?php echo $res[$i]['dis_cod'] ?>')"><?php echo utf8_encode($res[$i]['dis_nome']);?></div>
							<div class="coluna" style="float: left; width: 50px; margin-left: 420px;"><?php echo utf8_encode($res[$i]['enq_status']);?></div>							
							<div style="clear: both;"></div>
					</div>
					<div style="clear:both;"></div>
				</div>
	<?php
			}
		}
	?>
</div>

<script>
	function show_questions(valor){
		alert(valor);
	}


	function envia_codigo(){
		document.forms['codigo'].submit();
	}

	function envia_descricao(){
		document.forms['descricao'].submit();			
	}
	
	function setvalor(valor){	
		document.excluir.car_codigo.value = valor;
	}
	
	$(function() {
		$( "#diag_excluir" ).dialog({
				autoOpen: false,
				resizable: false,
				height: 130,
				width: 320,
				hide: "clip",
				modal: true,
				resize: false,
				buttons: {
					Excluir: function() {
						document.forms["excluir"].submit();
						$(this).dialog( "close" );
					},
						
					Cancelar: function() {
						$( this ).dialog("close");
					}
				}
		});
		
		for(i=0; i< <?php echo count($result); ?>; i++){
			funcao = "#exclui"+i;
			$(funcao)
				.button()
				.click(function() {
					$("#diag_excluir").dialog("open");
					
			});
		}
	});	

</script>