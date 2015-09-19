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
			ORDER BY op_cod ASC";
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
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
AQUI APARECE A ENQUETE IMPORTADA ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div id="import_enquete" style="display:block;">
<?php
		//mostra as enquetes existentes
   	$enq_cod = 0;
	if (isset($_GET['enq'])){
		$enq_cod = $_GET['enq'];
	}
			
	$sql = "select * 
			from enquete as e 
			where e.enq_cod=".$enq_cod."";
	$res = $data->find('dynamic', $sql);
			
	$sql = "select * 
			from semestre as s
			where s.sem_id = ".$res[0]['enq_semestre']."";
	$semestre = $data->find('dynamic', $sql);
			
?>
	<h2>Enquete Importada</h2>
    <form action="?module=cadastros&acao=gravar_enquete_importada" id="frmCadastro" method="post">        
        <div class="linha">
            <div style="width: 190px;" class="coluna">Nome da Enquete:</div>
            <div style="clear: both;"></div>
           
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
                <input name="enqimp_enq_nome" id="enqimp_enq_nome" type="text" size="61" placeholder="Avaliação de componente curricular" class="cad_enq" style="width: 500px; text-transform: uppercase;" value='<?php echo $res[0]['enq_nome']; ?>' />
        	</div>
            <div style="clear: both;"></div>           
        </div>        
        
		<div class="linha">
			<div style="width: 111px;" class="coluna">Semestre:</div>
            <div style="clear: both;"></div>
                    
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
                <input name="enqimp_semestre" maxlength="6" id="enqimp_semestre" type="text" size="3" placeholder="2014/2" class="cad_enq" style="width: 100px;"  value='<?php echo $semestre[0]['sem_ano'].'/'.$semestre[0]['sem_parte']; ?>'/>
            </div>
            <div style="clear: both;"></div>
        </div>        
                
        <div class="linha">
            <div style="width: 111px;" class="coluna">Data:</div>
            <div style="clear: both;"></div>
                    
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
            	<?php $date = explode("-", $res[0]['enq_data']); ?>
                <input name="enqimp_data" maxlength="10" id="enqimp_data" onKeyPress="MascaraData(this);" type="text" size="7" placeholder="<?php echo date("d/m/Y"); ?>" class="cad_enq" style="width: 100px;" style="text-transform: lowercase;"  value='<?php echo $date[2]."/".$date[1]."/".$date[0]; ?>' />
            </div>
            <div style="clear: both;"></div>           
        </div>       
        
        <div class="linha">
            <div style="width: 300px;" class="coluna">Situação:</div>
            <div style="clear: both;"></div>
                    
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
                <?php if ($res[0]['enq_status'] == 1){ ?>
                    <input type='radio' name='enqimp_status' value='1' checked style='position:relative; top:3px;' >Ativa
                    <input type='radio' name='enqimp_status' value='0' style='position:relative; top:3px;'>Inativa
                <?php }else{?>
                    <input type='radio' name='enqimp_status' value='0' checked style='position:relative; top:3px;' >Ativa
                    <input type='radio' name='enqimp_status' value='1' style='position:relative; top:3px;'>Inativa
                <?php }?>
            </div>
           	<div style="clear: both;"></div>           
        </div>     		
                
        <div class="linha">
            <div style="width: 300px;" class="coluna">Nº de Respostas Esperadas:</div>
            <div style="clear: both;"></div>
                    
            <div class="coluna" style="margin-right: 23px; margin-left:0px;">
                <input name="enqimp_resp_esp" maxlength="3" id="enqimp_resp_esp" type="text" size="3"  class="cad_enq" style="width: 100px;"value='<?php echo $res[0]['enq_num_resp_esp']; ?>' />
            </div>
            <div style="clear: both;"></div>           
        </div>       		
                
        <input type='hidden' name='enqimp_num_perg' id='enqimp_num_perg' />
				
<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////				
		//Pega as perguntas da enquete
		$sql = "select * 
				from enquete_perguntas as ep
				where ep.enq_cod=".$_GET['enq']."";
		$res = $data->find("dynamic", $sql);
		
		$perguntas = Array();
		$indice = 0;
		for ($i = 0; $i < count($res); $i++){
			$sql = "select *
					from perguntas as p
					where p.per_cod=".$res[$i]['per_cod']."";
			$result = $data->find('dynamic', $sql);
			
			$perguntas[$indice] = array($result[0]['per_tipo'], $result[0]['per_desc'], $result[0]['per_cod']);
			$indice++;
		}
		
		$qtd_import_perg = sizeof($perguntas);
		$alter_enqimp = Array();
		
		for ($i = 0; $i < sizeof($perguntas); $i++){
			if ($perguntas[$i][0] == 1){ //perguntas do tipo escala
				$sql = "select * 
						from perguntas_opcoes as pop
						where pop.per_cod = ".$perguntas[$i][2]."";
				$op = $data->find('dynamic', $sql);	
				
				$alter_enqimp[$i] = count($op);
				
				echo "<div class='linha' id='enqimp_escala_".$i."' style='display:block;'>";
				echo "<div style='width: 250px;' class='coluna'>[Escala] Descrição da pergunta:</div>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";

					echo "<input name='enqimp_per_desc_".$i."_escala' id='enqimp_desc_escala_".$i."' type='text' size='61' class='cad_enq' style='width: 500px;' value='".$perguntas[$i][1]."'/>";
					echo "<input type='hidden' name='enqimp_escala_tipo_".$i."' value='1' />";
					echo "<input type='hidden' name='escala_per_cod_".$i."' value='".$perguntas[$i][2]."'/>";
					echo "<a onclick='delete_pergunta(".$i.", 1, 1, 1);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
//							 function delete_pergunta final deste arquivo! \/ nos scripts
					echo "<a onclick='clone(".$i.", 1, 1, 1, ".$alter_enqimp[$i].")'; style=' margin-left: 5px;'><img src='application/images/copy.png' style='cursor:pointer;'></a>";
//							 function clone final deste arquivo! \/ nos scripts
					echo "<a onclick='mostra_alter(".$i.", 1, ".$alter_enqimp[$i].");' style=' margin-left: 5px;'><img src='application/images/mais.png' title='Inserir alternativa' style='cursor:pointer;'/></a>";
//							 function mostra_alter final deste arquivo! \/ nos scripts

				echo "</div>";

				echo "<div class='linha'   >";
				echo "<div style='clear: both;'></div>";
				
				
				//ALTERNATIVAS IMPORTADAS COM A ENQUETE
				for ($l = 0; $l < count($op); $l++) {
					echo "<div id='enqimp_alter_".$i."_".$l."' style='display:block; margin-left:30px;'>";
						echo "<div style='clear: both;'></div>";
						echo "<div class='coluna' style='width:400px;'> Descrição da alternativa: </div>";
						echo "<div style='clear: both;'></div>";
						echo "<div class='coluna' > ";
							//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
							echo "<select name='enqimp_alter_".$i."_".$l."' id='enqimp_option_".$i."_".$l."' class='cad_enq' style='width:400px;' >";
								echo "<option value='0' >SELECIONE</option>";
								for($k=0; $k< count($opcoes); $k++){
									if ($op[$l]['op_cod'] == $opcoes[$k]['op_cod']){
										echo "<option value='".$opcoes[$k]['op_cod']."' selected>".$opcoes[$k]['op_desc']."</option>";	
									}else{
										echo "<option value='".$opcoes[$k]['op_cod']."' >".$opcoes[$k]['op_desc']."</option>";
									}
								}		
							echo "</select>";						
							///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
						echo "</div>";
						echo "<a onclick='delete_alternativa(".$i.", ".$l.", 1, ".$alter_enqimp[$i].");' ><img src='application/images/delete.png' style='cursor:pointer; margin-top:10px; margin-left:10px;' /></a>";
//							     function delete_alternativa final deste arquivo \/
					echo "</div>";
				}
				echo "</div>";
				echo "<div style='clear: both;'></div>";

				echo "<div class='linha'   >";
				echo "<div style='clear: both;'></div>";
				//ALTERNATIVAS A SEREM ADICIONADAS NA ENQUETE
				for ($l = count($op); $l < $qtd_alter; $l++) {
					echo "<div id='enqimp_alter_".$i."_".$l."' style='display:none; margin-left:30px;'>";
						echo "<div style='clear: both;'></div>";
						echo "<div class='coluna' style='width:400px;'> Descrição da alternativa: </div>";
						echo "<div style='clear: both;'></div>";
						echo "<div class='coluna' > ";
							//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
							echo "<select name='enqimp_alter_".$i."_".$l."' id='enqimp_option_".$i."_".$l."' class='cad_enq' style='width:400px;' >";
								echo "<option value='0' >SELECIONE</option>";
								for($k=0; $k< count($opcoes); $k++){
									echo "<option value='".$opcoes[$k]['op_cod']."' >".$opcoes[$k]['op_desc']."</option>";
								}		
							echo "</select>";						
							///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
						echo "</div>";
						echo "<a onclick='delete_alternativa(".$i.", ".$l.", 1, 0);' ><img src='application/images/delete.png' style='cursor:pointer; margin-top:10px; margin-left:10px;' /></a>";
					echo "</div>";
				}
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";	
			
			}else{ //perguntas do tipo texto
				echo "<div class='linha' id='enqimp_tipo_texto_".$i."''>";
					echo "<div style='width: 250px;' class='coluna'  >[Texto] Descrição da pergunta:</div>";
					echo "<div style='clear: both;'></div>";

					echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
						echo "<input name='enqimp_per_desc_".$i."_texto' id='enqimp_desc_".$i."' type='text' size='61' class='cad_enq' style='width: 500px;' value='".$perguntas[$i][1]."' />";
						echo "<input type='hidden' name='enqimp_text_tipo_".$j."' value='0' />";
						echo "<input type='hidden' name='texto_per_cod_".$i."' value='".$perguntas[$i][2]."'/>";
						echo "<a onclick='delete_pergunta(".$i.", 0, 1, 1);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
						echo "<a onclick='clone(".$i.", 3, 1, 1, 0);' style=' margin-left: 5px;'><img src='application/images/copy.png' style='cursor:pointer;'></a>";
					echo "</div>";
					echo "<div style='clear: both;'></div>";
				echo "</div>";	
			}
		}
		
		for($j = 1; $j <= $qtd_perg; $j++){

			// PERGUNTA TEXTO
			echo "<div class='linha' id='enqimp_nova_texto_".$j."' style='display:none;'>";
				echo "<div style='width: 250px;' class='coluna'  >[Texto] Descrição da pergunta:</div>";
				echo "<div style='clear: both;'></div>";

				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input name='enqimp_nova_per_desc_".$j."_texto' id='enqimp_nova_desc_".$j."' type='text' size='61' class='cad_enq' style='width: 500px;' />";
					echo "<input type='hidden' name='enqimp_nova_text_tipo_".$j."' value='0' />";
					echo "<a onclick='delete_pergunta(".$j.", 0, 0);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
					echo "<a onclick='clone(".$j.", 3, 0, 0);' style=' margin-left: 5px;'><img src='application/images/copy.png' style='cursor:pointer;'></a>";
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";	

			// PERGUNTA ESCALA
			echo "<div class='linha' id='enqimp_nova_escala_".$j."' style='display:none;'>";
				echo "<div style='width: 250px;' class='coluna'>[Escala] Descrição da pergunta:</div>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";

					echo "<input name='enqimp_nova_per_desc_".$j."_escala' id='enqimp_nova_desc_escala_".$j."' type='text' size='61' class='cad_enq' style='width: 500px;' />";
					echo "<input type='hidden' name='enqimp_nova_escala_tipo_".$j."' value='1' />";
					echo "<a onclick='delete_pergunta(".$j.", 1, 0);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
					echo "<a onclick='clone(".$j.", 1, 0, 0)'; style=' margin-left: 5px;'><img src='application/images/copy.png' style='cursor:pointer;'></a>";
					echo "<a onclick='mostra_alter(".$j.", 0, 0);' style=' margin-left: 5px;'><img src='application/images/mais.png' title='Inserir alternativa' style='cursor:pointer;'/></a>";

				echo "</div>";

				echo "<div class='linha'   >";
				echo "<div style='clear: both;'></div>";
				//ALTERNATIVAS
				for ($i = 1; $i <= $qtd_alter; $i++) {
					echo "<div id='enqimp_nova_alter_".$j."_".$i."' style='display:none; margin-left:30px;'>";
						echo "<div style='clear: both;'></div>";
						echo "<div class='coluna' style='width:400px;'> Descrição da alternativa: </div>";
						echo "<div style='clear: both;'></div>";
						echo "<div class='coluna' > ";
							//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
							echo "<select name='enqimp_nova_alter_".$j."_".$i."' id='enqimp_nova_option_".$j."_".$i."' class='cad_enq' style='width:400px;' >";
								echo "<option value='0' >SELECIONE</option>";
								for($k=0; $k< count($opcoes); $k++){
									echo "<option value='".$opcoes[$k]['op_cod']."' >".$opcoes[$k]['op_desc']."</option>";	
								}		
							echo "</select>";						
							///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
						echo "</div>";
						echo "<a onclick='delete_alternativa(".$j.", ".$i.", 0, 0);' ><img src='application/images/delete.png' style='cursor:pointer; margin-top:10px; margin-left:10px;' /></a>";
					echo "</div>";
				}
				echo "</div>";
				echo "<div style='clear: both;'></div>";
			echo "</div>";	

			// CAMPOS DE PERGUNTAS CARREGADAS DO BANCO			
			// escala
			echo "<div class = 'linha' id='enqimp_nova_import_scale_".$j."' style='display: none;'>";
				echo "<div style='width: 500px;' class='coluna'>[Escala] Descrição da pergunta a ser importada:</div>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input type='text' name='enqimp_nova_escala_ac_".$j."' id='enqimp_nova_desc_import_scale_".$j."' placeholder='Pergunta do tipo escala' style='width: 500px;' class='cad_enq' onclick='busca(this.value, ".$j.");' >"; 
					//echo "<input type='hidden' name='tipo_".$j."' />";
					echo "<a onclick='delete_pergunta(".$j.", 2, 0);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";
				echo "</div>";
			echo "</div>";
			// Alternativas da escala (AJAX)
			echo "<div id='enqimp_nova_resultado_busca_".$j."' style='margin-left:30px;'></div>";
			// texto
			echo "<div class = 'linha' id='enqimp_nova_import_text_".$j."' style='display:none;'>";
				echo "<div id='enqimp_nova_cab_texto_".$j."' style='width: 500px;' class='coluna'>[Texto] Descrição da pergunta a ser importada: </div>";
				echo "<div style='clear: both;'></div>";
				echo "<div class='coluna' style='margin-right: 23px; margin-left:0px;'>";
					echo "<input type='text' name='enqimp_nova_texto_ac_".$j."' id='enqimp_nova_texto_ac_".$j."' size='80' placeholder='Pergunta do tipo texto' class='cad_enq' style='width: 500px;' >";
					//echo "<input type='hidden' name='tipo_".$j."' />";
					echo "<a onclick='delete_pergunta(".$j.", 3, 0);' style=' margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;'></a>";				
				echo "</div>";

			echo "</div>";
		}	

?>
                
        <!-- Seleciona o tipo da nova pergunta-->
       	<div class="linha" id="enqimp_select" style="display:none;">
        	<div class="coluna" style="width: 400px; margin-left:0px;">Tipo de Pergunta:</div>
        	<div style="clear: both;"></div>  
         	<div class="coluna">
        
        		<select id="enqimp_selecao_tipo" name="selecao" class="cad_enq" style="width:500px;" onchange="nova_pergunta(this.value);"  >
        			<option value="" >Selecione o tipo de pergunta</option>
                	<option value="1" >Escala</option>
                	<option value="3" >Texto</option>                    
                </select>
        
	        </div>
	     	<div style="clear: both;"></div>           
   		</div>        
    	<div style="clear: both;"></div>               
        
      	<!-- Seleciona o tipo de pergunta das perguntas importadas do BANCO -->
        <div class="linha" id="enqimp_select_banco" style="display:none;">
        	<div style="width: 400px; margin-left:0px;" class="coluna">Tipo de Pergunta:</div>
        	<div style="clear: both;"></div>  
        	<div class="coluna" style="left: 0px; top:10px;">
            	<select id="enqimp_selecao_tipo_banco" name="" class="cad_enq" style="width:500px;" onchange="ativa_campo_busca(this.value);"  >
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
		$sql = "SELECT * FROM enq_disc_prof WHERE enq_cod=".$_GET['enq'];
		//echo $_GET['enq'];
		$prof_dic = $data->find('dynamic',$sql);
		//echo $prof_dic[0]['pro_cod'];
		//echo $prof_dic[0]['dis_cod'];
		$sql = "SELECT pro_nome FROM professor WHERE pro_cod=".$prof_dic[0]['pro_cod'];
		$prof_nome_banco = $data->find('dynamic',$sql);
		//echo "<div>".$prof_nome_banco[0]['pro_nome']."</div>";
		$sql = "SELECT dis_nome FROM disciplina WHERE dis_cod=".$prof_dic[0]['dis_cod'];
		$disc_prof = $data->find('dynamic',$sql);
		//echo $disc_prof[0]['dis_nome'];
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
						if($i==0)
							echo "<option value='".$prof_dic[0]['pro_cod']."' >".$prof_nome_banco[0]['pro_nome']."</option>";//
						else
							echo "<option value='0' >SELECIONE</option>";
							for($k=0; $k< count($professores); $k++){
								if($i==0&&$professores[$k]['pro_cod']!=$prof_dic[0]['pro_cod'])
									echo "<option value='".$professores[$k]['pro_cod']."' >".$professores[$k]['pro_nome']."</option>";	
							}
								
						echo "</select>";						
					///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
				echo "</div>";

				echo "<div class='coluna' > ";
					//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					echo "<select name='disc_".$i."' id='disc_option_".$i."' class='cad_enq' style='width:250px; margin-left: 20px;' >";
						if($i==0)
							echo "<option value='".$prof_dic[0]['dis_cod']."' >".$disc_prof[0]['dis_nome']."</option>";
						else
							echo "<option value='0' >SELECIONE</option>";
							for($k=0; $k< count($disciplinas); $k++){
								if($i==0&&$disciplinas[$k]['dis_cod']!=$prof_dic[0]['dis_cod'])
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
		<div class="coluna"><!--<img src="application/images/importar_pergunta1.png" onclick="ativa_btn_importar();" style='margin-left:3px; cursor:pointer;' />--></div><br/><br/><br/>
        
        <!-- Envia o codigo da enquete que sera alterada-->
        <input type='hidden' name='enqimp_enq_cod' value="<?php echo $_GET['enq']; ?>" />
        <!-- Envia o total de perguntas -->	
       	<input type='hidden' name='enqimp_total_perg' value='<?php echo $qtd_perg; ?>' />
       	 <!-- Envia a quantidade de perguntas importadas com a enquete -->
        <input type='hidden' name='enqimp_qtd_perg_imp' id='enqimp_qtd_perg_imp' />
        <!-- Envia a quantidade de perguntas criadas -->
        <input type='hidden' name='enqimp_qtd_perg' id='enqimp_qtd_perg' />
       
        <!-- Envia o total de perguntas importadas -->
        <input type='hidden' name='enqimp_total_imp' id='enqimp_total_imp' value='<?php echo count($perguntas); ?>'/> 
        <!-- Envia a quantidade de enquetes -->
        <input type='hidden' name='enqimp_qtd_pd' id='enqimp_qtd_pd'/> 
               
        <!-- Envia VETOR de perguntas_opcoes -->
        <input type="hidden" name="enqimp_perg_alter" id="enqimp_perg_alter" />
        
        <!-- Botão Salvar -->
         <div class="coluna" style="margin-top: 10px;">
            <a onclick="valida_form();" href="#"><img src="application/images/salvar.png" style='border: none; cursor:pointer; background:none; margin-left: 10px;'/></a>
        </div>   
                
        <!-- Botão Cancelar -->        
        <div class="coluna" style="margin-left: 3px; margin-top: 10px;">
            <a href="?module=cadastros&acao=lista_usuario"><img src="application/images/cancelar.png" /></a>
        </div>
   	</form>		
</div>
</div>

<script>
	
	var num_perg = 0;
	var perguntas = []; //guarda o número de alternativas em cada pergunta
	var import_pergs = [];
	var i;
	var qtd_perg = "<?php echo $qtd_perg; ?>";
	for (i = 0; i <= qtd_perg; i++){
		perguntas.push(0);	
		import_pergs.push(0);
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

	function conta_perguntas(){
		var total = "<?php echo $qtd_perg; ?>";
		var i, qtd=0;
		for(i=1; i<=total; i++){
			if(document.getElementById("enqimp_nova_desc_"+i).value)
				qtd++;
			if(document.getElementById("enqimp_nova_escala_"+i).value)
				qtd++;
			if(document.getElementById("enqimp_nova_desc_import_scale_"+i).value)
				qtd++;
			if(document.getElementById("enqimp_nova_texto_ac_"+i).value)
				qtd++;
		}
		return qtd;
	}


	function conta_perguntas_importadas(){
		var total = "<?php echo count($perguntas); ?>";
		var i, qtd = 0;
		
		for (i = 0; i < total; i++){
			if(document.getElementById("enqimp_desc_"+i) != null){
				if(document.getElementById("enqimp_desc_"+i).value != ""){
					qtd++;
				}
			}

			if(document.getElementById("enqimp_desc_escala_"+i) != null){
				if(document.getElementById("enqimp_desc_escala_"+i).value != ""){
					qtd++;
				}
			}
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
				if(document.getElementById("enqimp_nova_option_"+i+"_"+j).value != 0){ // foi selecionada uma alternativa
					perg_alter[indice] = i+"_"+document.getElementById("enqimp_nova_option_"+i+"_"+j).value;
					indice++;
				}
			}
		}
		
		return perg_alter;
		
	}

	function conta_alter_import(){
		var qtd_perg = "<?php echo count($perguntas); ?>";
		var qtd_alter = "<?php echo $qtd_alter; ?>";
		var i, j, indice = 0;
		var perg_alter = new Array();

		for (i = 0; i < qtd_perg; i++){
			for (j = 0; j < qtd_alter; j++){
				if (document.getElementById("enqimp_option_"+i+"_"+j) != null){
					if (document.getElementById("enqimp_option_"+i+"_"+j).value != "0"){
						perg_alter[indice] = i+"_"+document.getElementById("enqimp_option_"+i+"_"+j).value;
						indice++;
					}
				}
			}
		}

		return perg_alter;
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

 	function delete_alter(indice_pergunta, indice){
 		document.getElementById("import_alter_"+indice_pergunta+"_"+indice).style.display = "none";	
 	}
	
	
	function busca(per_cod, indice_pergunta){
		var url = "application/script/php/busca.php?per_cod="+per_cod+"&indice_pergunta="+indice_pergunta;
		var div = "enqimp_nova_resultado_busca_"+indice_pergunta;
		mostraConteudo(url, div);
	}
	
	
	function ativa_campo_busca(tipo){
		num_perg++;
		if(tipo == 1){ // escala
			document.getElementById('enqimp_nova_import_scale_'+num_perg).style.display = "block";
			
			document.getElementById('enqimp_select_banco').style.display = "none";			
			document.getElementById('enqimp_selecao_tipo_banco').value = "";

		}
		else{ // texto		
			document.getElementById('enqimp_nova_import_text_'+num_perg).style.display = "block";

			document.getElementById('enqimp_select_banco').style.display = "none";			
			document.getElementById('enqimp_selecao_tipo_banco').value = "";
		}
	}
	
	
	function mostra_alter(indice_pergunta, importada, num_alter) {
		if (importada == 0){
			perguntas[indice_pergunta]++;		
			document.getElementById("enqimp_nova_alter_"+indice_pergunta+"_"+perguntas[indice_pergunta]).style.display = "block";
		}else{ //VERIFICAR POR QUE NÃO TA PEGANDO O NUMERO DE ALTERNATIVAS
			if (import_pergs[indice_pergunta] == 0){
				//alert(num_alter);
				import_pergs[indice_pergunta] = num_alter;
				import_pergs[indice_pergunta]++;
				//alert(import_pergs[indice_pergunta]);
			}else{
				import_pergs[indice_pergunta]++;
			}

			var indice = import_pergs[indice_pergunta] - 1;
			document.getElementById("enqimp_alter_"+indice_pergunta+"_"+indice).style.display = "block";
		}
	}
	
	function delete_pergunta(indice_pergunta, tipo, importada){
		var i;
		var qtd = "<?php echo $qtd_perg; ?>";
		//num_perg--;
		if (importada == 1){ //apaga as perguntas importadas com a enquete
			if (tipo == 0){ //texto
				document.getElementById("enqimp_desc_"+indice_pergunta).value = "";
				document.getElementById("enqimp_tipo_texto_"+indice_pergunta).style.display = "none";
			}else if (tipo == 1){ //escala
				// excluir cabeçalho e botões....
				document.getElementById("enqimp_escala_"+indice_pergunta).style.display = "none";
				document.getElementById("enqimp_desc_escala_"+indice_pergunta).value = "";
				
				// excluindo alternativas da pergunta
				for(i = 1; i <= perguntas[indice_pergunta]; i++){
					document.getElementById("enqimp_option_"+indice_pergunta+"_"+i).value = "0";			
					document.getElementById("enqimp_alter_"+indice_pergunta+"_"+i).style.display = "none";	
				}
			}
		}else{
			if (tipo == 0){ //texto
				document.getElementById("enqimp_nova_desc_"+indice_pergunta).value = "";
				document.getElementById("enqimp_nova_texto_"+indice_pergunta).style.display = "none";
			}else if (tipo == 1){ //escala
				// excluir cabeçalho e botões....
				document.getElementById("enqimp_nova_escala_"+indice_pergunta).style.display = "none";
				document.getElementById("enqimp_nova_desc_escala_"+indice_pergunta).value = "";
		
				// excluindo alternativas da pergunta
				for(i = 1; i <= perguntas[indice_pergunta]; i++){
					document.getElementById("enqimp_nova_option_"+indice_pergunta+"_"+i).value = "";			
					document.getElementById("enqimp_nova_alter_"+indice_pergunta+"_"+i).style.display = "none";	
				}
			}else if(tipo == 2){ //escala importada
				// excluir cabeçalho e botões....
				document.getElementById("enqimp_nova_import_scale_"+indice_pergunta).style.display = "none";
				document.getElementById("enqimp_nova_desc_import_scale_"+indice_pergunta).value = "";
				document.getElementById("enqimp_nova_resultado_busca_"+indice_pergunta).style.display = "none";
			}else{ //texto importada
				document.getElementById("enqimp_nova_import_text_"+indice_pergunta).style.display = "none";
				document.getElementById("enqimp_nova_texto_ac_"+indice_pergunta).value = "";			
			}
		}
	}
	
	function delete_alternativa(indice_perg, indice_alter, importada, num_alter){
		var i, j, desc_alter, next;
		var qtd_alter = "<?php echo $qtd_alter; ?>";
		if (importada == 0){
			if (indice_alter < perguntas[indice_perg]){
				for (i = indice_alter; i < import_pergs[indice_perg]; i++){
					for (j = i + 1; j < qtd_alter; j++){
						if (document.getElementById("enqimp_nova_option_"+indice_perg+"_"+j).value != "0"){
							desc_alter = document.getElementById("enqimp_nova_option_"+indice_perg+"_"+j).value;
							document.getElementById("enqimp_nova_option_"+indice_perg+"_"+i).value = desc_alter;
							break;
						}
					}
				}
			}

			document.getElementById("enqimp_nova_option_"+indice_perg+"_"+perguntas[indice_perg]).value = "0";
			document.getElementById("enqimp_nova_alter_"+indice_perg+"_"+perguntas[indice_perg]).style.display = "none";
			perguntas[indice_perg]--;	
		}else{
			if(import_pergs[indice_perg] == 0){
				import_pergs[indice_perg] = num_alter;
			}
			
			if (indice_alter < import_pergs[indice_perg]-1){
				for (i = indice_alter; i < import_pergs[indice_perg]; i++){
					for (j = i + 1; j < qtd_alter; j++){
						if (document.getElementById("enqimp_option_"+indice_perg+"_"+j).value != "0"){
							desc_alter = document.getElementById("enqimp_option_"+indice_perg+"_"+j).value;
							document.getElementById("enqimp_option_"+indice_perg+"_"+i).value = desc_alter;
							break;
						}
					}
				}
			}
			
			var indice = import_pergs[indice_perg] - 1;
			document.getElementById("enqimp_option_"+indice_perg+"_"+indice).value = "0";
			document.getElementById("enqimp_alter_"+indice_perg+"_"+indice).style.display = "none";	
			import_pergs[indice_perg]--;
		}
	}
	
	function ativa_tipo_pergunta(){
		document.getElementById("enqimp_select").style.display = "block";	
	}
	
	function ativa_btn_importar(){
		document.getElementById("enqimp_select_banco").style.display = "block";		
	}
	
	function clone(indice_pergunta, type, importada, num_alter){
		var desc_perg;
		num_perg++;
		if (importada == 1){
			if (type == 1){ // ESCALA
			document.getElementById("enqimp_nova_escala_"+num_perg).style.display = "block";
			
			desc_perg = document.getElementById("enqimp_desc_escala_"+indice_pergunta).value;
			document.getElementById("enqimp_nova_desc_escala_"+num_perg).value = desc_perg;
				
			var i;
			for (i = 0; i <= num_alter; i++){
				var indice = i+1;
				document.getElementById("enqimp_nova_alter_"+num_perg+"_"+indice).style.display = "block";
				desc_perg = document.getElementById("enqimp_option_"+indice_pergunta+"_"+i).value;
				document.getElementById("enqimp_nova_option_"+num_perg+"_"+indice).value = desc_perg;
				perguntas[num_perg]++;
			}
				
		}else if(type == 3){ // TEXTO
			document.getElementById("enqimp_nova_texto_"+num_perg).style.display = "block";
			
			desc_perg = document.getElementById("enqimp_desc_"+indice_pergunta).value;
			document.getElementById("enqimp_nova_desc_"+num_perg).value = desc_perg;	
		}
		}else{
			if (type == 1){ // ESCALA
				document.getElementById("enqimp_nova_escala_"+num_perg).style.display = "block";
					
				desc_perg = document.getElementById("enqimp_nova_desc_escala_"+indice_pergunta).value;
				document.getElementById("enqimp_nova_desc_escala_"+num_perg).value = desc_perg;
					
				var i;
				for (i = 1; i <= perguntas[indice_pergunta]; i++){
					document.getElementById("enqimp_nova_alter_"+num_perg+"_"+i).style.display = "block";
					desc_perg = document.getElementById("enqimp_nova_option_"+indice_pergunta+"_"+i).value;
					document.getElementById("enqimp_nova_option_"+num_perg+"_"+i).value = desc_perg;
					perguntas[num_perg]++;
				}
					
			}else if(type == 3){ // TEXTO
				document.getElementById("enqimp_nova_texto_"+num_perg).style.display = "block";
					
				desc_perg = document.getElementById("enqimp_nova_desc_"+indice_pergunta).value;
				document.getElementById("enqimp_nova_desc_"+num_perg).value = desc_perg;	
			}	
		}		
		
	}
	
	function nova_pergunta(tipo){
		num_perg = num_perg + 1;		
		if(tipo == 1){
			document.getElementById("enqimp_nova_escala_"+num_perg).style.display = "block";
			document.getElementById("enqimp_selecao_tipo").value = "";	
			document.getElementById("enqimp_select").style.display = "none";					
		}else
		if(tipo == 3){
			document.getElementById("enqimp_nova_texto_"+num_perg).style.display = "block";
			document.getElementById("enqimp_selecao_tipo").value = "";	
			document.getElementById("enqimp_select").style.display = "none";										
		}
	}

	function valida_form(){
		var mensagem, id, qtd, perg_alter, qtd1;
		var qtd_pd;
		qtd_pd = conta_prof_disc();

		if (document.getElementById('enqimp_enq_nome').value == ''){ 
			mensagem = "É necessário preencher o nome da enquete!";
			id       = "enqimp_enq_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enqimp_semestre').value == ''){ 
			mensagem = "É necessário preencher o semestre!";
			id       = "enqimp_semestre";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enqimp_semestre').value.length < 5){ 
			mensagem = "Campo incompleto!";
			id       = "enqimp_semestre";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enqimp_data').value == ''){ 
			mensagem = "É necessário preencher a data da enquete!";
			id       = "enqimp_data";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enqimp_resp_esp').value == ''){ 
			mensagem = "É necessário preencher o número de respostas esperadas!";
			id       = "enqimp_resp_esp";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (qtd_pd == 0){
			alert("É necessário ter pelo menos um professor associado!");
		}else{
			qtd = conta_perguntas();
			document.getElementById("enqimp_qtd_perg").value = qtd;
			
			perg_alter = conta_alter();
			document.getElementById("enqimp_perg_alter").value = perg_alter;
			
			qtd1 = conta_perguntas_importadas();
			//alert(qtd);
			document.getElementById("enqimp_qtd_perg_imp").value = qtd1;

			//perg_alter = conta_alter_import();
			//document.getElementById("enqimp_perg_alter").value = perg_alter;

			document.getElementById("enqimp_qtd_pd").value = qtd_pd;
			
			document.forms['frmCadastro'].submit();	
		}
	}

	var i;	
	$(document).ready(function(){
		for(i=0; i<15; i++){	
			$('input#enqimp_nova_desc_import_scale_'+i).autocomplete({
				source: [<?php echo $perg1; ?>]
			})
		}
	});	

	$(document).ready(function(){
		for(i=0; i<15; i++){	
			$("input#enqimp_nova_texto_ac_"+i).autocomplete({
				source: [<?php echo $perg2; ?>]
			})
		}
	});	
	
	
	<!-- Calendário da Data -->
	$(document).ready( function() {
		$("#enqimp_data").datepicker({
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

	jQuery(function($){
		$("#enq_semestre").mask("9999/9");
	});
	
</script>