<?php
class Utils{
	
	public function isAjax(){
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    }
	
	public function formatDate($delimiter, $value){
		$date = explode($delimiter,$value);
		
		if($delimiter == '-'){
			$newDate = $date[2].'/'.$date[1].'/'.$date[0];	
		}else{
			$newDate = $date[2].'-'.$date[1].'-'.$date[0];	
		}
		
		return $newDate;		
	}
	
	// A $DATA2 DEVERÁ SER MAIOR QUE A $DATA1
	// O FORMATO DAS DATAS DEVEM SER DD/MM/AAAA
	public function mesesDeDiferenca($data1, $data2) {
		if($data1 && $data2) {
			$vetorData1 = explode("-", $data1);
			$vetorData2 = explode("-", $data2);
			
			$resultado = ($vetorData2[0] - $vetorData1[0])*12;
			
			if($vetorData1[1] > $vetorData2[1]){			
				$resultado -= ($vetorData1[1] - $vetorData2[1]);
			}else 
				if($vetorData2[1] > $vetorData1[1]){
					$resultado += ($vetorData2[1] - $vetorData1[1]);
				}
				
			if($vetorData1[2] > $vetorData2[2]){			
				$resultado -= 1;
			}
				
		}else{ 
			$resultado = 0;
		}
		return $resultado;
	}
}
?>