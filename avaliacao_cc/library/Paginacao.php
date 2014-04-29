<?php
/**
*	Classe de Paginação
*	Criada por Israel dos Santos
*	08/03/2013
*	
*	Modo e Usar a Classe:
*	1 - É necessário instanciar a classe
*			$pg = new Paginacao();
*
*	2 - Definir o limite de itens por pagina e também fazer a validação da pagina selecionada, que vem por $_GET.
*		$limite = 30;
*	
*		$pagina = $_GET['pag'];
*		if(!$pagina){	
*			$pagina = 1; 
*		}
*
*	3 - Crie a consulta sql padrão, exemplo, SELECT * FROM tabela, e joge esse sql em uma variavel. Após isso basta chamar a função de paginação, passo os paramentros
*		$result = $pg->gerar_paginacao($limite,$pagina,$sql);
*
*	Obs.: esse result é um array com os valores da consulta já quebrado por pagina, pois essa função já faz todo trabalho de paginação.
*
*	4 - Após você ter montado toda a presentação dos Dados, agora é necessário montar o rodapé com o numero das paginas, ou seja, a navegação de sua paginação.
*		Pra isso é necessário primeiro montar os parametros para depois chamar a função que gera o rodapé.
*
*		//Monto lista de parametros que estaram $_GET
*		$nome[0]  = 'module';
*		$valor[0] = 'cadastros';
*		
*		$nome[1]  = 'acao';
*		$valor[1] = 'lista_cidade';
*
*		//Chama a funcão que monta o Rodapé
*		$pg->rodape(10,$pagina,$nome,$valor);	
*/
	require_once 'DataManipulation.php';
	$data = new DataManipulation();
    class Paginacao{
		var $inicio, $total_registros, $total_paginas, $limite;
		
    	function gerar_paginacao($limite,$pagina,$sql){
			$data = new DataManipulation();
			$this->limite = $limite;
			$this->pagina = $pagina;				
			$this->inicio = ($pagina * $limite) - $limite;
			$total_registros = count($data->find('dynamic',$sql));
			$this->total_paginas = ceil($total_registros / $limite); 
			
			$data = new DataManipulation();
			$sql .= " LIMIT ".$this->inicio.",".$this->limite;
			$result = $data->find('dynamic',$sql);
			
			return $result;		
    	}
		
		//function rodape($links_laterais,$pagina,$modulo,$acao,$tipo_filtro,$filtro){
		function rodape($links_laterais,$pagina,$parametro_nome,$parametro_valor){
			$parametros = '';

			for($i=0;$i<count($parametro_valor);$i++){
				$parametros .= '&'.$parametro_nome[$i].'='.$parametro_valor[$i];
			}

			// variáveis para o loop
			$ini = $pagina - $links_laterais;
			$limite = $pagina + $links_laterais;
			
			echo '<center>
					<div style="background-color:#EEE;">';
			if($pagina > 11){
				echo '<a id="pag_numero" href="?pag=1'.$parametros.'">1</a>&nbsp;'; // Escreve o número e o link da página
				echo '...';
			}
			for ($i = $ini; $i <= $limite; $i++){
				if ($i == $pagina){
					echo '&nbsp;<b id="pag_sel">' . $i . '</b>'; // Escreve o número e o link da página
				} else {
					if ($i >= 1 && $i <= $this->total_paginas){
						
						echo '&nbsp;<a id="pag_numero" href="?pag='.$i.$parametros.'">'.$i.'</a>'; // Escreve o número e o link da página
					}
				}
			}
			$lim_fim = ($this->total_paginas-10);
			if($pagina < $lim_fim){
				if($pagina < ($lim_fim-1)){
					echo '&nbsp;...';
				}
				echo '&nbsp;<a id="pag_numero" href="?pag='.$this->total_paginas.$parametros.'">'.$this->total_paginas.'</a>'; // Escreve o número e o link da página
			}
			echo "		</div>
					<center>	";
		}
    }
?>
