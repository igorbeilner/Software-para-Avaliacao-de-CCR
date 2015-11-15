<?php
	session_start();
	switch($_GET['acao']){ 			
		case 'excluir_enquete':

		if(isset($_GET['enq']))
			$enq_cod=$_GET['enq'];
		else
			header('location: ?module=cadastros&acao=nova_enquete');



		break;
	}
?>