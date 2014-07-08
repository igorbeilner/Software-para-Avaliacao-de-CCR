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
	<h2>Professores</h2>
    
    <div>
        <form action="?module=cadastros&acao=lista_cargo" id="frmBusca" method="get">
            <input type="hidden" name="module" value="cadastros" />
            <input type="hidden" name="acao" value="lista_cargo" />
            <a style="position:relative; top:7px; left:2px;">Filtrar por:</a> <br />
            <select name="tipo_filtro">
            <?php
				// Validação para que após realizado um filtro, permanecer selecionado o filtro realizado
				if($_GET['tipo_filtro'] == 'car_codigo'){
	            	echo "<option value='car_codigo' selected>Código</option>";
				}else{
					echo "<option value='car_codigo' >Código</option>";
				}
				if($_GET['tipo_filtro'] == 'car_descricao'){
                	echo "<option value='car_descricao' selected >Descrição</option>";
				}else{
					echo "<option value='car_descricao' >Descrição</option>";
				}
			?>
            </select>
            <input type="text" name="filtro" value="<?php echo $_GET['filtro']; ?>" />
            <input style="position:relative; top:7px;" type="submit" value=""/>
            <a href="?module=cadastros&acao=novo_cargo"><img style="position:relative; top:8px;" src="application/images/novo.png"></a>
        </form>                
    </div>     
    
	<?php
		if(count($result) > 0){
			$flag = 1; //Mostrar rodapé paginação
	?>

	<div class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px;">
		<div class="linha" style="width: 100%;">			
				<!-- Código com ordenação -->
				<form action="?module=cadastros&acao=lista_cargo" id="frmBusca" method="get" name="codigo">
                    <input type="hidden" name="module" value="cadastros" />
                    <input type="hidden" name="acao" value="lista_cargo" />
                    <input type="hidden" name="tipo_filtro" value="car_codigo" />                        
                    <a href="#" onclick="envia_codigo();" ><div class="coluna" title="Ordenar por Código" style="float:left; width:50px; font-weight:bold; color:#000;">C&oacute;digo</div></a>               
                </form>               
				<!-- Descrição com ordenação -->               
				<form action="?module=cadastros&acao=lista_cargo" id="frmBusca" method="get" name="descricao">
                    <input type="hidden" name="module" value="cadastros" />
                    <input type="hidden" name="acao" value="lista_cargo" />
                    <input type="hidden" name="tipo_filtro" value="car_descricao" />                        
                    <a href="#" onclick="envia_descricao();" ><div class="coluna" title="Ordenar por Descrição" style="float:left; width:450px; margin-left:10px; font-weight:bold; color:#000;">Descrição</div></a>
                </form>
                
				<div style="clear: both;"></div>
		</div>
	</div>	
	
	<?php
		}else{
			echo "<p style='font-size:18px; margin-left:30px;'> Não existe cargo cadastrado!</p>";
			$flag = 0; //Esconder rodapé paginação
		}
		 
		for($i=0;$i<count($result);$i++){
			 
	?>
            <div class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px;">
                <div class="linha_sol" style="width: 100%;">
                    
                        <div class="coluna" style="float:left; width: 50px;"><?php echo $result[$i]['pro_cod'];?></div>
                        <div class="coluna" style="float: left; width: 450px; margin-left: 10px;"><?php echo $result[$i]['pro_nome'];?></div>
                        <?php 
							if($usuario[0]['usu_permissao'] == 1){ // Somente o ADM poderá alterar
								
								
								echo "<div id='exclui".$i."' style='width:20px; float:right; border:none;' class='delete' onclick='setvalor(".$result[$i]['car_codigo'].");' title='Excluir'></div>"; // Delete											
								
								echo "<div class='coluna' style='float:right; width: 20px; text-align: center;'>";
									echo "<center><a title='Editar' href='?module=cadastros&acao=editar_cargo&id=".$result[$i]['car_codigo']."'><div class='editar'></div></a></center>";
								echo "</div>";								
							}
						?>
                        
                        <div style="clear: both;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
	<?php
		}
	?>
</div>

<script>
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

<div id="diag_excluir" title="Excluir Cargo">
	<form method="POST" action="?module=cadastros&acao=delete_cargo" name="excluir">
		<input type="hidden" name="tipo_cadastro" value='delete' /> 
		Deseja realmente excluir este Cargo?
        <input type='hidden' name='car_codigo' value=''>
	</form>
</div> 