<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>EducaWeb - Sistema de Gestão Escolar Web</title>
        
        <link href="application/images/icon.png" rel="icon">
        <link rel="stylesheet" href="library/jquery-ui-1.10/css/smoothness/jquery-ui-1.10.1.custom.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="application/script/css/system.css" type="text/css" media="screen" />
        
        <script src="library/jquery-ui-1.10/js/jquery-1.9.1.js"></script>
        <script src="library/jquery-ui-1.10/js/jquery-ui-1.10.1.custom.js"></script>
        <script src="library/jquery-ui-1.10/development-bundle/ui/jquery.ui.core.js"></script>
        <script src="library/jquery-ui-1.10/development-bundle/ui/jquery.ui.widget.js"></script>
        <script src="library/jquery-ui-1.10/development-bundle/ui/jquery.ui.position.js"></script>
        <script src="library/jquery-ui-1.10/development-bundle/ui/jquery.ui.tooltip.js"></script>
        <script src="library/jquery-ui-1.10/development-bundle/ui/jquery.ui.effect.js"></script>
        <script src="library/jquery-ui-1.10/development-bundle/ui/jquery.ui.effect-explode.js"></script>
        <script src="library/jquery-ui-1.10/development-bundle/ui/jquery.ui.autocomplete.js"></script>
        
        
        <link rel='stylesheet' type='text/css' href='library/jquery-ui-1.10/fullcalendar/fullcalendar.css' />
        <link rel='stylesheet' type='text/css' href='library/jquery-ui-1.10/fullcalendar/fullcalendar.print.css' media='print' />
        <script type='text/javascript' src='library/jquery-ui-1.10/fullcalendar/fullcalendar.js'></script>
        <script>
			function topo(){
				$('html, body').animate({
					scrollTop: $("#vemaqui").offset().top
				}, 1000);
			}
			$(document).ready(function(){
				$("#selo").hide();
			});
			
			window.onscroll = function() {
				if(window.scrollY > 100) {
					$('#selo').show();
				} else {
					// esconder botão...
					$('#selo').hide();
				}
			}
		</script>
        
        <style type='text/css'>
			#calendar {
				width: 626px;
				position:relative;
				left:-18px;
			}
		</style>
        <script src="application/script/js/imc_percentil.js"></script>
        <script src="application/script/js/circ_abdominal.js"></script>
        <script src="application/script/js/system.js"></script>
        <script src="application/script/js/masc_val.js"></script>
		<?php require_once 'application/incs/header.inc.php'; ?>
	</head>
	<body>
    	<img id="selo" src="application/images/logo_fixa.png" style="position:fixed; top:500px; cursor:pointer;" onclick="topo();" title="Voltar ao Topo" />
        <div id="vemaqui"></div>
		<div id="geral" >
  			<div id="topo">
				<?php require_once 'application/incs/top.inc.php';?>
  			</div>
			<div style="clear:both;"></div>

  			<div id="container" >
  				<div id="conteudo" style="width:985px; border-radius:5px; ">
					<?php 
                      require_once 'application/'.$_GET['module'].'/controller/'.$_GET['module'].'_controller.php';
                    ?>
				</div>
    			<div style="clear:both;"></div>
            </div>
			<div style="clear:both;"></div>
        </div>
        
        <div id="rodape">
        	<br />
        	<?php require_once 'application/incs/foot.inc.php';?>      
        </div>
        <div style="clear:both;"></div>
	</body>
</html>
