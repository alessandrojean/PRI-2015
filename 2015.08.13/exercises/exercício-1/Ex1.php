<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP e Banco de Dados</title>
</head>

<body>
<?php
$conexao = mysql_connect("localhost","root","root");

mysql_select_db("produtos",$conexao);

$resultado = mysql_query("select * from tabprod",$conexao);

$codprod = mysql_result($resultado,0,0);
$nome = mysql_result($resultado,0,1);
$codfor = mysql_result($resultado,0,2);
$qtd = mysql_result($resultado,0,3);
$preco = mysql_result($resultado,0,4);

mysql_close($conexao);

echo "Código: $codprod<br/>";
echo "Nome: $nome<br/>";
echo "Fornecedor: $codfor<br/>";
echo "Quantidade: $qtd<br/>";
echo "Preço: $preco<br/>";
?>
</body>
</html>