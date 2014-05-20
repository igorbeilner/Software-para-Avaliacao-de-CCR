<?php
	session_start();
	class Valida_SenhaCommand implements Command {
		public function execute() {
			$user = addslashes($_POST['usuario']);
			//$pass = addslashes($_POST['senha']);
			$idSession = $_POST['idSession'];
			
			$login = new Login();
			$login->table = 'professor';
			
			$result = $login->validateUser(array('pro_siape' => $user),$idSession);

			if($result['login'] == 'Logado'){
				if($_SESSION['userPermissao'] == 1){ // ADM
					echo "<meta http-equiv='refresh' content='0;URL=?module=cadastros&acao=lista_professor'>";	
				}else
				if($_SESSION['userPermissao'] == 2){ // PROFESSOR
					echo "<meta http-equiv='refresh' content='0;URL=?module=cadastros&acao=lista_professor'>";	
				}
				else{ // ALUNO
					echo "<meta http-equiv='refresh' content='0;URL=?module=respostas&acao=respostas'>";	
				}
			}else{
				echo "<script>alert('".$result['mensagem']."');</script>"; 
				echo "<meta http-equiv='refresh' content='0;URL=?module=index'>";
			}
		}
	}
?>