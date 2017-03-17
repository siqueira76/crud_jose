<!DOCTYPE html>
<html>
	<head>
		<title>movicli.php</title>
	</head>
	<body>
		<?php
			require("conexao.php");
			
				$codcli = $_POST["codcli"];
				$nomecli = $_POST["nomecli"];
				$endcli = $_POST["endcli"];
				$telcli = $_POST["telcli"];
				$cpfcli = $_POST["cpfcli"];
				$senhacli = $_POST["senhacli"];
				
				$atualizar = $_POST["botao"];
				$excluir = $_POST["botao"];
				
				if($atualizar == "atualizar"){
					$sql = "update cliente set nomecli='$nomecli', endcli='$endcli', telcli='$telcli', cpfcli='$cpfcli', senhacli='$senhacli' where codcli=$codcli";
					mysql_query($sql) or die ("Erro ao atualizar os dados" .$sql);
					echo"<script>alert('Dados atualizados com sucesso!');</script>";
				}
				
				if($excluir == "excluir"){
					$sql = "delete from cliente where codcli=$codcli";
					mysql_query($sql) or die ("Erro ao excluir os dados" .mysql_error());
					echo"<script>alert('Dados excluidos com sucesso');</script>";
					
				}
		?>
		
		<a href="sitema_de_cadastro.php">Sistema de Cadastro</a>
		
	</body>
</html>