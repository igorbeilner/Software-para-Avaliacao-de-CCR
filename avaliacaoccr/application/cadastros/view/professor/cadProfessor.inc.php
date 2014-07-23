
<div id="table">
	<h2>Cadastro de professores</h2>
    <form action="?module=cadastros&acao=gravar_professor" id="frmCadastro" method="post">
		<!--nome-->
		<div class="linha">
			<div style="width: 190px " class="coluna">Nome:</div>
				<div style="clear: both;"></div>
				<div class="coluna" style="margin-right: 23px; margin-left:0px;">
					<input name="pro_nome" id="pro_nome" type="text" size="61" placeholder="Nome do professor" class="cad_enq" style="width: 500px; text-transform: uppercase;" />
				</div>
			<div style="clear: both;"></div>  
		</div>
		<!--siape-->
		<div class="linha">
			<div style="width: 190px " class="coluna">Siape:</div>
				<div style="clear: both;"></div>
				<div class="coluna" style="margin-right: 23px; margin-left:0px;">
					<input name="pro_siape" id="pro_siape" type="text" size="61" placeholder="Código do siape" class="cad_enq" style="width: 500px; text-transform: uppercase;" />
				</div>
			<div style="clear: both;"></div>  
		</div>
		<!--cpf-->
		<div class="linha">
			<div style="width: 190px " class="coluna">CPF:</div>
				<div style="clear: both;"></div>
				<div class="coluna" style="margin-right: 23px; margin-left:0px;">
					<input name="pro_cpf" id="pro_cpf" type="text" size="61" placeholder="Número do CPF" class="cad_enq" style="width: 500px; text-transform: uppercase;" />
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
            <a href="?module=cadastros&acao=lista_usuario"><img src="application/images/cancelar.png" /></a>
        </div>
	</form>
	
</div>
<script>

function valida_form(){
		var mensagem, id;
		if (document.getElementById('pro_nome').value == ''){ 
			mensagem = "É necessário preencher o nome!";
			id       = "pro_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('pro_siape').value == ''){ 
			mensagem = "É necessário preencher o número do siape!";
			id       = "pro_siape";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else if (document.getElementById('pro_cpf').value == ''){ 
			mensagem = "É necessário preencher o número do cpf!";
			id       = "pro_cpf";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		
		}else{
			document.forms['frmCadastro'].submit();	
		}
	}


</script>