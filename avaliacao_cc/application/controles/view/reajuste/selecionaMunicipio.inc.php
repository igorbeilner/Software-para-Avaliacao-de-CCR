<?php
	if($_SESSION['userPermissao'] == 1){ // ADM, lista todos os municipios para selecionar
		$sql = "SELECT *
				FROM municipio
				ORDER BY mun_nome ASC";
		$municipio = $data->find('dynamic',$sql);	
	}else{ // usuario, busca seu municipio
		$sql = "SELECT m.mun_codigo, m.mun_nome
				FROM usuario AS u
					JOIN municipio AS m ON (u.mun_codigo = m.mun_codigo)
				WHERE u.usu_codigo = ".$_SESSION['userId'];
		$municipio = $data->find('dynamic',$sql);				
	}
?>

<div id="table">
	<h2>Reajuste Salarial - Passo 1</h2>
        		
        <form action="?module=controles&acao=insere_reajuste" id="frmCadastro" method="post">
			<?php
				// ADMINISTRADOR
				if($_SESSION['userPermissao'] == 1){
            ?>
                    <div class="linha">
                        <div style="width: 311px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Selecione o Município:</div>
                        <div style="clear: both;"></div>                
                        <div class="coluna" style="margin-right: 23px; margin-left:0px;">
                            <select name="mun_codigo" style="width:400px;" >
                                <?php
                                    for($i=0; $i<count($municipio); $i++){
                                        echo "<option name='mun_codigo' value='".$municipio[$i]['mun_codigo']."' >".$municipio[$i]['mun_nome']."</option>";	
                                    }							
                                ?>
                            </select> (Somente Administrador)
                        </div>
                        <div style="clear: both;"></div>           
        
                    </div>   
            <?php
				// USUARIO
				}else{
            ?>
            		<input type="hidden" name="mun_codigo" value="<?php echo $municipio[0]['mun_codigo']; ?>"  />
                    <div class="linha">
                        <div style="width: 311px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Município:</div>
                        <div style="clear: both;"></div>                
                        <div class="coluna" style="margin-right: 23px; margin-left:0px;">
                        <input type="text" value="<?php echo $municipio[0]['mun_nome']; ?>" disabled />
                        </div>                                        
                        <div style="clear: both;"></div>                                                                
                    </div>
            
            <?php
				}
			?>
            <div class="linha">
                <div style="width: 311px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Reajustar:</div>
                <div style="clear: both;"></div>
				<input type="checkbox" name="cargo" id="cargo" value="1" style="height:20px; width:20px;" checked /><font style="font-size:15px; position:relative; top:-4px;" >CARGOS</font>
				<input type="checkbox" name="funcao" id="funcao" value="1" style="height:20px; width:20px;"  /><font style="font-size:15px; position:relative; top:-4px;" >FUNÇÕES</font>                
                <div style="clear: both;"></div><br />                
            </div>
            
            <!-- Botão Próximo -->
            <div class="coluna">
                <a onclick="envia_form();" href="#"><img src="application/images/proximo.png" style='border: none; cursor:pointer; background:none;'/></a>
            </div>  
            
            <!-- Botão Cancelar -->        
            <div class="coluna" >
                <a href="?module=cadastros&acao=lista_cargo"><img src="application/images/cancelar.png" /></a>
            </div>

        </form>                
</div>

<script>
	function envia_form(){
		if(document.getElementById("cargo").checked == false && document.getElementById("funcao").checked == false){
			var mensagem = "É necessário selecionar pelo menos uma opção!";
			var id       = "cargo";
			campo_vazio(mensagem, id);
		}else{
			document.forms['frmCadastro'].submit();	
		}
	}
</script>