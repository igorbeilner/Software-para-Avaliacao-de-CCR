
<div id="table">
	<h2>Cadastro de alternativas</h2>
    <form action="?module=cadastros&acao=gravar_alternativa" id="frmCadastro" method="post">
		<!--nome-->
		<div class="linha">
			<div style="width: 190px " class="coluna">Descrição da alternativa:</div>
				<div style="clear: both;"></div>
				<div class="coluna" style="margin-right: 23px; margin-left:0px;">
					<input name="op_desc" id="pro_nome" type="text" size="61" placeholder="Descrição da alternativa" class="cad_enq" style="width: 500px; text-transform: uppercase;" />
				</div>
			<div style="clear: both;"></div>  
		</div>
		<div class="linha">
			<div style="width: 190px " class="coluna">Peso da alternativa:(0-100)</div>
				<div style="clear: both;"></div>
				<div class="coluna" style="margin-right: 23px; margin-left:0px;">
					<input name="op_peso" id="pro_peso" type="number" size="3" placeholder="100" class="cad_enq" onchange="Valida_num(this);" />
				</div>
			<div style="clear: both;"></div>
			<div style="width: 500px " class="coluna">Obs: Valores Diferentes se tornarão, o número limite mais proximo!</div>  
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
		if (document.getElementById('pro_nome').value == ''){ 
			mensagem = "É necessário preencher a descrição da alternativa!";
			id       = "pro_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else{
			document.forms['frmCadastro'].submit();	
		}
	}


</script>