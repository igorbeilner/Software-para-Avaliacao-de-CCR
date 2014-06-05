<!--------------------------- CADASTROS -------------------------------------->
<?php 
	if($_SESSION['userPermissao'] == 1){ // ADM
?>
        <li class="navprimary"><a class="abremenu" href="#">Menu</a> 
            <ul <?php if($_GET['module'] == 'cadastros'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=cadastros&acao=nova_enquete'>Criar enquete</a></li>						
            </ul> 
             <ul <?php if($_GET['module'] == 'relatorios'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=relatorios&acao=rel_adm' >Relatórios</a></li>						
            </ul>
            <ul <?php if($_GET['module'] == 'about'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=about&acao=about' >Sobre</a></li>						
            </ul>  
        </li>
<?php
	}
	if($_SESSION['userPermissao'] == 2){ // professor
?>
        <li class="navprimary"><a href="#">Menu</a> 
			<ul <?php if($_GET['module'] == 'relatorios'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=relatorios&acao=rel_professor' >Relatórios</a></li>						
           	</ul>
 			<ul <?php if($_GET['module'] == 'about'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=about&acao=about' >Sobre</a></li>						
            </ul>  
        </li>
<?php
	}
?>