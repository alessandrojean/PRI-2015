<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Ex2_estilo.css" type="text/css" rel="stylesheet" />
<title>Lista de Produtos</title>
</head>
<?php
	$conexao = mysql_connect("localhost","root","root");
	mysql_select_db("produtos",$conexao);
	$resultado = mysql_query("select * from tabprod",$conexao);
?>
<body>
    <h3>Lista de Produtos Cadastrados</h3>
    <table cellpadding="0">
		<tr id="titulo_tabela">
        	<td>Código</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td align="right">Preço</td>
            <td align="center">Código do Fornecedor</td>
        </tr>        
        <?php
			while($reg = mysql_fetch_array($resultado))
			{
				$codigo = $reg["CodProd"];
				$nome = $reg["NomeProd"];
				$desc = $reg["DescProd"];
				$preco = $reg["Valor"];
				$codfor = $reg["CodFor"];	
		?>
        <tr>
        	<td><strong><?php echo $codigo ?></strong></td>
            <td><strong><?php echo $nome ?></strong></td>
            <td><strong><?php echo $desc ?></strong></td>
            <td align="right"><strong><?php echo number_format($preco,2,',','.') ?></strong></td>
            <td align="center"><strong><?php echo $codfor ?></strong></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php
	mysql_free_result($resultado);
	mysql_close($conexao);
?>