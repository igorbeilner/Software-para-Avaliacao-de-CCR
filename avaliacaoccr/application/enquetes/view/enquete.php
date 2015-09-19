<?php
	session_start();
	$dominio= $_SERVER['HTTP_HOST'];
 	$url = "http://" . $dominio. $_SERVER['REQUEST_URI'];

 	if (isset($_GET['enq_cod'])){
		$enq_cod = $_GET['enq_cod'];
	}

	$aux = explode("-", $enq_cod);
	$enq_cod = $aux[1];

	$_SESSION['cod_enq'] = $cod_enq;

 	if (isset($_SESSION['enquete'])){
 		if ($_SESSION['enquete'] == 1){
 			if(isset($_GET['erro'])){
 				echo "<script> alert('Você já respondeu essa enquete!') </script>";
 			}

 			echo '<div style="background-color: #f0f0f0; left:-272px; position:relative; width:325px; border-radius: 10px;" id="conteudo">
                <div >
                    CPF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senha
                </div>
    			<form id="login" action="valida_senha-'.$enq_cod.'" method="post">
                    <input type="text" 		name="usuario" placeholder="Insira aqui seu CPF"/>
                    <input type="password" 	name="senha" value="" />
 					<input style="width: 320px; margin-top: 10px;" type="submit" value="enviar"/>
    			</form>
    		</div>
    		<div style="clear:both;"></div>';
    	}
 	}
 	if ($_SESSION['logado'] == 1 && $_SESSION['enquete'] == 0){

		$sql = "select * from alu_enq where enq_cod =".$enq_cod." and alu_cod = ".$_SESSION['userId'];
		$res = $data->find('dynamic', $sql);

		if (count($res) == 0){

			$sql = "select p.per_desc, p.per_tipo, p.per_cod, j.enq_nome from
					(select e.enq_cod, ep.per_cod, e.enq_nome
					from enquete as e join enquete_perguntas as ep
					where e.enq_cod = ".$enq_cod." and ep.enq_cod = ".$enq_cod.") as j join perguntas as p
					where j.per_cod = p.per_cod";

			$result = $data->find('dynamic', $sql);

			$sql = "select * from enq_disc_prof as edp where edp.enq_cod=".$enq_cod;

			$res = $data->find('dynamic', $sql);

			$sql = "select * from professor as p where p.pro_cod=".$res[0]['pro_cod'];
			$professor = $data->find('dynamic', $sql);

			$sql = "select * from disciplina as d where d.dis_cod=".$res[0]['dis_cod'];
			$disciplina = $data->find('dynamic', $sql);


		?>
		<h2 style="margin-left:25%;"><?php echo $result[0]['enq_nome'] ?> <br/><br/>Professor: <?php echo $professor[0]['pro_nome']?> <br/>Disciplina: <?php echo $disciplina[0]['dis_nome'] ?></h2>

		<form action="<?php echo "process-".$enq_cod."" ?>" id="form_enquete" method="post" style="margin:auto; display:table;">
		<?php
			for ($i = 0; $i < count($result); $i++){
				$n = $i + 1;
				if ($result[$i]['per_tipo'] == 0){
		?>
		           	<div class="linha" style="margin-top: 20px;">
		           		<div style="width: 100%; margin-top: 8px; margin-left:0px;" class="coluna"><?php echo $n." - ".$result[$i]['per_desc'] ?></div><br/>
		           		<textarea class="cad_enq" style="width: 500px; height: 75px;" type='text' name='<?php echo "text_".$result[$i]['per_cod']."" ?>' id='text_".$i."' cols="20" rows="3" ></textarea>
		           	</div>
		<?php
				}else if ($result[$i]['per_tipo'] == 1){
		?>

					<div class="linha" style="margin-top: 20px;">
		           		<div style="width: 100%; margin-top: 8px; margin-left:0px; margin-bottom:5px;" class="coluna"><?php echo $n." - ".$result[$i]['per_desc'] ?></div><br/>
		           		<?php
		           			$sql = "select o.op_desc from
									(select op.op_cod from
		           					perguntas as p join perguntas_opcoes as op
		           					where p.per_cod = ".$result[$i]['per_cod']." and op.per_cod = ".$result[$i]['per_cod'].") as t
									join opcoes as o where t.op_cod = o.op_cod";

							$res = $data->find('dynamic', $sql);

							for ($j = 0; $j < count($res); $j++){
		           		?>
		           			<div class="linha" style="margin-left: 15px;">
								<input type="radio" name="<?php echo "op_".$result[$i]['per_cod']."_".$res[$j]['op_cod'].""?>" value="<?php echo $res[$j]['op_desc']?>"> <?php echo utf8_encode($res[$j]['op_desc'])?>
							</div>
						<?php
							}
						?>
		           	</div>


		<?php
				}
			}
		?>
		<input style="margin-top:10px;" type="submit" value="Enviar resposta">
		</form>
<?php
		}else{
			$_SESSION['enquete'] = 1;
			$_SESSION['logado'] = 0;
			echo "<script> alert('Você já respondeu essa enquete!') </script>";
			echo "<meta http-equiv='refresh' content='0;URL=logout'>";
		}
	}
?>
