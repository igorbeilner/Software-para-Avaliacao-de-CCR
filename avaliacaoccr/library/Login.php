<?php
class Login{
	private $lembrarTempo = 90;
	private $cookiePath = '/';
	private $prefixoChaves = 'professor_';
	
	var $table;
	
	function validateUser($params, $session){
		if(!isset($_SESSION)){
    		session_start();
    	}
		$db = new MySql();
		
		$i = 0;
		foreach($params as $key => $valor){
			if($i == 0){
				$conditions = $key." = '".$valor."'";
				$i++;
			}else{
				$conditions .= " AND ".$key." = '".$valor."'";
			}  
		}

		$sql = "SELECT * FROM ".$this->table." WHERE ".$conditions;		

		$result = $db->executeQuery($sql,false);

		if ($db->countLines($result) > 0){
			for ($i=0;$i<$db->countLines($result);$i++){
					$_SESSION['userId'] = $db->result($i,'pro_siape');
					$_SESSION['userName'] = $db->result($i,'pro_nome');
					$_SESSION['userPermissao'] = $db->result($i,'pro_permissao');
					//$_SESSION['userSituacao'] = $db->result($i,'usu_situacao');
					$_SESSION['userSession'] = $session;
					$retorno['login'] = 'Logado';
					$retorno['nome'] = $db->result($i,'pro_nome');
					$retorno['mensagem'] = "Logado com Sucesso";

			}
		}else{
			$retorno['login'] = "falha";
			$retorno['mensagem'] = "Senha e/ou login invalido";				
		}
		return $retorno;			
	}

		function logout(){
			unset($_SESSION['userId']);
			unset($_SESSION['userName']);
			unset($_SESSION['userSession']);
			unset($_SESSION['userPermissao']);
			unset($_SESSION['userSituacao']);
			unset($_SESSION['idSession']);				
		}
		
		function getLogin(){
			if ((isset($_SESSION['idSession']))&&($_SESSION['idSession'] == $_SESSION['userSession'])){
				$retorno['logged'] = "yes";
			}else{
				$retorno['logged'] = "no";
			}

			// Para o modulo enquete ele não vai precisar fazer Login
			if($_GET['module'] == 'enquetes'){
				$retorno['logged'] = "yes";
			}
			return $retorno;			
		}	
	
	function encrypt($pass){
		return md5($pass); 
	} 

	function lembrarDados($usuario, $senha) {    
        // Calcula o timestamp final para os cookies expirarem
        $tempo = strtotime("+{$this->lembrarTempo} day", time());

        // Encripta os dados do usuário usando base64
        // O rand(1, 9) cria um digito no início da string que impede a descriptografia
        $usuario = rand(1, 9) . base64_encode($usuario);
        $senha = rand(1, 9) . base64_encode($senha);
    
        // Cria um cookie com o usuário
        setcookie($this->prefixoChaves . 'lu', $usuario, $tempo, $this->cookiePath);
        // Cria um cookie com a senha
        setcookie($this->prefixoChaves . 'ls', $senha, $tempo, $this->cookiePath);
    }
    
    function verificaDadosLembrados() {
    	if(!isset($_SESSION)){
    		session_start();
    	}

    	if (isset($_COOKIE[$this->prefixoChaves . 'lu']) AND isset($_COOKIE[$this->prefixoChaves . 'ls'])) {
            // Pega os valores salvos nos cookies removendo o digito e desencriptando
            $usuario = base64_decode(substr($_COOKIE[$this->prefixoChaves . 'lu'], 1));
            $senha = base64_decode(substr($_COOKIE[$this->prefixoChaves . 'ls'], 1));
            
            $randon = md5(uniqid(time()));
			$_SESSION['idSession'] = $randon;
			
            return $this->logaUsuario($usuario, $senha, $randon);        
        }
        
        return false;
    }

    function limpaDadosLembrados() {
        if (isset($_COOKIE[$this->prefixoChaves . 'lu'])) {
            setcookie($this->prefixoChaves . 'lu', false, (time() - 3600), $this->cookiePath);
            unset($_COOKIE[$this->prefixoChaves . 'lu']);            
        }

        if (isset($_COOKIE[$this->prefixoChaves . 'ls'])) {
            setcookie($this->prefixoChaves . 'ls', false, (time() - 3600), $this->cookiePath);
            unset($_COOKIE[$this->prefixoChaves . 'ls']);            
        }
    }
}

?>