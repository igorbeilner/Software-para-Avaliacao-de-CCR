<?php
	session_start();
	class Valida_SenhaCommand implements Command {
		public function execute() {

			$user = addslashes($_POST['usuario']);
			//$pass = addslashes($_POST['senha']);
			$idSession = $_POST['idSession'];
			
			$login = new Login();
			$login->table = 'professor';
			
			$result = $login->validateUser(array('pro_cpf' => $user),$idSession);
			
			if($result['login'] == 'Logado'){
				echo "<meta http-equiv='refresh' content='0;URL=?module=cadastros&acao=lista_professor'>";
			}else{
				echo "<script>alert('".$result['mensagem']."');</script>"; 
				echo "<meta http-equiv='refresh' content='0;URL=?module=index'>";
			}
		}
	}
?>