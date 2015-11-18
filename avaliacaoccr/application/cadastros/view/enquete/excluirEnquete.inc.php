<?php
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
	switch($_GET['acao']){ 			
		case 'excluir_enquete':

		if(isset($_GET['enq'])){
			$enq_cod=$_GET['enq'];
			$sql="SELECT * FROM respostas NATURAL JOIN enq_per_res";
			$resp_per=$data->find('dynamic',$sql);
			$sql="SELECT * FROM perguntas NATURAL JOIN enquete_perguntas";
			$per_enq=$data->find('dynamic',$sql);
			$sql="SELECT * FROM enquete NATURAL JOIN enq_disc_prof";
			$prof_disc=$data->find('dynamic',$sql);
			$sql="DELETE FROM respostas WHERE res_cod NOT EXIST IN '$resp_per';";
			$data->delete($sql);
			$sql="DELETE FROM perguntas WHERE per_cod NOT EXIST IN '$per_enq';";
			$data->delete($sql);
			$sql="DELETE FROM enq_disc_prof WHERE epd_cod NOT EXIST IN '$prof_disc';";
			$data->delete($sql);

			$sql="DELETE FROM enquete WHERE enq_cod='$enq_cod';";
			$data->delete($sql);
			$sql="SELECT * FROM enquete WHERE enq_cod='$enq_cod' ";
			$result=$data->find('dynamic',$sql);
			$msg[0]='<h2>A enquete';
			$msg[1]=" Não"; 
			$msg[2]=' foi removida com sucesso</h2>';
			if(count($result)>0){
				if(!isset($_GET['force'])){
					echo $msg[0].$msg[1].$msg[2];
					echo '<a href="?module=cadastros&acao=excluir_enquete&enq='.$enq_cod.'&force=1"><h2>Clique Para Forçar a Remoção!'
					.'</h2><img src="application/images/excluir.png"><h2></h2></a>';
				}else if($_GET['force']==1){
					echo '<h2>Force MODE</h2>';
					$sql="DELETE FROM enq_disc_prof WHERE enq_cod='$enq_cod';";
					$data->delete($sql);
					$sql="DELETE FROM enq_per_res WHERE enq_cod='$enq_cod';";
					$data->delete($sql);
					$sql="DELETE FROM enquete_perguntas WHERE enq_cod='$enq_cod';";
					$data->delete($sql);
					$sql="SELECT * FROM respostas NATURAL JOIN enq_per_res";
					$resp_per=$data->find('dynamic',$sql);
					$sql="SELECT * FROM perguntas NATURAL JOIN enquete_perguntas";
					$per_enq=$data->find('dynamic',$sql);
					$sql="SELECT * FROM enquete NATURAL JOIN enq_disc_prof";
					$prof_disc=$data->find('dynamic',$sql);
					$sql="DELETE FROM respostas WHERE res_cod NOT EXIST IN '$resp_per';";
					$data->delete($sql);
					$sql="DELETE FROM perguntas WHERE per_cod NOT EXIST IN '$per_enq';";
					$data->delete($sql);
					$sql="DELETE FROM enq_disc_prof WHERE epd_cod NOT EXIST IN '$prof_disc';";
					$data->delete($sql);
					$sql="DELETE FROM enquete WHERE enq_cod='$enq_cod';";
					$data->delete($sql);
					$sql="SELECT * FROM enquete WHERE enq_cod='$enq_cod' ";
					$result=$data->find('dynamic',$sql);
					if(count($result)>0){
						echo $msg[0].$msg[1].$msg[2];
					}
					else
						echo $msg[0].$msg[2];
				}
			}else{
				echo $msg[0].$msg[2]; 
			}
		}else
			header('location: ?module=cadastros&acao=nova_enquete');
		break;
	}
?>