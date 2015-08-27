
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
            <a href="?module=cadastros&acao=lista_usuario" style="margin-left:3px;"><img src="application/images/cancelar.png" /></a>
        </div>
	</form>
	
</div>
<script>
function testNome(nome){
		if(nome==''||nome==null){
			return "É necessário preencher o nome!";			
		};
		return "";
	}
function testCpf(cpf){
		if(cpf==''||cpf==null){
			return "É necessário preencher o cpf!";			
		}
		else if(cpf.length!=11){
			return "O CPF deve ter 11 digitos!";
		}
		return "";
	}
function testSiape(siape){
		if(siape==''||siape==null){
			return "É necessário preencher o siape!";			
		}
		else if(siape.length<7||siape.length>9){
			return "O Siape deve ter 7 digitos!";
		};
		return "";
	}

function valida_form(){
		var mensagem, id;
		
		if (document.getElementById('pro_cpf').value == ''){
			mensagem = "É necessário preencher o número do cpf!";
			id       = "pro_cpf";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}
		else if (document.getElementById('pro_cpf').value.length!=11){
			mensagem = "O número do cpf deve possuir 11 digitos!";
			id       = "pro_cpf";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}
		else if (document.getElementById('pro_siape').value == ''){ 
			mensagem = "É necessário preencher o número do siape!";
			id       = "pro_siape";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else if (document.getElementById('pro_siape').value.length!=7){ 
			mensagem = "O número do siape deve possuir 7 digitos!";
			id       = "pro_siape";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else if (document.getElementById('pro_nome').value == ''){ 
			mensagem = "É necessário preencher o nome!";
			id       = "pro_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else{
			document.forms['frmCadastro'].submit();	
		};	
	};


</script>