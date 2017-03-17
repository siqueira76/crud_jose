<?php
	include("conexao.php");
		$cpf = $_POST["cpf"];
		$sql = "select * from cliente where cpfcli = '$cpf'";
		$resultado = mysql_query($sql) or die ("Erro no sql");
		$linha = mysql_fetch_array($resultado);
		
		$codcli = $linha["codcli"];
		$nomecli = $linha["nomecli"];
		$endcli = $linha["endcli"];
		$telcli = $linha["telcli"];
		$cpfcli = $linha["cpfcli"];
		$senhacli = $linha["senhacli"];
?>
<form action="movicli.php" method="post">

	<input type="hidden" name="codcli" value="<?php echo $codcli;?>">
	Nome:<input type="text" name="nomecli" value="<?php echo $nomecli;?>">
	<br>
	Endereço:<input type="text" name="endcli" value="<?php echo $endcli;?>">
	<br>
	Telefone:<input type="text" name="telcli" value="<?php echo $telcli;?>">
	<br>
	CPF:<input type="text" name="cpfcli" value="<?php echo $cpfcli;?>">
	<br>
	Senha:<input type="text" name="senhacli" value="<?php echo $senhacli;?>">
	<br>
	<input type="submit" value="atualizar" name="botao">
	<input type="submit" value="excluir" name="botao">
	<a href="sistema_de_cadastro.php"> Voltar para o Inicio</a><br>
	
</form>