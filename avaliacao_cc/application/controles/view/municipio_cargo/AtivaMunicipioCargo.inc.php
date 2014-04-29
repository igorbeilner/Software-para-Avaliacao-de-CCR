<?php
	$sql = "SELECT *
			FROM municipio
			ORDER BY mun_nome ASC";
	$municipio = $data->find('dynamic',$sql);	
?>

<div id="table">
	<h2>Ativar Cargos</h2>

		<!-- Seleciona o município e então na próxima tela ele irá selecionar os cargos.... -->
        		
        <form action="?module=controles&acao=ativa_cargo_seleciona" id="frmCadastro" method="post">
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
                <br /><br />
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
		document.forms['frmCadastro'].submit();	
	}
</script>