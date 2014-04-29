<?php
	$data->tabela = 'usuario';
	switch($_GET['acao']){
		
		case 'gravar_usuario':			
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
			$_POST['usu_nome']  = addslashes($_POST['usu_nome']);
			$Array['usu_nome']  = $_POST['usu_nome'];
			$_POST['usu_login'] = addslashes($_POST['usu_login']);
			$Array['usu_login'] = $_POST['usu_login'];
			$_POST['usu_senha'] = addslashes($_POST['usu_senha']);
			$Array['usu_senha'] = $_POST['usu_senha'];
			$_POST['usu_email'] = addslashes($_POST['usu_email']);
			$Array['usu_email'] = $_POST['usu_email'];			
			// Tudo Maiusculo
			$Array['usu_nome']  = mb_strtoupper($_POST['usu_nome'],'UTF-8');
			$Array['usu_login'] = mb_strtolower($_POST['usu_login'],'UTF-8'); // Minusculo
			$Array['usu_email'] = mb_strtolower($_POST['usu_email'],'UTF-8'); // Minusculo
			$Array['usu_permissao'] = $_POST['usu_permissao'];
			$Array['mun_codigo'] = $_POST['mun_codigo'];
			$data->add($Array);
			echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_usuario'>";	
		break;
		
		case 'update_usuario':
			$Array['usu_codigo'] = $_POST['usu_codigo'];
			// Retirando caracteres especiais (') para nao dar erro no banco ao gravar
			$_POST['usu_nome']  = addslashes($_POST['usu_nome']);
			$Array['usu_nome']  = $_POST['usu_nome'];
			$_POST['usu_login'] = addslashes($_POST['usu_login']);
			$Array['usu_login'] = $_POST['usu_login'];
			$_POST['usu_senha'] = addslashes($_POST['usu_senha']);
			$Array['usu_senha'] = $_POST['usu_senha'];
			$_POST['usu_email'] = addslashes($_POST['usu_email']);
			$Array['usu_email'] = $_POST['usu_email'];			
			// Tudo Maiusculo
			$Array['usu_nome']  = mb_strtoupper($_POST['usu_nome'],'UTF-8');
			$Array['usu_login'] = mb_strtolower($_POST['usu_login'],'UTF-8'); // Minusculo
			$Array['usu_email'] = mb_strtolower($_POST['usu_email'],'UTF-8'); // Minusculo
			$Array['mun_codigo'] = $_POST['mun_codigo'];
			$data->update($Array);
			echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_usuario'>";	
		break;		
		
		case 'delete_usuario':
			$Array['usu_codigo'] = $_POST['usu_codigo'];
			$data->delete($Array);
			echo "<meta http-equiv='Refresh' CONTENT='0;URL=?module=cadastros&acao=lista_usuario'>";	
		break;		
	}	
?>