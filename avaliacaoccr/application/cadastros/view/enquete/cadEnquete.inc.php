<?php 
	/*
	$sql = "SELECT *
			FROM municipio
			ORDER BY mun_nome ASC";
	$municipio = $data->find('dynamic',$sql);				
	*/
?>


<div id="table">
	<h2>Cadastro de Enquete</h2>
    <form action="#" id="frmCadastro" method="post">
        
        
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
            	<input name="enq_semestre" maxlength="6" id="enq_semestre" type="text" size="3" placeholder="2014/2" style="text-transform: lowercase;" />
            </div>
            <div style="clear: both;"></div>           
		</div>        
<?php
		
		$vector_options = array();
		for($j=1; $j<= 15; $j++){

			// PERGUNTA TEXTO
			echo "<div class='linha' id='tipo_texto_".$j."' style='display:none;'>";
				echo "<div style='width: 200px; margin-top: 8px; margin-left:0px; font-weight:bold;' class='coluna' >Descrição da pergunta ".$j.":</div>";
				echo "<div style='clear: both;'></div>";
					
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input name='per_desc' id='desc_".$j."' type='text' size='61' style='text-transform: uppercase;' />&nbsp;&nbsp;";
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

					echo "<input name='per_desc_uma_resposta_".$j."' id='desc_escolha_".$j."' type='text' size='61' style='text-transform: uppercase;' />&nbsp;&nbsp;";
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
        <br />
		<div style="clear: both;"></div>               
		<div class="coluna"><img src="application/images/nova_pergunta.png" onclick="ativa_tipo_pergunta();" /></div><br/><br/><br/>

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
	var num_perg = 0;
	var perguntas = []; //guarda o número de alternativas em cada pergunta
	var i;
	for (i = 1; i <= 15; i++){
		perguntas.push(1);	
	}
	
	function mostra_alter(indice_pergunta) {		
		document.getElementById("alter_"+indice_pergunta+"_"+perguntas[indice_pergunta]).style.display = "block";
		perguntas[indice_pergunta]++;
	}
	
	function delete_pergunta_texto(indice_pergunta){
		document.getElementById("tipo_texto_"+indice_pergunta).style.display = "none";
	}
	
	function delete_pergunta(indice_pergunta){
		var i;
		// excluir cabeçalho e botões....
		document.getElementById("tipo_unica_escolha_"+indice_pergunta).style.display = "none";
		
		// excluindo alternativas da pergunta
		for(i = 1; i <= perguntas[indice_pergunta]; i++){		
			document.getElementById("alter_"+indice_pergunta+"_"+i).style.display = "none";	
		}
	}
	
	function delete_alternativa(indice_perg, indice_alter){
		document.getElementById("alter_"+indice_perg+"_"+indice_alter).style.display = "none";
	}
	
	function ativa_tipo_pergunta(){
		document.getElementById("tipo_pergunta_cab").style.display = "block";	
		document.getElementById("tipo_pergunta_sel").style.display = "block";			
	}
	
	function clone(indice_pergunta, type){
		var desc_perg;
		num_perg += 1;
		if (type == 1){
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
			
		}else if(type == 3){
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
		if (document.getElementById('usu_nome').value == ''){ 
			mensagem = "É necessário preencher o nome do usuário!";
			id       = "usu_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('usu_login').value == ''){ 
			mensagem = "É necessário preencher o login do usuário!";
			id       = "usu_login";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('usu_senha').value == ''){ 
			mensagem = "É necessário preencher a senha do usuário!";
			id       = "usu_senha";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else{
			document.forms['frmCadastro'].submit();	
		}
	}
</script>