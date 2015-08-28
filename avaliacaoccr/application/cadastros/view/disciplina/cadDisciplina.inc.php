
<div id="table">
	<h2>Cadastro de disciplinas</h2>
   <form action="?module=cadastros&acao=gravar_disciplina" id="frmCadastro" method="post">
		<!--nome-->
		<div class="linha">
			<div style="width: 190px " class="coluna">Nome da Disciplina:</div>
				<div style="clear: both;"></div>
				<div class="coluna" style="margin-right: 23px; margin-left:0px;">
					<input name="dis_nome" id="dis_nome" type="text" size="61" class="cad_enq" style="width: 500px; text-transform: uppercase;" />
				</div>
			<div style="clear: both;"></div>  
		</div>
		<!--código-->
		<div class="linha">
			<div style="width: 190px " class="coluna">Código da Disciplina:</div>
				<div style="clear: both;"></div>
				<div class="coluna" style="margin-right: 23px; margin-left:0px;">
					<input name="dis_cod" id="dis_cod" type="text" size="6" maxlength="6" class="cad_enq" style="width: 75px; text-transform: uppercase;" />
				</div>
			<div style="clear: both;"></div>  
		</div>
		<!--dominio-->
		<div class="linha">
            <div style="width: 300px;" class="coluna">Domínio:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
				<input type='radio' name='dis_dominio' value='1' style='position:relative; top:3px;'>Comum
            	<input type='radio' name='dis_dominio' value='2' checked style='position:relative; top:3px;' >Conexo
				<input type='radio' name='dis_dominio' value='3' checked style='position:relative; top:3px;' >Específico
				
            </div>
            <div style="clear: both;"></div>           
		</div>   
		<br/><br/>
		 <!-- Botão Salvar -->
        <div class="coluna">
            <a onclick="valida_form();" href="#"><img src="application/images/salvar.png" style='border: none; cursor:pointer; background:none;'/></a>
        </div>  
        
        <!-- Botão Cancelar -->        
        <div class="coluna" >
            <a href="?module=cadastros&acao=lista_usuario" style="margin-left:3px;"><img src="application/images/cancelar.png" /></a>
        </div>
	</form>
	
</div>
<script>

	function valida_form(){
		var mensagem, id;
		if (document.getElementById('dis_nome').value == ''){ 
			mensagem = "É necessário preencher o nome!";
			id       = "dis_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		} else if (document.getElementById('dis_cod').value.length != 6){ 
			mensagem = "O código deve er 6 dígitos!";
			id       = "dis_cod";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		} else {
			document.forms['frmCadastro'].submit();	
		}
	}

</script>