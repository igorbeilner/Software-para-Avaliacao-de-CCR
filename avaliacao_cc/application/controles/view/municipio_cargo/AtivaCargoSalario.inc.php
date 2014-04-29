<?php
	$sql = "SELECT *
			FROM municipio
			WHERE mun_codigo = ".$_POST['mun_codigo'];
	$municipio = $data->find('dynamic',$sql);		
	
	$sql = "SELECT *
			FROM funcao
			ORDER BY fun_descricao ASC";
	$funcao = $data->find('dynamic',$sql);				

	// Cargos do município (para pegar salario base)
	$sql = "SELECT *
			FROM municipio_cargo 
			WHERE mun_codigo = ".$_POST['mun_codigo'];
	$municipio_cargo = $data->find('dynamic',$sql);	
	
	$sql = "SELECT *
			FROM municipio_cargo_funcao
			WHERE mun_codigo = ".$_POST['mun_codigo'];
	$municipio_cargo_funcao = $data->find('dynamic',$sql);		

	// Montar valores mascara
	for($i=0; $i<count($municipio_cargo); $i++){
		$salario_base[$i] = number_format($municipio_cargo[$i]['muc_salario_base'], 2, ",", ".");	
	}

	$qtd_cargo = $_POST['qtd_cargo'];
	$cont = 0;	
	for($i=0; $i<$qtd_cargo; $i++){
		if($_POST['car_codigo_'.$i] != NULL){
			$partes = explode("-", $_POST['car_codigo_'.$i]);
			$cargo_cod[$cont]  = $partes[0]; 
			$cargo_desc[$cont] = $partes[1];
			$cont++;
		}
	}	
	
	// para validar os campos ja selecionados no banco (função)
	for($i=0; $i<count($municipio_cargo_funcao); $i++){
		$var_cargo[$i]      = $municipio_cargo_funcao[$i]['car_codigo'];	
		$var_funcao[$i]     = $municipio_cargo_funcao[$i]['fun_codigo'];	
		$var_valor_base[$i] = $municipio_cargo_funcao[$i]['mcf_valor_base'];	
		$var_valor_base[$i] = number_format($var_valor_base[$i], 2, ",", ".");		
	}
?>
<style type="text/css">
	/* Campo salario */
	.txtarea{
		height: 23px;
		border-radius: 4px;		
	}
	/* Select da função */
	.selarea{
		height: 28px;
		border-radius: 4px;				
	}
</style>

<body onLoad="inicia_campos_auto();">
<div id="table">
	<h2>Ativar Cargos - salario</h2>
		
        <form action="?module=controles&acao=grava_cargo_salario_funcao" id="frmCadastro" method="post">
            
            <!-- Envia a quantidade de cargos selecionados para melhor validar no datacontrols -->
            <input type="hidden" name="qtd" value="<?php echo $cont; ?>" />
            <input type="hidden" name="mun_codigo" value="<?php echo $municipio[0]['mun_codigo']; ?>"  />
                        
            <div class="linha">
                <div style="width: 311px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Município:</div>
                <div style="clear: both;"></div>
                
                <div class="coluna" style="margin-right: 23px; margin-left:0px;">
                    <input type="text" name="mun_codigo" value="<?php echo $municipio[0]['mun_nome']; ?>"  disabled  />
                </div>
                <div style="clear: both;"></div>           
            </div>        
            
            <!-- Cargos -->
            <div class="linha">
                <div style="width: 311px; margin-top: 8px; margin-left:0px; margin-bottom:0px; font-weight:bold;" class="coluna">Cargos Selecionados:</div>
                <div style="width: 94px; margin-top: 8px; margin-left:10px; margin-bottom:0px; font-weight:bold;" class="coluna">Salário Base:</div>
                <div style="width: 257px; margin-top: 8px; margin-left:10px; margin-bottom:0px; font-weight:bold; display:none;" id='cab_funcao' class="coluna">Função:</div>
                <div style="width: 100px; margin-top: 8px; margin-left:10px; margin-bottom:0px; font-weight:bold; display:none;" id='cab_valor_funcao' class="coluna">Valor Função:</div>
                <div style="clear: both;"></div>
                <?php
					echo "<table>";					
					$indice = 0;
					$indice_valor = 0;
					for($i=0; $i<$cont; $i++){						
						$cont_func = 0;
						echo "<td>"; // Coluna dos cargos
							echo "<input type='hidden' name='car_codigo_".$i."' value='".$cargo_cod[$i]."' >"; // Envia os codigos dos cargos via hidden					
							echo "<div style='background:#FFF; border-radius:5px; width:300px;' >";
							echo "<font style='font-size:13px; position: relative; top:7px;' >&nbsp;<div id='campo_cargo_".$i."' style='position: relative; top:-13px; margin-left:7px;' >".$cargo_desc[$i]."</div></font>";		
							echo "</div>";
						echo "</td>";						
						
						echo "<td>"; // Coluna dos salários base
							echo "<a style='' >
									R$<input type='text' name='muc_salario_base_".$i."' onKeyPress=\"return(MascaraMoeda(this,'.',',',event))\" size='8' placeholder='Salário base' onfocus='destacar_cargo(".$i.");' onblur='desmarcar_campo(".$i.");' id='base_salario_".$i."' class='txtarea' value='".$salario_base[$i]."' >
									<img src='application/images/insert.png' onclick='mostra_funcao(".$i.",".$cont_func.");' title='Inserir função' style='position:relative; top:2px; margin-left:-3px; cursor:pointer;' >								
								</a>";						
						echo "</td>";
						// Laço para mostrar mais de uma função por cargo...
						for($cont_func=0; $cont_func < 5; $cont_func++){
							// SELECIONA A FUNÇÃO, 2 OPÇÕES POIS A PARTIR DA SEGUNDA ELA DEVE ALINHAR A DIREITA
							echo "<td>";
								// Seleciona a função
								if($cont_func == 0){
									echo "<select name='".$i."_funcodigo_".$cont_func."' class='selarea' id='car_".$i."_fun_".$cont_func."' onfocus='destacar_cargo(".$i.");' onblur='desmarcar_campo(".$i.");' style='position:relative; top:-2px; width:250px; display:none;' >";
									echo "<option value='' >SELECIONAR</option>";									
									for($j=0; $j<count($funcao); $j++){
										if($cargo_cod[$i] == $var_cargo[$indice] && $funcao[$j]['fun_codigo'] == $var_funcao[$indice]['fun_codigo']){
											$flag = 1;
											echo "<option value='".$i."_".$funcao[$j]['fun_codigo']."_".$cont_func."' selected >".$funcao[$j]['fun_descricao']."</option>";	
										}else{
											echo "<option value='".$i."_".$funcao[$j]['fun_codigo']."_".$cont_func."' >".$funcao[$j]['fun_descricao']."</option>";	
										}
									}
									echo "</select>";
								}else{
									echo "<select name='".$i."_funcodigo_".$cont_func."' class='selarea' id='car_".$i."_fun_".$cont_func."' onfocus='destacar_cargo(".$i.");' onblur='desmarcar_campo(".$i.");' style='position:relative; top:-2px; left:420px; width:250px; display:none;' >";
									echo "<option value='' >SELECIONAR</option>";

									for($j=0; $j<count($funcao); $j++){
										if($cargo_cod[$i] == $var_cargo[$indice] && $funcao[$j]['fun_codigo'] == $var_funcao[$indice]['fun_codigo']){
											$flag = 1;
											echo "<option value='".$i."_".$funcao[$j]['fun_codigo']."_".$cont_func."' selected style='display:none;' >".$funcao[$j]['fun_descricao']."</option>";	
										}else{
											echo "<option value='".$i."_".$funcao[$j]['fun_codigo']."_".$cont_func."' >".$funcao[$j]['fun_descricao']."</option>";	
										}
									}
									echo "</select>";								
								}
							echo "</td>";							
							// INSERE O VALOR DA FUNÇÃO, 2 OPÇÕES POIS A PARTIR DA SEGUNDA ELA DEVE ALINHAR A DIREITA							
							echo "<td>";
								// Valor da função	
								if($cont_func == 0){
									echo "<a id='carVlr_".$i."_fun_".$cont_func."' style='position:relative; top:-2px; display:none;' >";									
								}else{
									echo "<a id='carVlr_".$i."_fun_".$cont_func."' style='position:relative; top:-2px; left:370px; display:none;' >";
								}
								
								if($cargo_cod[$i] == $var_cargo[$indice]){
									echo "R$<input type='text' name='".$i."_valorbase_".$cont_func."' value='".$var_valor_base[$indice]."' size='8' onKeyPress=\"return(MascaraMoeda(this,'.',',',event))\" placeholder='Valor função' class='txtarea' onfocus='destacar_cargo(".$i.");' onblur='desmarcar_campo(".$i.");' >";
								}else{
									echo "R$<input type='text' name='".$i."_valorbase_".$cont_func."' size='8' onKeyPress=\"return(MascaraMoeda(this,'.',',',event))\" placeholder='Valor função' class='txtarea' onfocus='destacar_cargo(".$i.");' onblur='desmarcar_campo(".$i.");' >";
								}									
								
								
								echo "<img src='application/images/insert.png' onclick='mais_funcao(".$i.",".$cont_func.");' title='Inserir mais função' style='position:relative; top:2px; cursor:pointer;' >";
							echo "</a>";
							echo "</td>";
							echo "<tr>";	
							//if($var_cargo[$indice] == $var_cargo[$indice+1]){
								//$indice++;					
							//}
							if($flag == 1){
								$indice++;
								$flag = 0;	
							}									
						} // Fim do laço que mostra varias funções por cargo						
					} // Fim do laço dos cargos
					echo "</table>";
				?>
                                
                
                <div style="clear: both;"></div>
                
                <div class="coluna" style="margin-right: 23px; margin-left:0px; ">						
				

                </div>
                <div style="clear: both;"></div>           
            </div>        
            <br /><br />
            
            <!-- Botão Atualizar -->
            <div class="coluna">
                <a onClick="valida_form();" href="#"><img src="application/images/atualizar.png" style='border: none; cursor:pointer; background:none;'/></a>
            </div>  
            
            <!-- Botão Cancelar -->        
            <div class="coluna" >
                <a href="?module=cadastros&acao=lista_cargo"><img src="application/images/cancelar.png" /></a>
            </div>

            <!-- Botão Voltar -->        
            <div class="coluna" >
                <a href="?module=controles&acao=ativa_cargo_seleciona&mun_codigo=<?php echo $_POST['mun_codigo']; ?>"><img src="application/images/voltar.png" /></a>
            </div>


        </form>        

</div>
</body>

<script language="javascript"> 

	function inicia_campos_auto(){
		var total_cargos, total_funcoes, i, j;
		total_cargos  = "<?php echo $cont; ?>";
		total_funcoes = 5;
		for(i=0; i< total_cargos; i++){
			for(j=0; j< total_funcoes; j++){
				if(document.getElementById("car_"+i+"_fun_"+j).value != ""){
					document.getElementById("cab_funcao").style.display = "block"; // Mostra o cabeçalho das funções
					document.getElementById("cab_valor_funcao").style.display = "block"; 					
					document.getElementById("car_"+i+"_fun_"+j).style.display = "block"; // Mostra a função selecionada			
					document.getElementById("carVlr_"+i+"_fun_"+j).style.display = "block"; 		
				}
			}
		}
	}

	function destacar_cargo(position){
		document.getElementById('campo_cargo_'+position).style.color = "#2d75d1";	
		document.getElementById('campo_cargo_'+position).style.fontWeight = "bold";			
	}
	
	function desmarcar_campo(position){
		document.getElementById('campo_cargo_'+position).style.color = "black";	
		document.getElementById('campo_cargo_'+position).style.fontWeight = "normal";					
	}
	
	function mostra_funcao(i, func){
		document.getElementById("cab_funcao").style.display = "block"; // Mostra o cabeçalho das funções
		document.getElementById("cab_valor_funcao").style.display = "block"; 		
		document.getElementById("car_"+i+"_fun_"+func).style.display = "block"; // Mostra a função selecionada			
		document.getElementById("carVlr_"+i+"_fun_"+func).style.display = "block"; 	
	}
	
	function mais_funcao(i, func){
		func = func + 1;
		document.getElementById("car_"+i+"_fun_"+func).style.display = "block"; 
		document.getElementById("carVlr_"+i+"_fun_"+func).style.display = "block"; 				
	}
	
	function valida_form(){
		document.forms['frmCadastro'].submit();	
	}	
	
	// Mascara
	function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
		var sep = 0;
		var key = '';
		var i = j = 0;
		var len = len2 = 0;
		var strCheck = '0123456789';
		var aux = aux2 = '';
		var whichCode = (window.Event) ? e.which : e.keyCode;
		if (whichCode == 13 || whichCode == 8) return true;
		key = String.fromCharCode(whichCode); // Valor para o código da Chave
		if (strCheck.indexOf(key) == -1) return false; // Chave inválida
		len = objTextBox.value.length;
		for(i = 0; i < len; i++)
			if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
		aux = '';
		for(; i < len; i++)
			if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
		aux += key;
		len = aux.length;
		if (len == 0) objTextBox.value = '';
		if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
		if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
		if (len > 2) {
			aux2 = '';
			for (j = 0, i = len - 3; i >= 0; i--) {
				if (j == 3) {
					aux2 += SeparadorMilesimo;
					j = 0;
				}
				aux2 += aux.charAt(i);
				j++;
			}
			objTextBox.value = '';
			len2 = aux2.length;
			for (i = len2 - 1; i >= 0; i--)
			objTextBox.value += aux2.charAt(i);
			objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
		}
		return false;
	}

	// Fim Mascara
</script>