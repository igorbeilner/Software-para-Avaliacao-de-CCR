<?php
	session_start();
	require_once('connect.php');
	
	$error_cpf = 0;
	$error_username = 0;
	
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['last_name'] = $_POST['last_name'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['rg'] = $_POST['rg'];
	$_SESSION['cpf'] = $_POST['cpf'];
	$_SESSION['phone'] = $_POST['phone'];
	$_SESSION['phone2'] = $_POST['phone2'];
	$_SESSION['state'] = $_POST['dropdown'];
	$_SESSION['city'] = $_POST['city'];
	$_SESSION['cep'] = $_POST['cep'];
	$_SESSION['nbhood'] = $_POST['neighborhood'];
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['number'] = $_POST['number'];
	$_SESSION['complement'] = $_POST['complement'];
	$_SESSION['formation'] = $_POST['formation'];
	$_SESSION['speciality'] = $_POST['speciality'];
	
	$name = addslashes($_POST['name']);
	$lname = addslashes($_POST['last_name']);
	$email = addslashes($_POST['email']);
	$rg = addslashes($_POST['rg']);
	$cpf = addslashes($_POST['cpf']);
	$phone = addslashes($_POST['phone']);
	$phone1 = addslashes(@$_POST['phone2']);
	$state = addslashes($_POST['dropdown']);
	$city = addslashes($_POST['city']);
	$cep = addslashes($_POST['cep']);
	$nbhood = addslashes($_POST['neighborhood']);
	$address = addslashes($_POST['address']);
	$number = addslashes($_POST['number']);
	$complement = addslashes($_POST['complement']);
	$formation = addslashes($_POST['formation']);
	$speciality = addslashes($_POST['speciality']);
	
	$cpf_test = mysql_query('SELECT cpf FROM patient WHERE cpf = "'.$_POST['cpf'].'"');
	if (mysql_num_rows($cpf_test) > 0){
		$error_cpf = 1;
	}
	
	if ($error_cpf == 1){
		header('Location:register.php?error_cpf='.$error_cpf.'');
	}else{
		$cod = mysql_query('SELECT cod FROM city WHERE name = "'.$_POST['city'].'" AND state="'.$state.'"');
		if (mysql_num_rows($cod) == 0){
			mysql_query("INSERT INTO city (cod, name, state) VALUES (NULL,'$city','$state')") or die ("N�o foi poss�vel inserir a cidade");
		}
		$result = mysql_query('SELECT cep FROM address WHERE cep = "'.$_POST['cep'].'"');
		if (mysql_num_rows($result) == 0){
			$ccity = mysql_query('SELECT cod FROM city WHERE name = "'.$_POST['city'].'" AND state="'.$state.'"');
			if (mysql_num_rows($ccity) > 0){
				$data = mysql_fetch_assoc($ccity);
				$ccity = $data['cod'];
				$sqlinsert = "INSERT INTO address (cod_city, neighborhood, address, number, complement, cep) VALUES ('$ccity','$nbhood','$address','$number','$complement','$cep')";
				mysql_query($sqlinsert) or die ("N�o foi possivel inserir endere�o");
			}
		}
		$sqlinsert = "INSERT INTO professional (cpf, name, lastname, formation, email, rg, speciality, cep) VALUES('$cpf','$name','$lname','$formation','$email','$rg','$speciality','$cep')";
		mysql_query($sqlinsert) or die("N�o foi poss�vel inserir os dados");
		
		if (isset($_POST['phone2']) && $_POST['phone2'] != ""){
			$result = mysql_query('SELECT number FROM phone WHERE number = "'.$_POST['phone2'].'"');
			if (mysql_num_rows($result) == 0){
				$phone2 = $_POST['phone2'];
				mysql_query("INSERT INTO phone (number, patient, professional) VALUES ('$phone2',NULL, '$cpf')") or die ("Erro ao inserir o n�mero de telefone");
			}
		}
		$result = $result = mysql_query('SELECT number FROM phone WHERE number = "'.$_POST['phone'].'"');
		if (mysql_num_rows($result) == 0){
			mysql_query("INSERT INTO phone (number, patient, professional) VALUES ('$phone',NULL,'$cpf')") or die ("N�o foi poss�vel inserir o n�mero de telefone");
		}
		$_SESSION['name'] = "";
		$_SESSION['last_name'] = "";
		$_SESSION['email'] = "";
		$_SESSION['birth_date'] = "";
		$_SESSION['rg'] = "";
		$_SESSION['cpf'] = "";
		$_SESSION['btype'] = "";
		$_SESSION['phone'] = "";
		$_SESSION['phone2'] = "";
		$_SESSION['sex'] = "";
		$_SESSION['state'] = "";
		$_SESSION['city'] = "";
		$_SESSION['cep'] = "";
		$_SESSION['nbhood'] = "";
		$_SESSION['address'] = "";
		$_SESSION['number'] = "";
		$_SESSION['complement'] = "";
		$_SESSION['formation'] = "";
		$_SESSION['speciality'] = "";
		header ('Location:register.php?sucess=1');
	}
	
	
	
	
	
?>