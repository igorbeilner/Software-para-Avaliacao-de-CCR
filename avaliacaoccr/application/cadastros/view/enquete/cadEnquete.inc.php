<script src="application/script/js/mask.js"></script>

<?php
	$qtd_perg  = 50;
	$qtd_alter = 10;

	// ALTERNATIVAS ESCALA
	$sql = "SELECT *
			FROM perguntas
			WHERE per_tipo = 1
			ORDER BY per_desc ASC";
	$pergunta1 = $data->find('dynamic',$sql);

	$sql = "SELECT *
			FROM perguntas
			WHERE per_tipo = 0
			ORDER BY per_desc ASC";
	$pergunta2 = $data->find('dynamic',$sql);

	// Lista todas as alternativas
	$sql = "SELECT *
			FROM opcoes
			ORDER BY op_desc ASC";
	$opcoes = $data->find('dynamic', $sql);

	for($i=0;$i<count($pergunta1);$i++){
		$perg1 .= "\"".trim($pergunta1[$i]['per_cod'])." - ".trim($pergunta1[$i]['per_desc'])."\",";
	}

	for($i=0;$i<count($pergunta2);$i++){
		$perg2 .= "\"".trim($pergunta2[$i]['per_cod'])." - ".trim($pergunta2[$i]['per_desc'])."\",";
	}

	$sql = "select * from professor";
	$professores = $data->find('dynamic', $sql);

	$sql = "select * from disciplina";
	$disciplinas = $data->find('dynamic', $sql);

?>


<div id="table">
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
BOTÕES DE NOVA ENQUETE E IMPORTAR ENQUETE //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="coluna" id="escolha_enquete">
	<a onclick='mostra_enquete(0);' style=' margin-left: 200px;'><img src='application/images/importa_enquete1.png' style='cursor:pointer;'></a>
	<a onclick='mostra_enquete(1);' style=' margin-left: 50px;'><img src='application/images/nova_enquete1.png' style='cursor:pointer;'></a>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
AQUI É A NOVA ENQUETE ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<div id="cadastro_enquete" style="display:none;">
	<h2>Cadastro de Enquete</h2>
    <form action="?module=cadastros&acao=gravar_enquete" id="frmCadastro" method="post">
        <div class="linha">
            <div style="width: 190px;" class="coluna">Nome da Enquete:</div>
            <div style="clear: both;"></div>

            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="enq_nome" id="enq_nome" type="text" size="61" placeholder="Avaliação de componente curricular" class="cad_enq" style="width: 500px; text-transform: uppercase;" />
            </div>
            <div style="clear: both;"></div>
		</div>

        <div class="linha">
            <div style="width: 111px;" class="coluna">Semestre:</div>
            <div style="clear: both;"></div>

            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="enq_semestre" maxlength="6" id="enq_semestre" type="text" size="3" placeholder="2014/2" class="cad_enq" style="width: 100px;" />
            </div>
            <div style="clear: both;"></div>
		</div>

        <div class="linha">
            <div style="width: 111px;" class="coluna">Data:</div>
            <div style="clear: both;"></div>

            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="enq_data" maxlength="10" id="enq_data" onKeyPress="MascaraData(this);" type="text" size="7" placeholder="<?php echo date("d/m/Y"); ?>" class="cad_enq" style="width: 100px;" style="text-transform: lowercase;" />
							<input name="enq_data_fim" maxlength="10" id="enq_data_fim" onKeyPress="MascaraData(this);" type="text" size="7" placeholder="<?php echo date("d/m/Y"); ?>" class="cad_enq" style="width: 100px;" style="text-transform: lowercase;" />
            </div>
            <div style="clear: both;"></div>
		</div>

        <div class="linha">
            <div style="width: 300px;" class="coluna">Situação:</div>
            <div style="clear: both;"></div>

            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input type='radio' name='enq_status' value='1' checked style='position:relative; top:3px;' >Ativa
				<input type='radio' name='enq_status' value='0' style='position:relative; top:3px;'>Inativa
            </div>
            <div style="clear: both;"></div>
		</div>

        <div class="linha">
            <div style="width: 300px;" class="coluna">Nº de Respostas Esperadas:</div>
            <div style="clear: both;"></div>

            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<input name="enq_num_resp_esp" maxlength="3" id="enq_num_resp_esp" type="text" size="3"  class="cad_enq" style="width: 100px;"/>
            </div>
            <div style="clear: both;"></div>
		</div>

		<input type='hidden' name='enq_num_perg' id='enq_num_perg' />

<?php
		for($j=1; $j<= $qtd_perg; $j++){

			// PERGUNTA TEXTO
			echo "<div class='linha' id='tipo_texto_".$j."' style='display:none;'>";
				echo "<div style='width: 250px;' class='coluna'  >[Texto] Descrição da pergunta:</div>";
				echo "<div style='clear: both;'></div>";

				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input name='per_desc_".$j."_texto' id='desc_".$j."' type='text' size='61' class='cad_enq' style='width: 500px;' />";
					echo "<input type='hidden' name='text_tipo_".$j."' value='0' />";
					echo "<a onclick='delete_pergunta(".$j.", 0);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
					echo "<a onclick='clone(".$j.", 3);' style=' margin-left: 5px;'><img src='application/images/copy.png' style='cursor:pointer;'></a>";
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";

			// PERGUNTA ESCALA
			echo "<div class='linha' id='tipo_unica_escolha_".$j."' style='display:none;'>";
				echo "<div style='width: 250px;' class='coluna'>[Escala] Descrição da pergunta:</div>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";

					echo "<input name='per_desc_".$j."_escala' id='desc_escolha_".$j."' type='text' size='61' class='cad_enq' style='width: 500px;' />";
					echo "<input type='hidden' name='escala_tipo_".$j."' value='1' />";
					echo "<a onclick='delete_pergunta(".$j.", 1);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
					echo "<a onclick='clone(".$j.", 1)'; style=' margin-left: 5px;'><img src='application/images/copy.png' style='cursor:pointer;'></a>";
					echo "<a onclick='mostra_alter(".$j.");' style=' margin-left: 5px;'><img src='application/images/mais.png' title='Inserir alternativa' style='cursor:pointer;'/></a>";

				echo "</div>";

				echo "<div class='linha'   >";
				echo "<div style='clear: both;'></div>";
				//ALTERNATIVAS
				for ($i = 1; $i <= $qtd_alter; $i++) {
					echo "<div id='alter_".$j."_".$i."' style='display:none; margin-left:30px;'>";
						echo "<div style='clear: both;'></div>";
						echo "<div class='coluna' style='width:400px;'> Descrição da alternativa: </div>";
						echo "<div style='clear: both;'></div>";
						echo "<div class='coluna' > ";
							//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
							echo "<select name='alter_".$j."_".$i."' id='option_".$j."_".$i."' class='cad_enq' style='width:400px;' >";
								echo "<option value='0' >SELECIONE</option>";
								for($k=0; $k< count($opcoes); $k++){
									echo "<option value='".$opcoes[$k]['op_cod']."' >".$opcoes[$k]['op_desc']."</option>";
								}
							echo "</select>";
							///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
						echo "</div>";
						echo "<a onclick='delete_alternativa(".$j.", ".$i.");' ><img src='application/images/delete.png' style='cursor:pointer; margin-top:10px; margin-left:10px;' /></a>";
					echo "</div>";
				}
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";

			// CAMPOS DE PERGUNTAS CARREGADAS DO BANCO
			// escala
			echo "<div class = 'linha' id='import_scale_".$j."' style='display: none;'>";
				echo "<div id='cab_escala_".$j."' style='width: 500px;' class='coluna'>[Escala] Descrição da pergunta a ser importada:</div>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input type='text' name='escala_ac_".$j."' id='desc_import_scale_".$j."' placeholder='Pergunta do tipo escala' style='width: 500px;' class='cad_enq' onclick='busca(this.value, ".$j.");' >";
					//echo "<input type='hidden' name='tipo_".$j."' />";
					echo "<a onclick='delete_pergunta(".$j.", 2);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
				echo "</div>";
			echo "</div>";
			// Alternativas da escala (AJAX)
			echo "<div id='resultado_busca_".$j."' style='margin-left:30px;'></div>";
			// texto
			echo "<div class = 'linha' id='import_text_".$j."' style='display:none;'>";
				echo "<div id='cab_texto_".$j."' style='width: 500px;' class='coluna'>[Texto] Descrição da pergunta a ser importada: </div>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input type='text' name='texto_ac_".$j."' id='texto_ac_".$j."' size='80' placeholder='Pergunta do tipo texto' class='cad_enq' style='width: 500px;' >";
					//echo "<input type='hidden' name='tipo_".$j."' />";
					echo "<a onclick='delete_pergunta(".$j.", 3);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
				echo "</div>";

			echo "</div>";
		}
?>

   		<!-- Seleciona o tipo da nova pergunta-->
        <div class="linha">
            <div id="tipo_pergunta_cab"  class="coluna" style="width: 400px; margin-left:0px; display:none;">Tipo de Pergunta:</div>
            <div style="clear: both;"></div>
			<div id="tipo_pergunta_sel" class="coluna" style= "display:none;">

                <select id="selecao_tipo" name="selecao" class="cad_enq" style="width:500px;" onchange="ativa_campo(this.value);"  >
                	<option value="" >Selecione o tipo de pergunta</option>
                    <option value="1" >Escala</option>
                	<option value="3" >Texto</option>
                </select>

            </div>
            <div style="clear: both;"></div>
		</div>
        <div style="clear: both;"></div>

		<!-- Seleciona o tipo de pergunta das perguntas importadas do BANCO -->
        <div class="linha" id="select_banco" style="display:none;">
            <div id="tipo_pergunta_cab_banco" style="width: 400px; margin-left:0px;" class="coluna">Tipo de Pergunta:</div>
            <div style="clear: both;"></div>
			<div id="tipo_pergunta_sel_banco" class="coluna" style="left: 0px; top:10px;">
                <select id="selecao_tipo_banco" name="" class="cad_enq" style="width:500px;" onchange="ativa_campo_busca(this.value);"  >
                	<option value="" >Selecione o tipo de pergunta</option>
                    <option value="1" >Escala</option>
                	<option value="2" >Texto</option>
                </select>
            </div>
            <div style="clear: both;"></div>
		</div>


		<?php
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////AQUI FICA O SELECT PARA PROFESSORES E DISCIPLINA//////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		echo "<div class='linha' style='width:600px; margin-top: 50px;'>";
		echo "<div class='coluna' style='width: 600px;' id='prof_cab'> Professores associados: </div>";
		for ($i = 0; $i < 20; $i++){
			if ($i == 0)
				echo "<div id='pro_disc_".$i."' style='margin-left:10px;'>";
			else
				echo "<div id='pro_disc_".$i."' style='display:none; margin-left:10px;'>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='width:250px; margin-top: 10px;'> Professor: </div>";
				echo "<div class='coluna' style='width:250px; margin-left: 20px; margin-top: 10px;'> Disciplina: </div>";
				echo "<div style='clear: both;'></div>";

				echo "<div class='coluna' > ";
					//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					echo "<select name='pro_".$i."' id='pro_option_".$i."' class='cad_enq' style='width:250px;' >";
						echo "<option value='0' >SELECIONE</option>";
							for($k=0; $k< count($professores); $k++){
								echo "<option value='".$professores[$k]['pro_cod']."' >".$professores[$k]['pro_nome']."</option>";
							}
						echo "</select>";
					///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				echo "</div>";

				echo "<div class='coluna' > ";
					//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					echo "<select name='disc_".$i."' id='disc_option_".$i."' class='cad_enq' style='width:250px; margin-left: 20px;' >";
						echo "<option value='0' >SELECIONE</option>";
							for($k=0; $k< count($disciplinas); $k++){
								echo "<option value='".$disciplinas[$k]['dis_cod']."' >".$disciplinas[$k]['dis_nome']."</option>";
							}
						echo "</select>";
					///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				echo "</div>";
				echo "<a onclick='delete_prof_disc(".$i.");' ><img src='application/images/delete.png' style='cursor:pointer; margin-top:10px; margin-left:10px;' /></a>";
			echo "</div>";
		}
		echo "</div>";
		echo '<div class="coluna" style="margin-top: 20px; margin-left: 10px;" id="add_prof_disc"><img src="application/images/professor_disciplina4.png" onclick="add();" style="cursor:pointer;" /></div>';
		echo "<div style='clear: both;'></div>";
		?>

        <br /><br />
		<div class="coluna"><img src="application/images/nova_pergunta1.png" onclick="ativa_tipo_pergunta();" style="cursor:pointer; margin-left: 10px;" /></div>
		<div class="coluna"><img src="application/images/importar_pergunta1.png" onclick="ativa_btn_importar();" style='margin-left:3px; cursor:pointer;' /></div><br/><br/><br/>

		<!-- Envia o total de perguntas -->
		<input type='hidden' name='total_perg' value='<?php echo $qtd_perg; ?>' />
		<!-- Envia a quantidade de perguntas criadas -->
		<input type='hidden' name='qtd_perg' id='qtd_perg' />
        <!-- Envia quantidade de professores e disciplinas add -->
        <input type='hidden' name='qtd_pd' id='qtd_pd' />

        <!-- Envia VETOR de perguntas_opcoes -->
        <input type="hidden" name="perg_alter" id="perg_alter" />

        <!-- Botão Salvar -->
        <div class="coluna" style="margin-top: 10px;">
            <a onclick="valida_form();" href="#"><img src="application/images/salvar.png" style='border: none; cursor:pointer; background:none; margin-left: 10px;'/></a>
        </div>

        <!-- Botão Cancelar -->
        <div class="coluna" style="margin-top: 10px; margin-left: 2px;">
            <a href="?module=cadastros&acao=lista_usuario"><img src="application/images/cancelar.png" /></a>
        </div>
	</form>
	</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
AQUI APARECE AS ENQUETES PARA SEREM IMPORTADAS ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div id="import_enquete" style="display:none;">
    <?php
		//mostra as enquetes existentes
			$sql = "select e.enq_nome, e.enq_cod
					from enquete as e";

			$result = $data->find('dynamic', $sql);

			echo "<div id='cab_enq' class='listagem' style='margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; margin-top:10px;'>
					<div class='linha' style='width: 100%;'>
						<div class='coluna' style='float:left; width:300px; font-weight:bold; color:#000;'>Nome da Enquete</div>
						<div style='clear: both;'></div>
					</div>
				</div>";

			for ($i = 0; $i < count($result); $i++){
				echo '<div id = "list_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px;">
						<div class="linha_sol" style="width: 100%;">';
							$cod_enq = $result[$i]['enq_cod'];
							echo '<div class="coluna" style="float:left; width: 300px;"><a href="?module=cadastros&acao=import_enquete&enq='.$result[$i]['enq_cod'].'">'.utf8_encode($result[$i]["enq_nome"]).'</a></div>';
						echo "<div style='clear: both;'></div>";
					echo "</div>";
				echo "</div>";
			}
	?>
    </div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
AQUI APARECE AS ENQUETES PARA SEREM EDITADAS ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div id="edit_enquete" style="display:none;">
    <?php
		//mostra as enquetes existentes
			$sql = "select e.enq_nome, e.enq_cod
					from enquete as e";

			$result = $data->find('dynamic', $sql);

			echo "<div id='cab_enq' class='listagem' style='margin-bottom: 5px; background-color: #F0F5FF; padding: 5px; margin-top:10px;'>
					<div class='linha' style='width: 100%;'>
						<div class='coluna' style='float:left; width:300px; font-weight:bold; color:#000;'>Nome da Enquete</div>
						<div style='clear: both;'></div>
					</div>
				</div>";

			for ($i = 0; $i < count($result); $i++){
				echo '<div id = "list_enq" class="listagem" style="margin-bottom: 5px; background-color: #F0F5FF; padding: 5px;">
						<div class="linha_sol" style="width: 100%;">';
							$cod_enq = $result[$i]['enq_cod'];
							echo '<div class="coluna" style="float:left; width: 300px;"><a href="?module=cadastros&acao=editar_enquete&enq='.$result[$i]['enq_cod'].'">'.utf8_encode($result[$i]["enq_nome"]).'</a></div>';
						echo "<div style='clear: both;'></div>";
					echo "</div>";
				echo "</div>";
			}
	?>
    </div>
</div>

<script src="application/script/js/validaEnquete.js"></script>
<script>

	var num_perg = 0;
	var perguntas = []; //guarda o número de alternativas em cada pergunta
	var i;
	for (i = 1; i <= 120; i++){
		perguntas.push(0);
	}
	var num_pd = 1;
	var qtd_prof_disc = 20;

	function select_prof_disc(){
		document.getElementById("pro_disc_"+num_pd).style.display = "block";
		document.getElementById("add_prof_disc").style.display = "block";
		num_pd++;
	}


	function add(){
		document.getElementById("pro_disc_"+num_pd).style.display = "block";
		num_pd++;
	}

	function delete_prof_disc(indice){
		var i, next, desc;
		if (num_pd != 1){
			if (indice < num_pd - 1){
				for (i = indice; i < qtd_prof_disc - 1; i++){
					next = i+1;
					desc = document.getElementById("pro_option_"+next).value;
					document.getElementById("pro_option_"+i).value = desc;
					desc = document.getElementById("disc_option_"+next).value;
					document.getElementById("disc_option_"+i).value = desc;
				}
			}

			var index = num_pd-1;
			document.getElementById("pro_option_"+index).value = "0";
			document.getElementById("disc_option_"+index).value = "0";
			document.getElementById("pro_disc_"+index).style.display = "none";
			num_pd--;
		}else{
			alert("É necessário ter pelo menos um professor associado!");
		}
	}

	function conta_prof_disc(){
		var i, qtd = 0;
		for (i = 0; i < qtd_prof_disc; i++){
			if (document.getElementById("pro_option_"+i).value != "0"){
				qtd++;
			}
		}
		return qtd;
	}

	function mostra_enquete(tipo){
		document.getElementById("escolha_enquete").style.display = "none";
		if (tipo == 1){
			document.getElementById("cadastro_enquete").style.display = "block";
		}else if (tipo == 0){
			document.getElementById("import_enquete").style.display = "block";
		}
		else{
			document.getElementById("edit_enquete").style.display = "block";
		}
	}

	function conta_perguntas(){
		var total = "<?php echo $qtd_perg; ?>";
		var i, qtd=0;
		for(i=1; i<=total; i++){
			if(document.getElementById("desc_"+i).value)
				qtd++;
			if(document.getElementById("desc_escolha_"+i).value)
				qtd++;
			if(document.getElementById("desc_import_scale_"+i).value)
				qtd++;
			if(document.getElementById("texto_ac_"+i).value)
				qtd++;
		}
		return qtd;
	}

	function conta_alter(){
		var qtd_perg  = "<?php echo $qtd_perg; ?>";
		var qtd_alter = "<?php echo $qtd_alter; ?>";
		var i, j, indice=0;
		var perg_alter = new Array();

		for(i=1; i<=qtd_perg; i++){
			for(j=1; j<=qtd_alter; j++){
				if(document.getElementById("option_"+i+"_"+j).value != 0){ // foi selecionada uma laternativa
					perg_alter[indice] = i+"_"+document.getElementById("option_"+i+"_"+j).value;
					//alert("vetor: "+perg_alter[indice]);
					indice++;
				}
			}
		}

		return perg_alter;

	}

 	function delete_alter(indice_pergunta, indice){
 		document.getElementById("import_alter_"+indice_pergunta+"_"+indice).style.display = "none";
 	}


	function busca(per_cod, indice_pergunta){
		var url = "application/script/php/busca.php?per_cod="+per_cod+"&indice_pergunta="+indice_pergunta;
		var div = "resultado_busca_"+indice_pergunta;
		mostraConteudo(url, div);
	}


	function ativa_campo_busca(tipo){
		num_perg++;
		if(tipo == 1){ // escala
			document.getElementById('import_scale_'+num_perg).style.display = "block";

			document.getElementById('select_banco').style.display = "none";
			document.getElementById('selecao_tipo_banco').value = "";

		}
		else{ // texto
			document.getElementById('import_text_'+num_perg).style.display = "block";

			document.getElementById('select_banco').style.display = "none";
			document.getElementById('selecao_tipo_banco').value = "";
		}
	}

	/*
		Verifica para que a quantidade de alternativas seja menor ou igual
		a quantidade de alternativas possiveis. 
	*/
	function mostra_alter(indice_pergunta) {
		var novaAlternativa = document.getElementById("alter_"+indice_pergunta+"_"+(perguntas[indice_pergunta]+1));

		var alternativas = document.getElementById('alter_1_1'); 
		if( alternativas !== undefined ){

			if( perguntas[indice_pergunta] < alternativas.children.length ){
				perguntas[indice_pergunta]++;
				novaAlternativa.style.display = "block";
			}
		}
		else{
			novaAlternativa.style.display = "block";
		}
	}

	function delete_pergunta(indice_pergunta, tipo, enquete_import, importada){
		var i;
		var qtd = "<?php echo $qtd_perg; ?>";
		//num_perg--;
		if (tipo == 0){ //texto
			document.getElementById("desc_"+indice_pergunta).value = "";
			document.getElementById("tipo_texto_"+indice_pergunta).style.display = "none";
		}else if (tipo == 1){ //escala
			// excluir cabeçalho e botões....
			document.getElementById("tipo_unica_escolha_"+indice_pergunta).style.display = "none";
			document.getElementById("desc_escolha_"+indice_pergunta).value = "";

			// excluindo alternativas da pergunta
			for(i = 1; i <= perguntas[indice_pergunta]; i++){
				document.getElementById("alter_"+indice_pergunta+"_"+i).value = "";
				document.getElementById("alter_"+indice_pergunta+"_"+i).style.display = "none";
			}
		}else if(tipo == 2){ //escala importada
			// excluir cabeçalho e botões....
			document.getElementById("import_scale_"+indice_pergunta).style.display = "none";
			document.getElementById("desc_import_scale_"+indice_pergunta).value = "";
			document.getElementById("resultado_busca_"+indice_pergunta).style.display = "none";
		}else{ //texto importada
			document.getElementById("import_text_"+indice_pergunta).style.display = "none";
			document.getElementById("texto_ac_"+indice_pergunta).value = "";
		}

	}

	function delete_alternativa(indice_perg, indice_alter){
		var i, next, desc_alter;
		if (indice_alter < perguntas[indice_perg]){
			for (i = indice_alter; i < perguntas[indice_perg]; i++){
				next = i+1;
				desc_alter = document.getElementById("option_"+indice_perg+"_"+next).value;
				document.getElementById("option_"+indice_perg+"_"+i).value = desc_alter;
			}
		}

		document.getElementById("option_"+indice_perg+"_"+perguntas[indice_perg]).value = "0";
		document.getElementById("alter_"+indice_perg+"_"+perguntas[indice_perg]).style.display = "none";
		perguntas[indice_perg]--;
	}

	function ativa_tipo_pergunta(){
		document.getElementById("tipo_pergunta_cab").style.display = "block";
		document.getElementById("tipo_pergunta_sel").style.display = "block";
		
		document.getElementById("selecao_tipo").focus();
	}

	function ativa_btn_importar(){
		document.getElementById("select_banco").style.display = "block";
	}

	function clone(indice_pergunta, type){
		var desc_perg;
		num_perg++;
		if (type == 1){ // ESCALA
			document.getElementById("tipo_unica_escolha_"+num_perg).style.display = "block";
			document.getElementById("selecao_tipo").value = "";
			document.getElementById("tipo_pergunta_cab").style.display = "none";
			document.getElementById("tipo_pergunta_sel").style.display = "none";

			desc_perg = document.getElementById("desc_escolha_"+indice_pergunta).value;
			document.getElementById("desc_escolha_"+num_perg).value = desc_perg;

			var i;
			for (i = 1; i <= perguntas[indice_pergunta]; i++){
				document.getElementById("alter_"+num_perg+"_"+i).style.display = "block";
				desc_perg = document.getElementById("option_"+indice_pergunta+"_"+i).value;
				document.getElementById("option_"+num_perg+"_"+i).value = desc_perg;
				perguntas[num_perg]++;
			}

		}else if(type == 3){ // TEXTO
			document.getElementById("tipo_texto_"+num_perg).style.display = "block";
			document.getElementById("selecao_tipo").value = "";
			document.getElementById("tipo_pergunta_cab").style.display = "none";
			document.getElementById("tipo_pergunta_sel").style.display = "none";

			desc_perg = document.getElementById("desc_"+indice_pergunta).value;
			document.getElementById("desc_"+num_perg).value = desc_perg;
		}

	}

	function ativa_campo(valor){
		num_perg = num_perg + 1;
		if(valor == 1){
			document.getElementById("tipo_unica_escolha_"+num_perg).style.display = "block";
			document.getElementById("selecao_tipo").value = "";
			document.getElementById("tipo_pergunta_cab").style.display = "none";
			document.getElementById("tipo_pergunta_sel").style.display = "none";
		}else
		if(valor == 3){
			document.getElementById("tipo_texto_"+num_perg).style.display = "block";
			document.getElementById("selecao_tipo").value = "";
			document.getElementById("tipo_pergunta_cab").style.display = "none";
			document.getElementById("tipo_pergunta_sel").style.display = "none";
		}
	}

	function valida_form(){
		var mensagem, id, qtd, perg_alter;
		if (document.getElementById('enq_nome').value == ''){
			mensagem = "É necessário preencher o nome da enquete!";
			id       = "enq_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_semestre').value == ''){
			mensagem = "É necessário preencher o semestre!";
			id       = "enq_semestre";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_semestre').value.length < 5){
			mensagem = "Campo incompleto!";
			id       = "enq_semestre";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_data').value == ''){
			mensagem = "É necessário preencher a data da enquete!";
			id       = "enq_data";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_num_resp_esp').value == ''){
			mensagem = "É necessário preencher o número de respostas esperadas!";
			id       = "enq_num_resp_esp";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else{
			qtd = conta_perguntas();
			document.getElementById("qtd_perg").value = qtd;

			perg_alter = conta_alter();
			document.getElementById("perg_alter").value = perg_alter;

			qtd = conta_prof_disc();
			document.getElementById("qtd_pd").value = qtd;

			document.forms['frmCadastro'].submit();
		}
	}

	var i;
	$(document).ready(function(){
		for(i=0; i<15; i++){
			$('input#desc_import_scale_'+i).autocomplete({
				source: [<?php echo $perg1; ?>]
			})
		}
	});

	$(document).ready(function(){
		for(i=0; i<15; i++){
			$("input#texto_ac_"+i).autocomplete({
				source: [<?php echo $perg2; ?>]
			})
		}
	});


	<!-- Calendário da Data de inicio -->
	$(document).ready( function() {
		var enq_data = $("#enq_data").datepicker({
			dateFormat: 'dd/mm/yy',
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
				nextText: 'Próximo',
				prevText: 'Anterior',
				changeMonth: true,
				changeYear: true
		});
	});

	var enq_data_fim = $("#enq_data_fim").datepicker({
		dateFormat: 'dd/mm/yy',
			dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
			dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
			dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
			monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
			monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
			nextText: 'Próximo',
			prevText: 'Anterior',
			changeMonth: true,
			changeYear: true
	});

	jQuery(function($){
		$("#enq_semestre").mask("9999/9");
	});

</script>
