<!-- ------------------------- CADASTROS ------------------------------------ -->
<?php 
	if($_SESSION['userPermissao'] == 1){ // ADM
?>
        <li class="navprimary"><a class="abremenu" href="#">Menu</a> 
            <ul <?php if($_GET['module'] == 'cadastros'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=cadastros&acao=nova_enquete'>Enquetes</a></li>						
            </ul> 
             <ul <?php if($_GET['module'] == 'relatorios'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=relatorios&acao=rel_adm' >Relatórios</a></li>						
            </ul>
            <ul <?php if($_GET['module'] == 'cadastra_professor'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=cadastros&acao=cadastra_professor' >Cadastrar professor</a></li>						
            </ul>  
			<ul <?php if($_GET['module'] == 'cadastra_disciplina'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=cadastros&acao=cadastra_disciplina' >Cadastrar disciplina</a></li>						
            </ul> 
            <ul <?php if($_GET['module'] == 'alternativa'){ echo 'class="selected"';}?>>                
                <li><a href='?module=cadastros&acao=cadastra_alternativa' >Cadastrar alternativa</a></li>                     
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