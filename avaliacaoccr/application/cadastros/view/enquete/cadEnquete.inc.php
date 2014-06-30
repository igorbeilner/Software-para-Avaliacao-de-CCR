<?php 
	// ALTERNATIVAS ESCALA
	$sql = "SELECT *
			FROM perguntas				
			WHERE per_tipo = 1
			ORDER BY per_desc ASC";
	$pergunta1 = $data->find('dynamic',$sql);				

	$sql = "SELECT *
			FROM perguntas
			WHERE per_tipo = 2
			ORDER BY per_desc ASC";
	$pergunta2 = $data->find('dynamic',$sql);				
	
	for($i=0;$i<count($pergunta1);$i++){
		$perg1 .= "\"".trim($pergunta1[$i]['per_cod'])." - ".trim($pergunta1[$i]['per_desc'])."\",";
	}	
	
	for($i=0;$i<count($pergunta2);$i++){
		$perg2 .= "\"".trim($pergunta2[$i]['per_cod'])." - ".trim($pergunta2[$i]['per_desc'])."\",";
	}	

?>


<div id="table">
	<h2>Cadastro de Enquete</h2>
    <form action="?module=cadastros&acao=gravar_enquete" id="frmCadastro" method="post">
        
        
        <div class="linha">
            <div style="width: 190px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Nome da Enquete:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="enq_nome" id="enq_nome" type="text" size="61" placeholder="Avaliação de componente curricular" style="text-transform: uppercase;" />
            </div>
            <div style="clear: both;"></div>           
		</div>        

        <div class="linha">
            <div style="width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Semestre:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="enq_semestre" maxlength="6" id="enq_semestre" type="text" size="3" placeholder="2014/2" />
            </div>
            <div style="clear: both;"></div>           
		</div>        
		
        <div class="linha">
            <div style="width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Data:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="enq_data" maxlength="10" id="enq_data" onKeyPress="MascaraData(this);" type="text" size="7" placeholder="<?php echo date("d/m/Y"); ?>" style="text-transform: lowercase;" />
            </div>
            <div style="clear: both;"></div>           
		</div>       

        <div class="linha">
            <div style="width: 300px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Situação da Enquete:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input type='radio' name='enq_status' value='1' checked style='position:relative; top:3px;' >Ativa
				<input type='radio' name='enq_status' value='0' style='position:relative; top:3px;'>Inativa
            </div>
            <div style="clear: both;"></div>           
		</div>     		
		
        <div class="linha">
            <div style="width: 300px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Nº de Respostas Esperadas:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="enq_num_resp_esp" maxlength="3" id="enq_num_resp_esp" type="text" size="3"  />
            </div>
            <div style="clear: both;"></div>           
		</div>       		
		
		<input type='hidden' name='enq_num_perg' id='enq_num_perg' />
		
<?php
		$vector_options = array();
		for($j=1; $j<= 30; $j++){

			// PERGUNTA TEXTO
			echo "<div class='linha' id='tipo_texto_".$j."' style='display:none;'>";
				echo "<div style='width: 200px; margin-top: 8px; margin-left:0px; font-weight:bold;' class='coluna'  >Descrição da pergunta ".$j.":</div>";
				echo "<div style='clear: both;'></div>";
					
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input name='per_desc_".$j."_texto' id='desc_".$j."' type='text' size='61' style='text-transform: uppercase;' />&nbsp;&nbsp;";
					echo "<input type='hidden' name='tipo_".$j."' />";
					echo "<a onclick='delete_pergunta_texto(".$j.");' ><img src='application/images/delete.png' style='cursor:pointer;'></a>&nbsp;&nbsp;";
					echo "<a onclick='clone(".$j.", 3)';><img src='application/images/copy.png' style='cursor:pointer;'></a>&nbsp;&nbsp;";
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";	
		
			// PERGUNTA ESCALA
			echo "<div class='linha' id='tipo_unica_escolha_".$j."' style='display:none;'>";
				echo "<div style='width: 200px; margin-top: 8px; margin-left:0px; font-weight:bold;' class='coluna'>Descrição da pergunta ".$j.":</div>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";

					echo "<input name='per_desc_".$j."_escala' id='desc_escolha_".$j."' type='text' size='61' style='text-transform: uppercase;' />&nbsp;&nbsp;";
					echo "<input type='hidden' name='tipo_".$j."' />";
					echo "<a onclick='delete_pergunta(".$j.");' ><img src='application/images/delete.png' style='cursor:pointer;'></a>&nbsp;&nbsp;";
					echo "<a onclick='clone(".$j.", 1)';><img src='application/images/copy.png' style='cursor:pointer;'></a>&nbsp;&nbsp;";
					echo "<a onclick='mostra_alter(".$j.");'><img src='application/images/mais.png' title='Inserir alternativa' style='cursor:pointer;'/></a>&nbsp;&nbsp;";

				echo "</div>";
				
					echo "<div class='linha'   >";
					echo "<div style='clear: both;'></div>";
					//ALTERNATIVAS
					for ($i = 1; $i <= 10; $i++) {
						echo "<div id='alter_".$j."_".$i."' style='display:none;'>";
							echo "<div style='clear: both;'></div>";
							echo "<div class='coluna' > Alternativa ".$i."</div>";
							echo "<div style='clear: both;'></div>";
							echo "<div class='coluna' > 
									<input type='text' name='alter_".$j."_".$i."' id='desc_alter_".$j."_".$i."'> 
								 </div>";
							echo "<a onclick='delete_alternativa(".$j.", ".$i.");' ><img src='application/images/delete.png' style='cursor:pointer;' /></a>";
						echo "</div>";
					}
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";	

			// CAMPOS INPUTS DE PERGUNTAS CARREGADAS DO BANCO			
			// escala
			echo "<div id='cab_escala_".$j."' style='display:none; font-weight:bold;'>Descrição da pergunta: ".$j."</div>";
			echo "<input type='text' name='escala_ac_".$j."' id='escala_ac_".$j."' size='80' placeholder='BUSCA ESCALA' style='display:none;' onClick='busca(this.value, ".$j.");' >"; 
			echo "<a id='btn_clone_escala_".$j."' style='display:none;' onclick='clone(".$j.", 2)' ;><img src='application/images/copy.png' style='cursor:pointer;'></a>";	
			// Alternativas da escala (AJAX)
			echo "<div id='resultado_busca'></div>";
			// texto
			echo "<div id='cab_texto_".$j."' style='display:none; font-weight:bold;'>Descrição da pergunta: ".$j."</div>";
			echo "<input type='text' name='texto_ac_".$j."' id='texto_ac_".$j."' size='80' placeholder='BUSCA TEXTO' style='display:none;' >";
			
		}		
?>
   
        <div class="linha"><br/>
            <div id="tipo_pergunta_cab" style="width: 190px; margin-top: 8px; margin-left:0px; font-weight:bold; display:none;" class="coluna">Tipo de Pergunta:</div>
            <div style="clear: both;"></div>  
			<div id="tipo_pergunta_sel" class="coluna" style="left: 0px; top:10px; display:none;">

                <select id="selecao_tipo" name="selecao" onchange="ativa_campo(this.value);"  >
                	<option value="" >Selecione o tipo de pergunta</option>
                    <option value="1" >Escala</option>
                	<option value="3" >Texto</option>                    
                </select>

            </div>
            <div style="clear: both;"></div>           
		</div>        
        <div style="clear: both;"></div>               

		<!-- Seleciona o tipo de pergunta das perguntas do BANCO -->
        <div class="linha">
            <div id="tipo_pergunta_cab_banco" style="width: 190px; margin-top: 8px; margin-left:0px; font-weight:bold; display:none;" class="coluna">Tipo de Pergunta(banco):</div>
            <div style="clear: both;"></div>  
			<div id="tipo_pergunta_sel_banco" class="coluna" style="left: 0px; top:10px; display:none;">
                <select id="selecao_tipo_banco" name="" onchange="ativa_campo_busca(this.value);"  >
                	<option value="" >Selecione o tipo de pergunta</option>
                    <option value="1" >Escala</option>
                	<option value="2" >Texto</option>                    
                </select>
            </div>
            <div style="clear: both;"></div>           
		</div>        
		
        <br /><br />	
		<div class="coluna"><img src="application/images/nova_pergunta.png" onclick="ativa_tipo_pergunta();" /></div>
		<div class="coluna"><img src="application/images/importa_pergunta.png" onclick="ativa_btn_importar();" style='margin-left:3px;' /></div><br/><br/><br/>

        <!-- Botão Salvar -->
        <div class="coluna">
            <a onclick="valida_form();" href="#"><img src="application/images/salvar.png" style='border: none; cursor:pointer; background:none;'/></a>
        </div>  
        
        <!-- Botão Cancelar -->        
        <div class="coluna" >
            <a href="?module=cadastros&acao=lista_usuario"><img src="application/images/cancelar.png" /></a>
        </div>
	</form>		
</div>

<script>
 
 	function delete_alter(indice){
 		document.getElementById("alter_"+indice).style.display     = "none";
 		document.getElementById("alter_btn_"+indice).style.display = "none"; 		
 	}

	var num_perg = 0;
	var perguntas = []; //guarda o número de alternativas em cada pergunta
	var i;
	for (i = 1; i <= 15; i++){
		perguntas.push(1);	
	}
	
	
	function busca(per_cod, indice_pergunta){
		var url = "application/script/php/busca.php?per_cod="+per_cod+"&indice_pergunta="+indice_pergunta;
		var div = "resultado_busca";
		mostraConteudo(url, div);
	}
	
	
	function ativa_campo_busca(tipo){
		num_perg++;
		if(tipo == 1){ // escala
			document.getElementById('cab_escala_'+num_perg).style.display = "block";
			document.getElementById('escala_ac_'+num_perg).style.display = "block";
			document.getElementById('btn_clone_escala_'+num_perg).style.display = "block";			
			
			document.getElementById('tipo_pergunta_cab_banco').style.display = "none";
			document.getElementById('tipo_pergunta_sel_banco').style.display = "none";	
			document.getElementById('selecao_tipo_banco').value = "";
		}
		else{ // texto		
			document.getElementById('cab_texto_'+num_perg).style.display = "block";
			document.getElementById('texto_ac_'+num_perg).style.display = "block";
			document.getElementById('tipo_pergunta_cab_banco').style.display = "none";
			document.getElementById('tipo_pergunta_sel_banco').style.display = "none";
			document.getElementById('selecao_tipo_banco').value = "";			
		}
	}
	
	
	function mostra_alter(indice_pergunta) {		
		document.getElementById("alter_"+indice_pergunta+"_"+perguntas[indice_pergunta]).style.display = "block";
		perguntas[indice_pergunta]++;
	}
	
	function delete_pergunta_texto(indice_pergunta){
		num_perg--;
		document.getElementById("tipo_texto_"+indice_pergunta).value = "";
		document.getElementById("tipo_texto_"+indice_pergunta).style.display = "none";
		
	}
	
	function delete_pergunta(indice_pergunta){
		var i;
		num_perg--;
		// excluir cabeçalho e botões....
		document.getElementById("tipo_unica_escolha_"+indice_pergunta).style.display = "none";
		document.getElementById("tipo_unica_escolha_"+indice_pergunta).value = "";
		
		// excluindo alternativas da pergunta
		for(i = 1; i <= perguntas[indice_pergunta]; i++){		
			document.getElementById("alter_"+indice_pergunta+"_"+i).style.display = "none";	
		}
	}
	
	function delete_alternativa(indice_perg, indice_alter){
		document.getElementById("alter_"+indice_perg+"_"+indice_alter).style.display = "none";
		perguntas[indice_perg]--;
	}
	
	function ativa_tipo_pergunta(){
		document.getElementById("tipo_pergunta_cab").style.display = "block";	
		document.getElementById("tipo_pergunta_sel").style.display = "block";			
	}
	
	function ativa_btn_importar(){
		document.getElementById("tipo_pergunta_cab_banco").style.display = "block";	
		document.getElementById("tipo_pergunta_sel_banco").style.display = "block";			
	}
	
	function clone(indice_pergunta, type){
		var desc_perg;
		num_perg += 1;
		if (type == 1){ // ESCALA
			document.getElementById("tipo_unica_escolha_"+num_perg).style.display = "block";
			document.getElementById("selecao_tipo").value = "";	
			document.getElementById("tipo_pergunta_cab").style.display = "none";				
			document.getElementById("tipo_pergunta_sel").style.display = "none";
			
			desc_perg = document.getElementById("desc_escolha_"+indice_pergunta).value;
			document.getElementById("desc_escolha_"+num_perg).value = desc_perg;
			
			var i;
			for (i = 1; i < perguntas[indice_pergunta]; i++){
				document.getElementById("alter_"+num_perg+"_"+i).style.display = "block";
				desc_perg = document.getElementById("desc_alter_"+indice_pergunta+"_"+i).value;
				document.getElementById("desc_alter_"+num_perg+"_"+i).value = desc_perg;
				perguntas[num_perg]++;
			}
			
		}else 
		if(type == 2){ // ESCALA, CARREGADAS DO BANCO
			document.getElementById("cab_escala_"+num_perg).style.display = "block";
			document.getElementById("escala_ac_"+num_perg).style.display = "block";			
			
			document.getElementById("selecao_tipo_banco").value = "";	
			document.getElementById("tipo_pergunta_cab_banco").style.display = "none";				
			document.getElementById("tipo_pergunta_sel_banco").style.display = "none";
			
			desc_perg = document.getElementById("escala_ac_"+indice_pergunta).value;
			document.getElementById("escala_ac_"+num_perg).value = desc_perg;
			
			var i;
			for (i = 1; i < perguntas[indice_pergunta]; i++){
				document.getElementById("alter_"+num_perg+"_"+i).style.display = "block";
				desc_perg = document.getElementById("alter_"+indice_pergunta+"_"+i).value;
				document.getElementById("alter_"+num_perg+"_"+i).value = desc_perg;
				perguntas[num_perg]++;
			}
		}else		
		if(type == 3){ // TEXTO
			document.getElementById("tipo_texto_"+num_perg).style.display = "block";
			document.getElementById("selecao_tipo").value = "";	
			document.getElementById("tipo_pergunta_cab").style.display = "none";				
			document.getElementById("tipo_pergunta_sel").style.display = "none";
			
			desc_perg = document.getElementById("desc_"+indice_pergunta).value;
			document.getElementById("desc_"+num_perg).value = desc_perg;	
		}
		
		
	}
	
	function ativa_campo(valor){
		num_perg = num_perg + 1;		
		if(valor == 1){
			document.getElementById("tipo_unica_escolha_"+num_perg).style.display = "block";
			document.getElementById("selecao_tipo").value = "";	
			document.getElementById("tipo_pergunta_cab").style.display = "none";				
			document.getElementById("tipo_pergunta_sel").style.display = "none";			
		}else
		if(valor == 3){
			document.getElementById("tipo_texto_"+num_perg).style.display = "block";
			document.getElementById("selecao_tipo").value = "";	
			document.getElementById("tipo_pergunta_cab").style.display = "none";				
			document.getElementById("tipo_pergunta_sel").style.display = "none";						
		}
	}

	function valida_form(){
		var mensagem, id;
		if (document.getElementById('enq_nome').value == ''){ 
			mensagem = "É necessário preencher o nome da enquete!";
			id       = "enq_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_semestre').value == ''){ 
			mensagem = "É necessário preencher o semestre!";
			id       = "enq_semestre";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_data').value == ''){ 
			mensagem = "É necessário preencher a data da enquete!";
			id       = "enq_data";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_num_resp_esp').value == ''){ 
			mensagem = "É necessário preencher o número de respostas esperadas!";
			id       = "enq_num_resp_esp";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else{
			document.getElementById('enq_num_perg').value = num_perg;
			document.forms['frmCadastro'].submit();	
		}
	}
	var i;	
	$(document).ready(function(){
		for(i=0; i<15; i++){	
			$('input#escala_ac_'+i).autocomplete({
				source: [<?php echo $perg1; ?>]
			})
		}
	});	

	$(document).ready(function(){
		for(i=0; i<15; i++){	
			$("input#texto_ac_"+i).autocomplete({
				source: [<?php echo $perg2; ?>]
			})
		}
	});	
	
	
	<!-- Calendário da Data -->
	$(document).ready( function() {
		$("#enq_data").datepicker({
			dateFormat: 'dd/mm/yy',
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
				nextText: 'Próximo',
				prevText: 'Anterior', 
				changeMonth: true,
				changeYear: true	
		});
	});		
	
</script>