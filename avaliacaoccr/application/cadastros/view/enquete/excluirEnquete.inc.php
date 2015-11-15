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
		*  respostas -> enq_per_res, professor e disciplina -> enq_disc_prof, 
		*  além das perguntas -> enquete_perguntas, para dai sim remover a enquete!
		*
		*	SQL="DELETE FROM respostas WHERE res_cod NOT EXIST IN (SELECT * FROM respostas NATURAL JOIN enq_per_res);"
		*	SQL="DELETE FROM perguntas WHERE per_cod NOT EXIST IN (SELECT * FROM perguntas NATURAL JOIN enquete_perguntas);"
		*	SQL="DELETE FROM enq_disc_prof WHERE epd_cod NOT EXIST IN (SELECT * FROM enquete NATURAL JOIN enq_disc_prof);"
		*	Essas 'Delete From' são necessárias para remover tuplas desnecessárias do banco!
		*	
		*	SQL="DELETE FROM respostas WHERE res_cod IN (SELECT * FROM enq_per_res WHERE enq_cod='$enq_cod');";
		*	SQL="DELETE FROM perguntas WHERE per_cod IN (SELECT * FROM enquete_perguntas WHERE enq_cod='$enq_cod');";
		*	SQL="DELETE FROM enq_disc_prof WHERE enq_cod='$enq_cod';";
		*	SQL="DELETE FROM enq_per_res WHERE enq_cod='$enq_cod';";
		*	SQL="DELETE FROM enquete_perguntas WHERE enq_cod='$enq_cod';";
		*	SQL="DELETE FROM enquete WHERE enq_cod='$enq_cod';";
		*	Essas são as DELETEs necessárias para deletar uma unica enquete
		*	Provavelmente as duas primeiras dessa lista pode não funcionar pois na tabela enquete_perguntas per_cod não pode
		*	ser nula, assim possivelmente poderá ter que ser utilizada as duas da primeira lista. 
		*/


		break;
	}
?>