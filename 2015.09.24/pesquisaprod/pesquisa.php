<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pesquisa de Dados</title>
</head>
<?php
include "estilo1.inc";
?>
<body>
<form method="post" action="Resultado_Pesquisa.php">
<h3>Pesquisa de registros na tabela de produtos</h3>
<p class="destaque"><strong>Etapa 1</strong> - Seleção dos registros:</p>
<label>Campo<select name="campo">
<option value="CodProd" selected="selected">Código</option>
<option value="NomeProd">Nome</option>
<option value="DescProd">Descrição</option>
<option value="Valor">Valor</option>
<option value="CodFor">Fornecedor</option>
</select>
</label>
<label>Operador<select name="operador">
<option value="=" selected="selected">Igual</option>
<option value=">">Maior que</option>
<option value="<">Menor que</option>
<option value=">=">Maior ou igual a</option>
<option value="<=">Menor ou igual a</option>
<option value="<>">Diferente de</option>
<option value="CONTEM">Contem</option>
</select>
</label>
<label>valor<input type="text" name="valor" width="150"/><br/><br/>
</label>
<p class="destaque"><strong>Etapa 2</strong> - Ordenação dos registros:</p>
<label>Ordenar por<select name="ordenar">
<option value="CodProd" selected="selected">Código</option>
<option value="NomeProd">Nome</option>
<option value="DescProd">Descrição</option>
<option value="Valor">Valor</option>
<option value="CodFor">Fornecedor</option>
</select>
</label>
<label>Ordem<select name="forma_ordem">
<option value="ASC" selected="selected">Crescente</option>
<option value="DESC" selected="selected">Decrescente</option>
</select>
<input type="submit" class="botao" name="Submit" value="Pesquisar"/>
</label>
</form>
</body>
</html>