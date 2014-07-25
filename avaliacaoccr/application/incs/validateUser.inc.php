<?php
	$login = new Login();
	//$validate = $login->getLogin();

	if ($_SESSION['logado'] == 0){
		if($_GET['module'] == 'enquetes'){
			$_SESSION['enquete'] = 1;
			$data = new DataManipulation();
			$utils = new Utils();

			echo "aqui";
			if (isset($_GET['enq_cod'])){
				echo "aqui";
			}
		}else{
			echo "<script>alert('Acesso Negado!');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
			exit;
		}
	}else{
		$data = new DataManipulation();
		$utils = new Utils();
			
		$userConfig['id'] = $_SESSION['userId'];
		$sql = "select *
				from professor
				where pro_cpf = '".$userConfig['id']."'";
		$paramsUsers = $data->find('dynamic',$sql);
	}
?>
