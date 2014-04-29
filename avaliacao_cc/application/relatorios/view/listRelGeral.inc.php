<?php
include_once('library/fpdf/fpdf.php');
include_once('library/pdf/PHPJasperXML.inc.php');

$server='localhost';
$user='root';
$pass='amosc999m';
//$pass='';
$db='antroweb';

$xml = simplexml_load_file("application/relatorios/jrxml/relatorio_geral.jrxml");

$cidade = $_POST['cid_codigo'];
$inicial = explode('/',$_POST['data_ini']);
$final   = explode('/',$_POST['data_fim']);

$ini = $inicial[2].'-'.$inicial[1].'-'.$inicial[0];
$fim = $final[2].'-'.$final[1].'-'.$final[0];

$PHPJasperXML = new PHPJasperXML();
$PHPJasperXML->debugsql=false;

$PHPJasperXML->arrayParameter=array("data_inicial"=>$ini,"data_final"=>$fim,"cid_codigo"=>$cidade);
$PHPJasperXML->xml_dismantle($xml);

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file
?>
