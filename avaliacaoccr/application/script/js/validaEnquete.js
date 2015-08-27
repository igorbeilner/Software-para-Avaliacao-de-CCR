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