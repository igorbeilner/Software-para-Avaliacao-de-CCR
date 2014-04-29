<?php

	echo "mun_codigo: ".$_POST['mun_codigo']."<br />";
	echo "cargo: ".$_POST['cargo']."<br />";
	echo "funcao: ".$_POST['funcao']."<br />";	
	// CARGOS
	$sql = "SELECT c.car_descricao, mc.muc_salario_base
			FROM municipio_cargo AS mc
				JOIN cargo AS c ON (mc.car_codigo = c.car_codigo)
			WHERE mc.mun_codigo = ".$_POST['mun_codigo'];
	$cargo = $data->find('dynamic',$sql);	
	for($i=0; $i<count($cargo); $i++){
		$cargo[$i]['muc_salario_base'] = number_format($cargo[$i]['muc_salario_base'], 2, ",", ".");	
	}		

	// FUNÇÕES
	$sql = "SELECT f.fun_descricao, mcf.mcf_valor_base
			FROM municipio_cargo_funcao AS mcf
				JOIN funcao AS f ON (mcf.fun_codigo = f.fun_codigo)
			WHERE mcf.mun_codigo = ".$_POST['mun_codigo'];
	$funcao = $data->find('dynamic',$sql);	
	for($i=0; $i<count($funcao); $i++){
		$funcao[$i]['mcf_valor_base'] = number_format($funcao[$i]['mcf_valor_base'], 2, ",", ".");	
	}		
	
	if(count($cargo) > count($funcao)){
		$maior = count($cargo);	
	}else{
		$maior = count($funcao);	
	}
?>

<div id="table">
	<h2>Reajuste Salarial - Passo 2</h2>
        		
        <form action="?module=controles&acao=grava_reajuste" id="frmCadastro" method="post">
        
        	<input type="hidden" name="cargo" value="<?php echo $_POST['cargo']; ?>"  />
        	<input type="hidden" name="funcao" value="<?php echo $_POST['funcao']; ?>"  />      
        	<input type="hidden" name="mun_codigo" value="<?php echo $_POST['mun_codigo']; ?>"  />                  
        
		<?php
			// CARGOS, SE FOR SELECIONADO
			if($_POST['cargo'] == 1){
		?>
                <div class="linha">
                    <div style="width: 385px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Reajuste Cargo:</div>
                    <?php 
						if(count($funcao) > 0){ 
							echo "<div style='width: 311px; margin-top: 8px; margin-left:0px; font-weight:bold;' class='coluna'>Reajuste Função:</div>";
						 } 
					 ?>
                    <div style="clear: both;"></div>
                    <input type="text" name="reajuste_cargo" size="3" id="cargo" class="txtarea" title="Insira a % aqui" placeholder="Ex: 9"  /><font style="font-size:16px; color:#F00; font-weight:bold;" >%</font> 
                    <?php 
						if(count($funcao) > 0){ 
							echo "<input type='text' name='reajuste_funcao' size='3' id='funcao' class='txtarea' title='Insira a % aqui' placeholder='Ex: 9' style='margin-left:320px;'  /><font style='font-size:16px; color:#F00; font-weight:bold;' >%</font> ";
						}
					?>
                    <div style="clear: both;"></div>
                    <div style="width: 255px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Cargo:</div>
                    <div style="width: 311px; margin-top: 8px; margin-left:0px; font-weight:bold;" class="coluna">Salário Base:</div>
                    <div style="clear: both;"></div>                                          
                <?php
                        echo "<table>";
                        for($i=0; $i<$maior; $i++){
                            // CARGOS
                            echo "<td>";
                            echo "<div style='background:#FFF; border-radius:5px; width:250px;' >";
                            if($cargo[$i]['car_descricao'] != NULL){
								echo "<font style='font-size:13px; position: relative; top:7px;' >&nbsp;<div style='position: relative; top:-13px; margin-left:7px;' >".$cargo[$i]['car_descricao']."</div></font>";   
							}
                            echo "</div>";
                            echo "</td>";
                            // SALARIOS BASE
                            echo "<td>";
                            echo "<div style='background:#FFF; border-radius:5px; width:120px;' >";
                            if($cargo[$i]['muc_salario_base'] != NULL){
								echo "<font style='font-size:13px; position: relative; top:7px;' >&nbsp;<div style='position: relative; top:-13px; margin-left:7px;' >R$ ".$cargo[$i]['muc_salario_base']."</div></font>";
							}
                            echo "</div>";						
                            echo "</td>";
                            // FUNÇÕES
							echo "<td>";
                            echo "<div style='background:#FFF; border-radius:5px; width:250px;' >";
                            if($funcao[$i]['fun_descricao'] != NULL){
								echo "<font style='font-size:13px; position: relative; top:7px;' >&nbsp;<div style='position: relative; top:-13px; margin-left:7px;' >".$funcao[$i]['fun_descricao']."</div></font>";   
							}
                            echo "</div>";
                            echo "</td>";
                            // VALOR DAS FUNÇÕES
                            echo "<td>";
                            echo "<div style='background:#FFF; border-radius:5px; width:120px;' >";
                            if($funcao[$i]['mcf_valor_base'] != NULL){
								echo "<font style='font-size:13px; position: relative; top:7px;' >&nbsp;<div style='position: relative; top:-13px; margin-left:7px;' >R$ ".$funcao[$i]['mcf_valor_base']."</div></font>";
							}
                            echo "</div>";						
                            echo "</td>";
							
                            echo "<tr>";                            
                        }
                        echo "</table>";
                    ?>
                </div>
		<?php
			}
		?>

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
		if(document.getElementById("cargo").value == "" && document.getElementById("funcao").value == ""){
			var mensagem = "É necessário preencher no mínimo um campo de reajuste!";
			var id       = "cargo";
			campo_vazio(mensagem, id);
		}else{
			document.forms['frmCadastro'].submit();	
		}
	}
</script>

<style type="text/css">
	/* Campo salario */
	.txtarea{
		height: 23px;
		border-radius: 4px;		
	}
</style>