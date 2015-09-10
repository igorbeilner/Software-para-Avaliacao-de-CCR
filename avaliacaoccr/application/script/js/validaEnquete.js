var numRespostas = document.getElementById('enq_num_resp_esp');

numRespostas.onkeyup = function( e ){
	letra = numRespostas.value;

	conteudo = "";
	
	for (var i = 0; i < letra.length; i++ ) {

		if( '0' <= letra.charAt(i) && letra.charAt(i) <= '9' ){
			conteudo = conteudo + letra.charAt(i); 
		}
		else{
			break;
		}
	}	

	numRespostas.value = conteudo;
}

function valida_form(){
		var mensagem, id, qtd, perg_alter;
		if (document.getElementById('enq_nome').value == ''){
			mensagem = "É necessário preencher o nome da enquete!";
			id       = "enq_nome";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_semestre').value == ''){
			mensagem = "É necessário preencher o semestre!";
			id       = "enq_semestre";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_semestre').value.length < 5){
			mensagem = "Campo incompleto!";
			id       = "enq_semestre";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_data').value == ''){
			mensagem = "É necessário preencher a data da enquete!";
			id       = "enq_data";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else
		if (document.getElementById('enq_num_resp_esp').value == ''){
			mensagem = "É necessário preencher o número de respostas esperadas!";
			id       = "enq_num_resp_esp";
			campo_vazio(mensagem, id); // mensagem que mostrará no alert e o id para dar foco ao campo ...
		}else{
			qtd = conta_perguntas();
			document.getElementById("qtd_perg").value = qtd;

			perg_alter = conta_alter();
			document.getElementById("perg_alter").value = perg_alter;

			qtd = conta_prof_disc();
			document.getElementById("qtd_pd").value = qtd;

			document.forms['frmCadastro'].submit();
		}
	}