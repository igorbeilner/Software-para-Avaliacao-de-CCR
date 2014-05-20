<?php
class Upload extends UploadFile{
	
	private function setUpload(){
    	switch($this->getError()){		
			case 1:
				$msg_err = 'O arquivo no upload é maior do que o limite permitido ('.ini_get('upload_max_filesize').')';
			break;
			
			case 2:
				$msg_err = "O arquivo no upload é maior do que o limite permitido";
			break;

			case 3:
				$msg_err = "O upload do arquivo foi feito parcialmente!";
			break;

			case 4:
				$msg_err = "Não foi feito o upload do arquivo. Tente novamente!!!";
			break;
    			
    		}
			
			if (isset($msg_err)){
				$return[0] = false;
				$return[1] = $msg_err;
			} else{
				$return[0] = true;
			}
			
			return $return;		
	}
	
	function uploadImage(){
		$returnError = $this->setUpload();
		if($returnError[0]){
			//$imageValidation = '^image/(gif|jpg|jpeg|png|bmp|GIF|JPG|JPEG|PNG|BMP)$';				
			
			//if (ereg($imageValidation, $this->getType())){
				
				$fileName  = explode('.',$this->getName());
				$this->setName(md5(uniqid(time())).'.'.$fileName[1]);
				
				$imageDir = $this->getPath() . $this->getName();

				move_uploaded_file($this->getTmpName(),$imageDir);
				return $this->getName();
			//}else{
				//return "Formato de Imagem não Permitido!";
			//}			
		}else{
			return $returnError[1];
		}
	}
	
	function uploadFile(){
		$returnError = $this->setUpload();
/*
 * application/vnd.xls 			excel
text/plain    				txt
application/x-download  		outros
application/x-zip-compressed		ZIP
application/rar				rar
application/msword			word
text/xml				xml
application/pdf			pdf
 */
		if($returnError[0]){
			$imageValidation = '^(application/vnd.xls|text/plain|application/x-download|application/x-zip-compressed|application/pdf|application/rar|application/msword|text/xml)$';				
			if (ereg($imageValidation, $this->getType())){
				$fileName  = explode('.',$this->getName());
				$this->setName(md5(uniqid(time())).'.'.$fileName[1]);
				
				$fileDir = $this->getPath() . $this->getName();
				move_uploaded_file($this->getTmpName(),$fileDir);
				return $this->getName();
			}else{
				return "Formato de Arquivo não Permitido!";
			}			
		}else{
			return $returnError[1];
		}		
	}
}
?>