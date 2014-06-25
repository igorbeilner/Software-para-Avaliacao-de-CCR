<?php
	if (isset($_GET['enq_cod'])){
		$enq_cod = $_GET['enq_cod'];
	}
	echo "Responda aqui aluno do caraio!!";
	$aux = explode("-", $enq_cod);
	$enq_cod = $aux[1];

	echo $enq_cod;

?>


