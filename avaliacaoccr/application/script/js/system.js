// AJAX
var xmlhttp = null;
// ConexÃ£o via XmlHttp
try {
	xmlhttp = new XMLHttpRequest();
} catch(ee) {
	try {
    	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch(e) {
    	try {
        	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    	} catch(E) {
        	xmlhttp = false;
    	}
	}
}
	
function mostraConteudo(url, div) {
	// Seleciona objeto
	obj_div = document.getElementById(div);
   	// Verifica se existe xmlhttp
   	if (xmlhttp) {	
   		if(xmlhttp.readyState != 1){	
			xmlhttp.open("GET", url, true);
			xmlhttp.onreadystatechange = function() {
			   	// Verifica estado da requisiÃ§Ã£o
			    if (xmlhttp.readyState == 1) {
			    	obj_div.innerHTML = "Aguarde ...";
			    } else if (xmlhttp.readyState == 4) {
			    	// Verifica status da requisiÃ§Ã£o
					if (xmlhttp.status == 200) {
						obj_div.innerHTML = xmlhttp.responseText;
					} else {
						obj_div.innerHTML = "Erro ao carregar ...";
					}
				}
			}
   		}
   	}
   	xmlhttp.send(null);
}






$(document).ready(function(){
  
  $('.abremenu').click(function(){
    $('ul').removeClass('selected');
	var position = $('.abremenu').index(this);
	
	$('ul:gt('+position+'):lt(1)').addClass('selected');
  });
  
});

function abre(){
	alert('abriu')
}

function dialogoUrl(module,action,id, sysurl) {
		var url = '?module='+module+'&acao='+action+'&id='+id+sysurl;
		$("#dialog-confirm").dialog('open');
		
		$("#dialog-confirm").dialog({
			resizable: false,
			height:140,
			modal: true,
			buttons: {
				'Sim': function() {
					$(this).dialog('close');
					window.location = url;
				},
				'Não': function() {
					$(this).dialog('close');
				}
			}
		});
	}
	
function dialogo(module,action,id) {
		var url = '?module='+module+'&acao='+action+'&id='+id;
		$("#dialog-confirm").dialog('open');
		
		$("#dialog-confirm").dialog({
			resizable: false,
			height:140,
			modal: true,
			buttons: {
				'Sim': function() {
					$(this).dialog('close');
					window.location = url;
				},
				'Não': function() {
					$(this).dialog('close');
				}
			}
		});
	}
	
function validaSenha(){
	if($('#senha').val() != $('#newSenha').val()){
		alert('A nova senha e a repetição não conferem!');
		$('#senha , #newSenha').css({'border':'#FF0000 solid 1px'});
		return false;
	}
	
	return true;	
}
