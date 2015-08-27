<?php
	class IndexCommand implements Command {

		public function execute() {
			if($_GET['acao'] == 'logout'){
				require_once 'application/index/logout.inc.php';
			}

			$randon = md5(uniqid(time()));
			$_SESSION['idSession'] = $randon;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Enquetes CC</title>
        <link href="application/images/icon_site.png" rel="icon">
		<script src="library/jquery-ui-1.10/js/jquery-1.9.1.js"></script>
        <script src="library/jquery-ui-1.10/js/jquery-ui-1.10.1.custom.js"></script>
		<script src="application/script/js/system.js"></script>
		<script>
			$(document).ready(function(){
	  			$('input[type=text],input[type=password]').focus(function(){
	     			if (this.defaultValue == $(this).val()) {
						$(this).val('')
					}
	  			});

	  			$('input[type=text],input[type=password]').focusout(function(){
	     			if ($(this).val() == "") {
						$(this).val(this.defaultValue)
					}
	  			});
			});

		</script>

    <link rel="stylesheet" href="application/script/css/system.css" type="text/css" media="screen" />
</head>

<body>
	<div id="geral">
  		<div id="topo">
    		<img src="application/images/logo_site.png" />
  		</div>
		<div style="clear:both;"></div>

		<div id="container">

    		<div style="background-color: #f0f0f0; left:-120px; position:relative; width:325px; top:-70px;" id="conteudo">
                <div >
                    CPF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senha
                </div>
    			<form id="login" action='?module=index&action=valida_senha' method="post">
                    <input type="text" 		name="usuario" placeholder="Insira aqui seu CPF"/>

                    <!--<input type="hidden" 	name="idSession" value="<?php echo $randon;?>" /> -->
                    <input type="password" 	name="senha" value="" />
 									<input style="width: 320px; margin-top: 10px;" type="submit" value="enviar"/>
    			</form>
    		</div>
    		<div style="clear:both;"></div>
  		</div>
		<div style="clear:both;"></div>
	</div>
	<div id="rodape">
		<?php require_once 'application/incs/foot.inc.php';?>
	</div>
</body>
</html>

<?php
		}
	}
?>
