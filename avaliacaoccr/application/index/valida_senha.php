<?php
	session_start();

	$data = new DataManipulation();
	$utils = new Utils();

	$user = addslashes($_POST['usuario']);
	$pass = addslashes($_POST['senha']);
	//extract data from the post
	extract($_POST);

	//set POST variables
	$url = 'https://moodle.uffs.edu.br/login/index.php';
	$fields = array(
			'username'=>urlencode($user),
			'password'=>urlencode($pass)
			);

	//url-ify the data for the POST
	foreach($fields as $key=>$value) {
		$fields_string .= $key.'='.$value.'&'; 
	}
	rtrim($fields_string,'&');

	//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_getinfo($ch, CURLINFO_HTTP_CODE); 
	curl_setopt($ch,CURLOPT_FAILONERROR, true);

	//execute post
	$result = curl_exec($ch);

	preg_match_all('/^Set-Cookie:\s*([^\r\n]*)/mi', $result, $ms);
	// print_r($result);
			
	$cookies = array();
	foreach ($ms[1] as $m) {
	    list($name, $value) = explode('=', $m, 2);
	    $cookies[$name] = $value;
	}
			//print_r($cookies);
			
	$response = curl_getinfo( $ch );

	$resposta = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	if ($resposta == '404'){
		echo "fora do ar";
	}

			//echo 'response=';
			//print_r($response);

	if ($response['redirect_count'] == 2){
		$sql = "select * from professor where pro_cpf = ".$user;
		$result = $data->find('dynamic', $sql);

		$_SESSION['userId'] = $user;
		$_SESSION['logado'] = 1;
		if(count($result) > 0){
			$_SESSION['userPermissao'] = $result[0]['pro_permissao'];

			if($_SESSION['userPermissao'] == 1){ // ADM
				echo "<meta http-equiv='refresh' content='0;URL=?module=cadastros&acao=administrador'>";	
			}else
			if($_SESSION['userPermissao'] == 2){ // PROFESSOR
				echo "<meta http-equiv='refresh' content='0;URL=?module=relatorios&acao=professor'>";	
			}
		}
		else{ // ALUNO
			if (isset($GET['url'])){
				//echo "<meta http-equiv='refresh' content='0;URL=".$GET['url']."'>";
			}
		}
	}else{
		$_SESSION['logado'] = 0;
		echo "<script>alert('Senha e/ou login invalido');</script>"; 
		echo "<meta http-equiv='refresh' content='0;URL=?module=index'>";
	}

			//close connection
			curl_close($ch);


	/*
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
					echo "<meta http-equiv='refresh' content='0;URL=?module=cadastros&acao=administrador'>";	
				}else
				if($_SESSION['userPermissao'] == 2){ // PROFESSOR
					echo "<meta http-equiv='refresh' content='0;URL=?module=relatorios&acao=professor'>";	
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
	*/

	/*
			
			*/	
?>