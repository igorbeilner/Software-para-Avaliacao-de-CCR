<?php 
	/*
	$sql = "SELECT *
			FROM municipio
			ORDER BY mun_nome ASC";
	$municipio = $data->find('dynamic',$sql);				
	*/
?>


<div id="table" >
	<h2>Respostas</h2>
    <form action="?module=cadastros&acao=gravar_usuario" id="frmCadastro" method="post">
        
        
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
		for($i=1; $i<= 40; $i++){
			
			// PERGUNTA TEXTO
			echo "<div class='linha' id='tipo_texto_".$i."' style='display:none;'>";
				echo "<div style='width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;' class='coluna'>Pergunta ".$i.":</div>";
				echo "<div style='clear: both;'></div>";
				
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input name='per_desc' id='per_desc_texto' type='text' size='61' style='text-transform: uppercase;' />(Resposta em Texto)";
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";			

			// PERGUNTA UMA RESPOSTA
			echo "<div class='linha' id='tipo_unica_escolha_".$i."' style='display:none;'>";
				echo "<div style='width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;' class='coluna'>Pergunta ".$i.":</div>";
				echo "<div style='clear: both;'></div>";
				
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input name='per_desc' id='per_desc_uma_resposta' type='text' size='61' style='text-transform: uppercase;' />(Péssimo, Médio, Ruim)";
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";			
			
		}
		
?>
   
   		
   		
        <div class="linha"><br/>
            <div id="tipo_pergunta_cab" style="width: 180px; margin-top: 8px; margin-left:105px; font-weight:bold; display:none;" class="coluna">Tipo de Pergunta:</div>
            <div style="clear: both;"></div>         
	        <div class="coluna"><img src="application/images/nova_pergunta.png" onclick="ativa_tipo_pergunta();" /></div>            
            <div id="tipo_pergunta_sel" class="coluna" style="margin-right: 23px; margin-left:7px; display:none;">

                <select id="selecao_tipo" name="selecao" onchange="ativa_campo(this.value);"  >
                	<option value="" >Selecione o tipo de pergunta</option>
                    <option value="1" >Múltipla Escolha - Apenas uma resposta</option>
                	<option value="2" >Múltipla Escolha - Várias respostas</option>
                	<option value="3" >Texto</option>                    
                </select>

            </div>
            <div style="clear: both;"></div>           
		</div>        
        <br />

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
	var indice_texto = 0;
	
	function ativa_tipo_pergunta(){
		document.getElementById("tipo_pergunta_cab").style.display = "block";	
		document.getElementById("tipo_pergunta_sel").style.display = "block";			
	}
	
	function ativa_campo(valor){
		indice_texto = indice_texto + 1;		
		if(valor == 1){
			document.getElementById("tipo_unica_escolha_"+indice_texto).style.display = "block";
			document.getElementById("selecao_tipo").value = "";	
			document.getElementById("tipo_pergunta_cab").style.display = "none";				
			document.getElementById("tipo_pergunta_sel").style.display = "none";			
		}else
		if(valor == 3){
			document.getElementById("tipo_texto_"+indice_texto).style.display = "block";
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