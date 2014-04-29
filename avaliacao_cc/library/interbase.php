<?php
/**
 * Classe para Conexao com banco de dados Firebird/Interbase
 */
$host = '127.0.0.1:C:/Sistemas/Bases/AGEBA001.FDB';
$user = 'SYSDBA';
$pass = 'masterkey';

define("db_host", $host); // host de conexão com o MySQL
define("db_username", $user); // nome do usuário para conexão
define("db_password", $pass); // senha do usuário para conexão

class Interbase
{

    //conexao com o banco de dados
    function connOpen()
    {
        @$this->conn = ibase_connect(db_host, db_username, db_password);
        if (!$this->conn)
        {//caso haja erro na conexao
            echo 'Erro ao conectar com o servidor. '.$this->error();
            exit (1);
        }

    }

    //fechar a conexao com o banco
    function connClose()
    {
        ibase_close($this->conn);
    }

    /**
     * executa uma sql no banco
     *
     * @param String $sql, comando SQL a ser executado no banco ex: SELECT * FROM tabela
     * @return Variante
     */
    function executeQuery($sql)
    {
		$this->connOpen();

        $result = ibase_query($this->conn,$sql);
        if (!$result)
        {//caso nao execute a query corretamente
            echo 'Não foi possivel executar o comando SQL. '.$this->error();
            exit (1);
        }
		
		$this->connClose();
		
		return $result;	
    }

    /**
     * retorna as linhas de uma consulta
     *
     * @return array
     */
    function result($array)
    {
        $count = 0;
		while ($row[$count] = ibase_fetch_assoc($array)){
			$count++;
		}
		
		return $row;
    }

    /**
     * mostrar o erro caso haja
     *
     * @return String
     */
    function error()
    {
        return ibase_errmsg();
    }
	/**
	 * Retorno um novo id generator
	 * 
	 * $return integer
	 */
	function lastId($generator){
		$generator = ibase_gen_id($generator,1);		
		return $generator;
	}
}
?>
