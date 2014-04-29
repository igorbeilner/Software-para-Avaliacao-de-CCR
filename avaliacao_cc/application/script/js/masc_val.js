// JavaScript Document

//Mensagem para preencher campo vazio
function campo_vazio(mensagem, id){
	// div do alert
	var div = document.createElement("div"); 
	div.innerHTML = "<div id='preencha' title='Aviso' >"+mensagem+"</div>";

	$(function() {		
		$(div.innerHTML).dialog({			
				autoOpen: true,
				resizable: false,
				autoClose: false,
				height: 145,
				width: 360,
				hide: "clip",
				modal: true,
				resize: false,
				buttons: {
					Ok: function() {
						$(this).dialog("close");
						document.getElementById(id).focus();
						document.getElementById(id).style.backgroundColor = '#fff6d5';
					}
				}
		});
	});	
}

//adiciona mascara de cnpj
function MascaraCNPJ(cnpj){
	if(mascaraInteiro(cnpj)==false){
		event.returnValue = false;
	}	
	return formataCampo(cnpj, '00.000.000/0000-00', event);
}

//adiciona mascara de cep
function MascaraCep(cep){
		if(mascaraInteiro(cep)==false){
		event.returnValue = false;
	}	
	return formataCampo(cep, '00.000-000', event);
}

//adiciona mascara de hora
function MascaraHora(hora){	
	if(mascaraInteiro(hora)==false){
		event.returnValue = false;
	}	
	return formataCampo(hora, '00:00', event);
}

//adiciona mascara de data
function MascaraData(data){
	if(mascaraInteiro(data)==false){
		event.returnValue = false;
	}	
	return formataCampo(data, '00/00/0000', event);
}

//adiciona mascara ao telefone
function MascaraTelefone(tel){	
	if(mascaraInteiro(tel)==false){
		event.returnValue = false;
	}	
	return formataCampo(tel, '(00) 0000-0000', event);
}

//adiciona mascara ao CPF
function MascaraCPF(cpf){
	if(mascaraInteiro(cpf)==false){
		event.returnValue = false;
	}	
	return formataCampo(cpf, '000.000.000-00', event);
}

//valida telefone
function ValidaTelefone(tel){
	exp = /\(\d{2}\)\ \d{4}\-\d{4}/
	if(!exp.test(tel.value))
		alert('Numero de Telefone Invalido!');
}

//valida CEP
function ValidaCep(cep){
	exp = /\d{2}\.\d{3}\-\d{3}/
	if(!exp.test(cep.value))
		alert('Numero de Cep Invalido!');		
}

//valida data
function ValidaData(data){
	exp = /\d{2}\/\d{2}\/\d{4}/
	if(!exp.test(data.value))
		alert('Data Invalida!');			
}

//valida data
function ValidaHoraMinuto(hora){
	var hora_1, minuto_1;
	
	hora_1   = hora.value.substring(0,2);
	minuto_1 = hora.value.substring(3,5); 

	if(hora_1 > 23){
		alert('Hora Invalida!');
		hora.focus();
	}else
		if(minuto_1 > 59){
			alert('Minutos Invalidos!');
			hora.focus();
		}
}


//div para o alert aviso do cpf
var div = document.createElement("div"); 
div.innerHTML = "<div id='aviso_cpf' title='Aviso' > CPF inv&aacute;lido! </div>";

//valida o CPF digitado
function ValidarCPF(Objcpf){
	var cpf = Objcpf.value;
	cpf = cpf.replace('.','');
    cpf = cpf.replace('.','');
    cpf = cpf.replace('-','');
	
	if(vercpf(cpf)){
		document.frmcpf.submit();
	}else{
		errors="1";

		if(errors){ 
			$(function() {
				$(div.innerHTML).dialog({
						autoOpen: true,
						resizable: false,
						autoClose: false,
						height: 130,
						width: 320,
						hide: "clip",
						modal: true,
						resize: false,
						buttons: {
							Ok: function() {
								$(this).dialog("close");
								 document.getElementById("alu_cpf").focus();
							}
						}
				});
			});	
		}
		document.retorno = (errors == '');
	}
}

function vercpf(cpf){
	if (cpf.length > 0){
		if (cpf.length != 11 || 
			cpf == "00000000000" || 
			cpf == "11111111111" || 
			cpf == "22222222222" || 
			cpf == "33333333333" || 
			cpf == "44444444444" || 
			cpf == "55555555555" || 
			cpf == "66666666666" || 
			cpf == "77777777777" || 
			cpf == "88888888888" || 
			cpf == "99999999999")
		
		return false;
		add = 0;
		
		for (i=0; i < 9; i ++)
			add += parseInt(cpf.charAt(i)) * (10 - i);
			rev = 11 - (add % 11);
			
			if (rev == 10 || rev == 11)
				rev = 0;
				
				if (rev != parseInt(cpf.charAt(9)))
					return false;
					add = 0;
					
					for (i = 0; i < 10; i ++)
						add += parseInt(cpf.charAt(i)) * (11 - i);
						rev = 11 - (add % 11);
						
						if (rev == 10 || rev == 11)
							rev = 0;
							
							if (rev != parseInt(cpf.charAt(10)))
								return false;
								//alert('O CPF informado é válido!');
								return true;
	}else{
		return true;
	}
	
}

//valida numero inteiro com mascara
function mascaraInteiro(){
	if (event.keyCode < 48 || event.keyCode > 57){
		event.returnValue = false;
		return false;
	}
	return true;
}

//valida o CNPJ digitado
function ValidarCNPJ(ObjCnpj){
	var cnpj = ObjCnpj.value;
	var valida = new Array(6,5,4,3,2,9,8,7,6,5,4,3,2);
	var dig1= new Number;
	var dig2= new Number;

	if (cnpj.length > 0){	
		exp = /\.|\-|\//g
		cnpj = cnpj.toString().replace( exp, "" ); 
		var digito = new Number(eval(cnpj.charAt(12)+cnpj.charAt(13)));
			
		for(i = 0; i<valida.length; i++){
			dig1 += (i>0? (cnpj.charAt(i-1)*valida[i]):0);	
			dig2 += cnpj.charAt(i)*valida[i];	
		}
		dig1 = (((dig1%11)<2)? 0:(11-(dig1%11)));
		dig2 = (((dig2%11)<2)? 0:(11-(dig2%11)));
		
		if(((dig1*10)+dig2) != digito)	
			alert('CNPJ Invalido!');
	}else{
		return true;
	}
}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) { 
	var boleanoMascara; 
	
	var Digitato = evento.keyCode;
	exp = /\-|\:|\.|\/|\(|\)| /g
	campoSoNumeros = campo.value.toString().replace( exp, "" ); 
   
	var posicaoCampo = 0;	 
	var NovoValorCampo="";
	var TamanhoMascara = campoSoNumeros.length;; 
	
	if (Digitato != 8) { // backspace 
		for(i=0; i<= TamanhoMascara; i++) { 
			boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
								|| (Mascara.charAt(i) == "/")) 
			boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
								|| (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")|| (Mascara.charAt(i) == ":")) 
			if (boleanoMascara) { 
				NovoValorCampo += Mascara.charAt(i); 
				  TamanhoMascara++;
			}else { 
				NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
				posicaoCampo++; 
			  }	   	 
		  }	 
		campo.value = NovoValorCampo;
		  return true; 
	}else { 
		return true; 
	}
}