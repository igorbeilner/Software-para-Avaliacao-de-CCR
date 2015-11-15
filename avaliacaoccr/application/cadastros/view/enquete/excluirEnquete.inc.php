<?php
	session_start();
	switch($_GET['acao']){ 			
		case 'excluir_enquete':

		if(isset($_GET['enq']))
			$enq_cod=$_GET['enq'];
		else
			header('location: ?module=cadastros&acao=nova_enquete');
		/* Para excluir uma enquete é necessário saber o enq_cod e ver se 
		*  nenhum professor, disciplina, perguntas e respostas estejam associadas
		*  a ela. Caso for remover forçadamente sera necessário deletar tuplas com esta enq_cod das tabelas
		*  respostas -> enq_per_res, professor e disciplina -> enq_prof_disc, 
		*  além das perguntas -> enquete_perguntas, para dai sim remover a enquete!
		*/


		break;
	}
?>