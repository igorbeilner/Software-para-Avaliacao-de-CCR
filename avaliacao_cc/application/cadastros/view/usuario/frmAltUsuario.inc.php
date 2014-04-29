<?php
	$sql = "SELECT *
			FROM usuario
			WHERE usu_codigo = ".$_GET['id'];
	$usuario = $data->find('dynamic',$sql);

	$sql = "SELECT *
			FROM municipio
			ORDER BY mun_nome ASC";
	$municipio = $data->find('dynamic',$sql);
?>

<div id="table">
	<h2>Edição do Usuário</h2>
    <form action="?module=cadastros&acao=update_usuario" id="frmCadastro" method="post">
        
        <input type="hidden" name="usu_codigo" value="<?php echo $usuario[0]['usu_codigo']; ?>"  />        
        
        <div class="linha">
            <div style="width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Nome:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="usu_nome" value="<?php echo $usuario[0]['usu_nome']; ?>" id="usu_nome" type="text" size="61" style="text-transform: uppercase;" />
            </div>
            <div style="clear: both;"></div>           
		</div>        

        <div class="linha">
            <div style="width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Login	:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="usu_login" value="<?php echo $usuario[0]['usu_login']; ?>" id="usu_login" type="text" size="61" style="text-transform: lowercase;" />
            </div>
            <div style="clear: both;"></div>           
		</div>        

        <div class="linha">
            <div style="width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Senha:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="usu_senha" value="<?php echo $usuario[0]['usu_senha']; ?>" id="usu_senha" type="text" size="61" />
            </div>
            <div style="clear: both;"></div>           
		</div>        

        <div class="linha">
            <div style="width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">E-mail:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="usu_email" value="<?php echo $usuario[0]['usu_email']; ?>" id="usu_email" type="text" size="61" style="text-transform:lowercase;" />
            </div>
            <div style="clear: both;"></div>           
		</div>        

        <div class="linha">
            <div style="width: 111px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Município:</div>
            <div style="clear: both;"></div>
            
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<?php
					echo "<select name='mun_codigo' style='width:402px;' >";
					for($i=0; $i<count($municipio); $i++){
						if($usuario[0]['mun_codigo'] == $municipio[$i]['mun_codigo']){
							echo "<option name='mun_codigo' value=".$municipio[$i]['mun_codigo']." selected >".$municipio[$i]['mun_nome']."</option>";							
						}else{
							echo "<option name='mun_codigo' value=".$municipio[$i]['mun_codigo']." >".$municipio[$i]['mun_nome']."</option>";		
						}						
					}
					echo "</select>";
				?>            	
            </div>
            <div style="clear: both;"></div>           
		</div>        

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