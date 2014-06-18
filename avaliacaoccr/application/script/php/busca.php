<?php

//Resgata valor por get digitado no formulário
$per_cod = $_GET['per_cod'];


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
    while ($result = mysql_fetch_array($sql)) {
		//echo "OK a consulta<br />";
		echo "<div class='coluna'  >";
			echo "<input type='text' name='xxxx' value=".$result['op_desc']." style='margin-left:30px;'  />";
		echo "</div>";
		echo "<div style='clear: both;'></div>  ";
		//echo $result['op_desc']."<br />";
    }
 }