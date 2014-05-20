<?php
	$sql = "SELECT * 
			FROM usuario_cidade AS uc
				JOIN usuario AS u ON (uc.usu_codigo = u.usu_codigo)
				JOIN cidade AS c ON (c.cid_codigo = uc.cid_codigo)
			WHERE uc.usu_codigo = ".$_SESSION['userId'];
	$cid = $data->find('dynamic',$sql);
?>

<h2>Busca Relatório Geral por Município</h2>
<div id="erro" style="margin:0px 0px 5px 0px; padding:0px; width:100%;"></div>
<div id="table">
    <form id="frmBusca" method="POST" action="viewReport.php?acao=listRelGeral" target="_blank">
		<div class='linha'>
        	<div class='coluna' style='width:80px;'>Município: </div>
				<div class='coluna'>
            		<select style='width:350px;' id='cid_codigo' name='cid_codigo' size='1'>
						<option value='0'>Selecione o Município</option>
						<?php
							for($i = 0; $i < count($cid); $i++){
								echo "<option value='".$cid[$i]['cid_codigo']."'>".$cid[$i]['cid_nome']."</option>";
							}
						?>
					</select>
				</div>
			<div style='clear: both;'></div>
		</div>
		   	
	    <div class="linha">	            
        	<div class="coluna" style="width:80px;">Data Inicial:</div>
			<div class="coluna">            
                <input type="text" readonly id="data_ini" name="data_ini" size="10" />
                <script type="text/javascript">  
                //<![CDATA[ 
				$(document).ready(
					function(){ 
						$("#data_ini").datepicker({
								dateFormat: 'dd/mm/yy',
								dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
								dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
								dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
								monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
								monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
								nextText: 'Próximo',
								prevText: 'Anterior'
						});
					}); 
				//]]> 
                </script>
			</div>
			
            <div class="coluna">Data Final:</div>
            <div class="coluna">
                <input type="text" readonly id="data_fim" name="data_fim" size="10" />
                <script type="text/javascript">  
                //<![CDATA[ 
				$(document).ready(
					function(){ 
						$("#data_fim").datepicker({
								dateFormat: 'dd/mm/yy',
								dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
								dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
								dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
								monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
								monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
								nextText: 'Próximo',
								prevText: 'Anterior'
						});
					}); 
				//]]>   
                </script>
	       </div>
           <div class="coluna">	<input type="submit" value=""> </div>
           <div style="clear: both;"></div>
		</div>
	</form>
</div>