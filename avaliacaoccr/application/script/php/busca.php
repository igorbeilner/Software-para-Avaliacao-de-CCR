<?php

//Resgata valor por get digitado no formulário
$per_cod = $_GET['per_cod'];
$indice_pergunta = $_GET['indice_pergunta'];

/*Faz conexão com banco 
/*e seleciona base dados */
$conexao = mysql_connect('localhost', 'root', '') or die  ("Erro na conexão ao banco de dados.");
mysql_select_db('avaliacaoccr',$conexao) or die ("Erro ao selecionar a base de dados.");

//Monta consulta SQL
$sql = mysql_query("SELECT *
			FROM perguntas_opcoes AS po
				JOIN opcoes AS o ON (po.op_cod = o.op_cod)				
			WHERE po.per_cod = '".$per_cod."'") or die ("Não foi possível realizar a consulta.");
$total_rows = mysql_num_rows($sql);

//Aqui verifica se veio algum resultado
 if($total_rows == 0){
	echo "Nenhum resultado encontrado";
 }
 else{
 	//Loop com resultado do select
    $i = 1;
    echo "<div class='linha' id='alternativas_".$indice_pergunta."' data-pergunta=".$indice_pergunta.">";
    while($result = mysql_fetch_array($sql)){
		echo "<div class='coluna' id='import_alter_".$indice_pergunta."_".$i."' >";
			echo "<div class='coluna' style='width:400px;'> Descrição da alternativa: </div>";
			echo "<div style='clear: both;'></div>";
			echo "<input type='text' class='cad_enq' style='width: 400px;' name='xxxx' value=".$result['op_desc']." style='margin-left:30px;'  />";
			echo "<a onclick='delete_alter(".$indice_pergunta.",".$i.");' style='margin-left: 5px;'><img src='application/images/delete.png' style='cursor:pointer;' /></a>";
		echo "</div>";
		echo "<div style='clear: both;'></div>";
		$i++;
    }

    echo "</div>";
 }
 