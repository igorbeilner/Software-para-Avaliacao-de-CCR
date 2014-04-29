<div id="table">
	<h2>Cadastro do Cargo</h2>
    <form action="?module=cadastros&acao=gravar_cargo" id="frmCadastro" method="post">
        <div class="linha">
            <div style="width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Descrição:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="car_descricao" id="car_descricao" type="text" size="61" style="text-transform: uppercase;" />
            </div>
            <div style="clear: both;"></div>           
		</div>        

        <!-- Botão Salvar -->
        <div class="coluna">
            <a onclick="valida_form();" href="#"><img src="application/images/salvar.png" style='border: none; cursor:pointer; background:none;'/></a>
        </div>  
        
        <!-- Botão Cancelar -->        
        <div class="coluna" >
            <a href="?module=cadastros&acao=lista_cargo"><img src="application/images/cancelar.png" /></a>
        </div>
	</form>		
</div>

<script>
	function valida_form(){
		var mensagem, id;
		if (document.getElementById('car_descricao').value == ''){ 
			mensagem = "É necessário preencher a descrição do cargo!";
			id       = "car_descricao";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else{
			document.forms['frmCadastro'].submit();	
		}
	}
</script>