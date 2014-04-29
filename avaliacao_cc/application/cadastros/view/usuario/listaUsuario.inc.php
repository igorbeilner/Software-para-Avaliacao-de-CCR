<?php
	$pg = new Paginacao();
	
	$limite = 30;
	
	$pagina = $_GET['pag'];
	if(!$pagina){	
		$pagina = 1; 
	}
	
	// Permissão do usuário para validar se poderá alterar os dados...
	$sql = "SELECT usu_permissao
			FROM usuario
			WHERE usu_codigo = ".$_SESSION['userId'];
	$usuario_logado = $data->find('dynamic',$sql);			
	

	$sql = "SELECT *
			 FROM usuario";
	if($_GET['filtro'] == ''){
		$sql .= '';
	}if($_GET['filtro'] != ''){
		$sql .= ' WHERE '.$_GET['tipo_filtro'].' LIKE "%'.$_GET['filtro'].'%"';
	}else{
		if($_GET['tipo_filtro'] == 'usu_codigo'){
			$sql .= ' ORDER BY usu_codigo ASC';	
		}else
			if($_GET['tipo_filtro'] == 'usu_nome'){
				$sql .= ' ORDER BY usu_nome ASC';	
			}else{
				$sql .= '';	
			}
	}
	$result = $pg->gerar_paginacao($limite,$pagina,$sql);
?>

<div id="table">
	<h2>Usuários</h2>
    
    <div>
        <form action="?module=cadastros&acao=lista_usuario" id="frmBusca" method="get">
            <input type="hidden" name="module" value="cadastros" />
            <input type="hidden" name="acao" value="lista_usuario" />
            <a style="position:relative; top:7px; left:2px;">Filtrar por:</a> <br />
            <select name="tipo_filtro">
            <?php
				// Validação para que após realizado um filtro, permanecer selecionado o filtro realizado
				if($_GET['tipo_filtro'] == 'usu_codigo'){
	            	echo "<option value='usu_codigo' selected>Código</option>";
				}else{
					echo "<option value='usu_codigo' >Código</option>";
				}
				if($_GET['tipo_filtro'] == 'usu_nome'){
                	echo "<option value='usu_nome' selected >Nome</option>";
				}else{
					echo "<option value='usu_nome' >Nome</option>";
				}
			?>
            </select>
            <input type="text" name="filtro" value="<?php echo $_GET['filtro']; ?>" />
            <input style="position:relative; top:7px;" type="submit" value=""/>
            <a href="?module=cadastros&acao=novo_usuario"><img style="position:relative; top:8px;" src="application/images/novo.png"></a>
        </form>                
    </div>
    
	<?php
		if(count($result) > 0){
			$flag = 1; //Mostrar rodapé paginação
	?>

	<div class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px;">
		<div class="linha" style="width: 100%;">			
				<!-- Código com ordenação -->
				<form action="?module=cadastros&acao=lista_usuario" id="frmBusca" method="get" name="codigo">
                    <input type="hidden" name="module" value="cadastros" />
                    <input type="hidden" name="acao" value="lista_usuario" />
                    <input type="hidden" name="tipo_filtro" value="usu_codigo" />                        
                    <a href="#" onclick="envia_codigo();" ><div class="coluna" title="Ordenar por Código" style="float:left; width:50px; font-weight:bold; color:#000;">C&oacute;digo</div></a>               
                </form>               
				<!-- Nome com ordenação -->               
				<form action="?module=cadastros&acao=lista_usuario" id="frmBusca" method="get" name="nome">
                    <input type="hidden" name="module" value="cadastros" />
                    <input type="hidden" name="acao" value="lista_usuario" />
                    <input type="hidden" name="tipo_filtro" value="usu_nome" />                        
                    <a href="#" onclick="envia_nome();" ><div class="coluna" title="Ordenar por Nome" style="float:left; width:450px; margin-left:10px; font-weight:bold; color:#000;">Nome</div></a>
                </form>
                
				<div style="clear: both;"></div>
		</div>
	</div>	
	
	<?php
		}else{
			echo "<p style='font-size:18px; margin-left:30px;'> Não existe usuário cadastrado!</p>";
			$flag = 0; //Esconder rodapé paginação
		}
		 
		for($i=0;$i<count($result);$i++){
			 
	?>
            <div class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px;">
                <div class="linha_sol" style="width: 100%;">
                    
                        <div class="coluna" style="float:left; width: 50px;"><?php echo $result[$i]['usu_codigo'];?></div>
                        <div class="coluna" style="float: left; width: 450px; margin-left: 10px;"><?php echo $result[$i]['usu_nome'];?></div>
                        <?php 
							if($usuario_logado[0]['usu_permissao'] == 1){ // Somente o ADM poderá alterar								
								echo "<div id='exclui".$i."' style='width:20px; float:right; border:none;' class='delete' onclick='setvalor(".$result[$i]['usu_codigo'].");' title='Excluir'></div>"; // Delete											
								
								echo "<div class='coluna' style='float:right; width: 20px; text-align: center;'>";
									echo "<center><a title='Editar' href='?module=cadastros&acao=editar_usuario&id=".$result[$i]['usu_codigo']."'><div class='editar'></div></a></center>";
								echo "</div>";								
							}
						?>
                        
                        <div style="clear: both;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
	<?php
		}
		
		if($flag == 1){
			//Monto lista de parametros que estaram $_GET
			$nome[0]  = 'module';
			$valor[0] = 'cadastros';
			
			$nome[1]  = 'acao';
			$valor[1] = 'lista_usuario';
			
			if($_GET['tipo_filtro']){
				$nome[2]  = 'tipo_fitro';
				$valor[2] = $_GET['tipo_filtro'];
			}
			if($_GET['filtro']){
				$nome[3]  = 'filtro';
				$valor[3] = $_GET['filtro'];
			}
			
			//Chama a funcão que monta o Rodapé
			$pg->rodape(10,$pagina,$nome,$valor);		
		}
	?>
</div>

<script>
	function envia_codigo(){
		document.forms['codigo'].submit();
	}

	function envia_nome(){
		document.forms['nome'].submit();			
	}
	
	function setvalor(valor){	
		document.excluir.usu_codigo.value = valor;
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

<div id="diag_excluir" title="Excluir Usuário">
	<form method="POST" action="?module=cadastros&acao=delete_usuario" name="excluir">
		<input type="hidden" name="tipo_cadastro" value='delete' /> 
		Deseja realmente excluir este Usuário?
        <input type='hidden' name='usu_codigo' value=''>
	</form>
</div> 