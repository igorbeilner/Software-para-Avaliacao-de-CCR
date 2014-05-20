<?php
/*
 * $_FILES["file"]["name"] - the name of the uploaded file
 * $_FILES["file"]["type"] - the type of the uploaded file
 * $_FILES["file"]["size"] - the size in bytes of the uploaded file
 * $_FILES["file"]["tmp_name"] - the name of the temporary copy of the file stored on the server
 * $_FILES["file"]["error"] - the error code resulting from the file upload
 */
class UploadFile{
	private $path;
	private $name;
	private $type;
	private $size;
	private $tmp_name;
	private $error;

	function setName($name){
		$this->name = $name;
	}
	function getName(){
		return $this->name;
	}
	
	function setType($type){
		$this->type = $type;
	}
	function getType(){
		return $this->type;
	}
	
	function setSize($size){
		$this->size = $size;
	}
	function getSize(){
		return $this->size;
	}
	
	function setTmpName($tmpName){
		$this->tmp_name = $tmpName;
	}
	function getTmpName(){
		return $this->tmp_name;
	}
	
	function setError($error){
		$this->error = $error;	
	}
	function getError(){
		return $this->error;
	}
	
	function setPath($path){
		$this->path = $path;
	}
	function getPath(){
		return $this->path;
	}
} 


?>