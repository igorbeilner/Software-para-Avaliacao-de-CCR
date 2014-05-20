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
