<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Cliente</title>
	</head>
	<body>
		<?php
			include("conexao.php");
				$nomecli = $_POST["nomecli"];
				$endcli = $_POST["endcli"];
				$telcli = $_POST["telcli"];
				$cpfcli = $_POST["cpfcli"];
				$senhacli = $_POST["senhacli"];
			
			if($nomecli==""){
				echo "Campo Obrigatorio, <br>";
				echo "<a href=cadcli.html>Voltar para Cadastro</a>";
				exit;
			}
			
			$sql= "insert into cliente(nomecli, endcli, telcli, senhacli) values ('$nomecli','$endcli', 'telcli', '$senhacli')";
			//echo $sql;
			mysql_query($sql) or die ("Problemas no cadastro de dados " .$sql);
			echo "Dados cadastrados com Sucesso";
		?>
		<br>
		</br>
		<a href="sistema_de_cadastro.php">inicio</a>
		<br>
		</br>
		<a href="cadcli.html">Continuar Cadastro</a>
	</body>
</html>