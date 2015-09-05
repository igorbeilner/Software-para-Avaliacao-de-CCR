<?php
require_once 'DataSet.php';

class DataManipulation{
	
	var $tabela;
	
	function executaSQL($sql){
		$dataset = new DataSet();
		$dataset->executeRecord($sql);
	}
	
	function add($data){
		foreach($data as $key => $valor){
			$campos[] = $key;
			$valores[] = $valor;  
		}
		
		for ($i=0;$i<count($campos);$i++){
			if ($i==0){
				$field = $campos[$i];
				$values = "'".$valores[$i]."'";
			}else{
				$field .= ', '.$campos[$i];
				$values .= ", '".$valores[$i]."'";	
			}
		}
		$dataset = new DataSet();
		$sql = "INSERT INTO ".$this->tabela." (".$field.") VALUES (".$values.")";
		//echo $sql;
		return $dataset->executeRecord($sql);
	}
	
	function update($data){
		$dataset = new DataSet();
		$sql = "SHOW INDEXES FROM ".$this->tabela." WHERE Key_name = 'PRIMARY'";
		$result = $dataset->listRecord($sql); 		
		foreach($data as $key => $valor){	
			$campos[]  = $key;
			$valores[] = $valor;
		}
		
		for ($i=0;$i<count($campos);$i++){
			if ($i==0){
				$values = $campos[$i]." = '".$valores[$i]."'";
			}else{
				$values .= ", ".$campos[$i]." = '".$valores[$i]."'";	
			}
		}
		
		for($i=0;$i<count($result);$i++){
			if($campos[$i] = $result[$i]['Column_name']){
				$chave[$i] = $campos[$i];
				$id[$i]    = $valores[$i];
			}
		}
		
		for($i=0;$i<count($chave);$i++){
			if ($i==0){
				$values_key = $chave[$i]." = '".$id[$i]."'";
			}else{
				$values_key .= " AND ".$chave[$i]." = '".$id[$i]."'";	
			}
		}
		
		$sql = "UPDATE ".$this->tabela." SET ".$values." WHERE ".$values_key;
		//echo $sql.'<br />';
		$dataset->executeRecord($sql);		
	}	

	function delete($data){
		$dataset = new DataSet();
		$sql = "SHOW INDEXES FROM ".$this->tabela." WHERE Key_name = 'PRIMARY'";
		$result = $dataset->listRecord($sql);
		foreach($data as $key => $valor){	
			$campos[]  = $key;
			$valores[] = $valor;
		}
		
		for ($i=0;$i<count($campos);$i++){
			if ($i==0){
				$values = $campos[$i]." = '".$valores[$i]."'";
			}else{
				$values .= " AND ".$campos[$i]." = '".$valores[$i]."'";	
			}
		}
		
		$sql = "DELETE FROM ".$this->tabela." WHERE ".$values;
		//echo $sql."<br />";
		$dataset->executeRecord($sql);	
	}
	
	function find($type=false,$params=false,$order=false){
		$dataset = new DataSet();
		
		switch($type){
			case 'all': default:
				$sql = "SELECT * FROM ".$this->tabela;
			break;
			
			case 'list':
				$i = 0;
				if($params != false){
					foreach($params as $key => $valor){
						if($i == 0){
							$conditions = $key." = '".$valor."'";
							$i++;
						}else{
							$conditions .= " AND ".$key." = '".$valor."'";
						}  
					}
				}else{
					$conditions = '1';
				}

				$sql = "SELECT * FROM ".$this->tabela." WHERE ".$conditions;
				
			break;

			case 'dynamic':
				$sql = $params;	
			break;
		}
		if($order != false){
			$sql .= " order by ".$order;	
		}
		return $dataset->listRecord($sql);
	}
}
?>