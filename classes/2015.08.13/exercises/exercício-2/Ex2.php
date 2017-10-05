<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Php - Lista Geral com Banco de Dados</title>
</head>
<body>
<?php
$conexao = mysql_connect("localhost","root","root");

mysql_select_db("produtos",$conexao);

$resultado = mysql_query("select * from tabprod",$conexao);

$linha=mysql_num_rows($resultado);
for($i=0;$i<$linha;$i++)
{
	$registro=mysql_fetch_row($resultado);
	echo"<br>";
	echo "Código: $registro[0]<br/>";
	echo "Nome: $registro[1]<br/>";
	echo "Fornecedor: $registro[2]<br/>";
	echo "Quantidade: $registro[3]<br/>";
	echo "Preço: $registro[4]<br/>";

	echo "<hr>";
}
mysql_close($conexao);
?>
</body>
</html>