<?php
echo '<!DOCTYPE html>';
/*
Universidade Federal da Fronteira Sul - UFFS
Ci�ncia da Computa��o - Campus Chapec�
Programa��o II - 19/03/2013
Aline Menin

Objetivo: Implementar um sistema web completamente funcional. Entende-se por funcional um sistema
que esteja apto a ser entregue a um potencial cliente, sendo esse capaz de utilizar a aplica��o sem problemas.
*/
	session_start();
	require_once('library.php');
	
	cabecalho();
	
	echo 
	'<div id="menu">			
		<div id = "logo"></div>
		
		<ul>
			<li> <a href="teste.php">CADASTRO DE ENQUETES</a> </li>
			<li> <a href="teste.php">CADASTRO DE ENQUETES</a> </li>
			<li> <a href="teste.php">CADASTRO DE ENQUETES</a> </li>
			<li> <a href="teste.php">CADASTRO DE ENQUETES</a> </li>
		</ul>
	</div>
		
	<div id="body_background">
	<div style="height:750px;"></div>
	</div>		
		
		
	<div id="footer">
		<div id="footer_bar"></div>
		
	</div>';
	bottom();
		
?>