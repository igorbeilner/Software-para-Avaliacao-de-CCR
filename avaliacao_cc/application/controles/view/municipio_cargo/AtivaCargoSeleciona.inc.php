<?php
	if($_SESSION['userPermissao'] == 1){
		// verificações p/ validar sql quando utilizar o botão voltar da pagina seguinte...
		if($_GET['mun_codigo'] != NULL){
			$municipio = $_GET['mun_codigo'];	
		}else{
			$municipio = $_POST['mun_codigo'];	
		}		
		$sql = "SELECT *
				FROM municipio
				WHERE mun_codigo = ".$municipio;
		$municipio = $data->find('dynamic',$sql);			
	}else{
		$sql = "SELECT *
				FROM usuario AS u
					JOIN municipio AS m ON (u.mun_codigo = m.mun_codigo)
				WHERE usu_codigo = ".$_SESSION['userId'];
		$municipio = $data->find('dynamic',$sql);			
	}
	
	$sql = "SELECT *
			FROM cargo
			ORDER BY car_descricao ASC";
	$cargos = $data->find('dynamic',$sql);

	// Cargos do municipio
	$sql = "SELECT *
			FROM municipio_cargo
			WHERE mun_codigo = ".$municipio[0]['mun_codigo'];
	$municipio_cargo = $data->find('dynamic',$sql);
	


?>

<div id="table">
	<h2>Ativar Cargos</h2>
		
        <form action="?module=controles&acao=ativa_cargo_salario" id="frmCadastro" method="post">
            <div class="linha">
                <div style="width: 311px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Município:</div>
                <div style="clear: both;"></div>
                
                <div class="coluna" style="margin-right: 23px; margin-left:0px;">
                    <input type="text" name="mun_codigo" value="<?php echo $municipio[0]['mun_nome']; ?>" disabled  />
                </div>
                <div style="clear: both;"></div>           
            </div>        
            
            <!-- Cargos -->
            <div class="linha">
                <div style="width: 311px; margin-top: 8px; margin-left:0px; margin-bottom:10px; font-weight:bold;" class="coluna">Cargos:</div>
                <div style="clear: both;"></div>
                
                <div class="coluna" style="margin-right: 23px; margin-left:0px;">						
                    <?php
                        echo "<table>";
                        for($i=0; $i<count($cargos); $i++){
                            echo "<td>";
                            echo "<div style='width:397px; border-radius:5px; background-color: #FFF;' >";
							// Para validar quais campos já estão marcados, salvos no banco
							$selecionado = 0;
                            for($j=0; $j<count($municipio_cargo); $j++){
								if($municipio_cargo[$j]['car_codigo'] == $cargos[$i]['car_codigo']){
									$selecionado = 1;
								}
							}
							if($selecionado == 1){ // Campo selecionado
								echo "<input type='checkbox' id='cargo_".$i."' name='car_codigo_".$i."' value='".$cargos[$i]['car_codigo']."-".$cargos[$i]['car_descricao']."' style='position:relative; top:3px;' checked >";
								echo "<a href='#' onclick='setar_campo(".$i.");' style='text-decoration:none; color:#000;' >".$cargos[$i]['car_descricao']."&nbsp;&nbsp;<br /><br />";									
							}else{
								echo "<input type='checkbox' id='cargo_".$i."' name='car_codigo_".$i."' value='".$cargos[$i]['car_codigo']."-".$cargos[$i]['car_descricao']."' style='position:relative; top:3px;' > ";
								echo "<a href='#' onclick='setar_campo(".$i.");' style='text-decoration:none; color:#000;' >".$cargos[$i]['car_descricao']."&nbsp;&nbsp;<br /><br />";									
							}
                            echo "</div><br />";
                            echo "</a>";
                            echo "</td>";
                            if($i%2 != 0){
                                echo "<tr>";	
                            }
                        }
                        echo "</table>";
                    ?>                    
                </div>
                <div style="clear: both;"></div>           
            </div>        
            <br /><br />
            
            <input type="hidden" name="mun_codigo" value="<?php echo $municipio[0]['mun_codigo']; ?>"  />
            <input type="hidden" name="qtd_cargo" value="<?php echo count($cargos); ?>"  />
            
            <!-- Botão Próximo -->
            <div class="coluna">
                <a onclick="valida_form();" href="#"><img src="application/images/proximo.png" style='border: none; cursor:pointer; background:none;'/></a>
            </div>  
            
            <!-- Botão Cancelar -->        
            <div class="coluna" >
                <a href="?module=cadastros&acao=lista_cargo"><img src="application/images/cancelar.png" /></a>
            </div>
            
            <!-- Botão Editar -->        
            <div class="coluna" >
                <a href="?module=controles&acao=edita_cargo_seleciona&mun_codigo=<?php echo $municipio[0]['mun_codigo']; ?>"><img src="application/images/b_editar.png" /></a>
            </div>
            
			<?php
				// Botão Voltar
				if($_SESSION['userPermissao'] == 1){ // ADM
					echo "<div class='coluna' >";
						echo "<a href='?module=controles&acao=ativa_cargo'><img src='application/images/voltar.png' /></a>";
					echo "</div>";
				}
			?>
            
            
        </form>        
</div>

<script>
	function setar_campo(position){
		if(document.getElementById('cargo_'+position).checked){
			document.getElementById('cargo_'+position).checked = false;							
		}else{
			document.getElementById('cargo_'+position).checked = true;			
		}
	}

	function valida_form(){
		var i, flag=0, cont=0, mensagem, id;
		// Verifica se há pelo menos um campo selecionado
		for(i=0; i<<?php echo count($cargos); ?>; i++){
			if(document.getElementById('cargo_'+i).checked){
				flag = 1;
				cont++;				
			}	
		}		
		if(flag == 0){ // Nenhum campo setado
			mensagem = "É necessário selecionar pelo menos 1 cargo!";
			id       = "";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else{ // Ok
			document.forms['frmCadastro'].submit();	
		}
	}
</script>