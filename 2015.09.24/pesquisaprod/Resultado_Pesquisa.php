<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultado da Pesquisa - PHP</title>
<link href="EstiloPHP.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
$campo=$_POST['campo'];
$operador=$_POST['operador'];
$valor=$_POST['valor'];
$ordenar=$_POST['ordenar'];
$forma_ordem=$_POST['forma_ordem'];

include"estilo1.inc";
include"conecta_mysql.inc";

$sql="Select * from tabprod";
if($operador<>"CONTEM")
{
	$sql=$sql." where ".$campo.$operador."'".$valor."'";
}
else
{
	$sql=$sql." where ".$campo." LIKE "."'%".$valor."%'";
}

$sql=$sql." order by ".$ordenar." ".$forma_ordem;

$rs= mysql_query($sql,$conexao);
$total_registro=mysql_num_rows($rs);
?>
<p>
Você solicitou seguinte pesquisa:<strong><?php print $campo." ".$operador." ".$valor; ?></strong></br>
Total de registros retornados:<strong><?php print $total_registro; ?></strong></br>
Ordem de exibição dos registros:<strong><?php print $ordenar." - ".$forma_ordem; ?></strong></br>
Sentença SQL criada para a pesquisa:<strong><?php print $sql; ?></strong>
</p>
<table cellspacing="0">
<thead>
<tr>
<td>Código</td>
<td>Nome</td>
<td>Descrição</td>
<td align="right">Preço</td>
<td align="center">Código do Fornecedor</td>
</tr>
</thead>
<?php
while($reg=mysql_fetch_array($rs)){
	$codigo=$reg["CodProd"];
	$nome=$reg["NomeProd"];
	$desc=$reg["DescProd"];
	$preco=$reg["Valor"];
	$codfor=$reg["CodFor"];
?>
<tr>
<td><strong><?php print $codigo; ?></strong></td>
<td><strong><?php print $nome; ?></strong></td>
<td><strong><?php print $desc; ?></strong></td>
<td align="right"><strong>R$ <?php print number_format($preco,2,',','.'); ?></strong></td>
<td align="center"><strong><?php print $codfor; ?></strong></td>
</tr>
<?php } ?>
</table>
<?php
mysql_free_result($rs);
mysql_close($conexao);
?>
<br/><br/>
<input type="button" class="botao" name="BtVolta" value="Voltar" onclick="javascript:window.history.go(-1);"/>
</body>
</html>