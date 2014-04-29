<!--------------------------- CADASTROS -------------------------------------->
<li class="navprimary"><a class="abremenu" href="#">Cadastros</a> 
    <ul <?php if($_GET['module'] == 'cadastros'){ echo 'class="selected"';}?>>     	        
        <?php
			if($_SESSION['userPermissao'] == 1){ // ADM
				echo "<li><a href='?module=cadastros&acao=lista_professor'>Professor</a></li>";		
			}
		?>
        <li><a href='?module=cadastros&acao=lista_funcao' >Nada</a></li>	
    </ul> 
</li>
