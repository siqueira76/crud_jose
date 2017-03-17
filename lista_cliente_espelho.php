<!DOCTYPE html>
<html>
	<head>
		<title>Lista de Clientes</title>
	</head>
	<body>
		<form action="lista_cliente_espelho.php" method="post">
			Nome:<input type="text" name="nome">
			<input type="submit" value="Pesquisar">
		</form>
		
		<?php
			include("conexao.php");
				$nome = $_POST["nome"];
				echo "<table border='5' bgcolor='#00ccf'>";
				
				if(isset($nome)){
					$sql = "select * from cliente where nomecli like '%$nome%'";
					$rs = mysql_query($sql) or die ("erro ao selecionar" .$sql);
					while($linha=mysql_fetch_array($rs)){
						$codcli = $linha["codcli"];
						$nomecli = $linha["nomecli"];
						$endcli = $linha["endcli"];
						$telcli = $linha["telcli"];
						$cpfcli = $linha["cpfcli"];
						$senhacli = $linha["senhacli"];
						
						echo"
							<tr>
								<td>Codigo:</td><td>$codcli</td><td>Nome:</td><td>$nomecli</td>
							</tr>
							<tr>
								<td>Endereço:</td><td>$endcli</td><td>Telefone:</td><td>$telcli</td>
							</tr>
							<tr>
								<td>CPF:</td><td>$cpfcli</td><td>Senha:</td><td>$senhacli</td>
							</tr>
							
						";
					}
					
				}
				
		?>
		</table>
		<a href="sistema_de_cadastro.html">Sistema de Cadastro</a>
		
	</body>
</html>