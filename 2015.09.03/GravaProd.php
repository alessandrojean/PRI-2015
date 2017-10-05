<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<link href="EstiloPHP.css" rel="stylesheet" type="text/css"/>
</head>
<?php
include "conecta_mysql.inc";
$cod=$_POST["codigo"];
$nome=$_POST["nome"];
$desc=$_POST["desc"];
$preco=$_POST["preco"];
$forne=$_POST["for"];
$res = mysql_query("insert into tabprod(CodProd,NomeProd,DescProd,Valor,CodFor)values(null,'$nome','$desc',$preco,$forne)",$conexao);
if($res) 
echo "OK";
else
echo "Deu merda";
print 'Os dados abaixo foram gravados com sucesso!!!';
mysql_close($conexao);
?>

<body>
<form id="form1" name="form1" method="post" action="Ex2.php">
<input type="submit" name="btExibir" id="btExibir" value="Listagem Geral"/>
</form>
</body>
</html>