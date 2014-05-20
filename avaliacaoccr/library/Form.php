<?php
class Form{
	
	public function create($action=false,$method='GET',$array=false){
		if($array){
			foreach($array as $key => $valor){
				$string .= $key.'="'.$valor.'" ';  
			}
		}
		if($action == false){
			$action = $_SERVER['PHP_SELF'];
		}
		echo '<form action="'.$action.'" method="'.$method.'" '.$string.'>';
	}
	
	public function input($type,$name,$array=false){
		if($array){
			foreach($array as $key => $valor){
				$string .= $key.'="'.$valor.'" ';  
			}
		}
		echo '<input type="'.$type.'" name="'.$name.'" '.$string.' />';		
	}
	
	public function end($value,$array=false){
		if($array){
			foreach($array as $key => $valor){
				$string .= $key.'="'.$valor.'" ';  
			}
		}
		echo '<input type="submit" value="'.$value.'" '.$string.' />';
		echo '</form>';		
	}
	
}

?>