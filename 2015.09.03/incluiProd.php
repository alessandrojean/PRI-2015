<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cdastro de Produtos</title>
</head>
<link href="EstiloPHP.css" rel="stylesheet" type="text/css"/>
<body>
<p align="center" class="Tamanho"><strong>Cadastro de Produtos</strong></p>
<form id="form1" name="form1" method="post" action="GravaProd.php">
<table width="512" border="1">
<tr>
<td width="88">Codigo</td>
<td width="408">
<input type="text" name="codigo" id="codigo"/>
</td>
</tr>
<tr>
<td>Nome</td>
<td><input type="text" name="nome" id="nome" size="100"/></td>
</tr>
<tr>
<td>Descrição</td>
<td><input type="text" name="desc" id="desc" size="100"/></td>
</tr>
<tr>
<td>Preço</td>
<td><input type="text" name="preco" id="preco" /></td>
</tr>
<tr>
<td>Fornecedor</td>
<td><input type="text" name="for" id="for" /></td>
</tr>
</table>
<p>

<input type="submit" name="BtIncluir" id="BtIncluir" value="Incluir"/>

</p>
</form>
</body>
</html>