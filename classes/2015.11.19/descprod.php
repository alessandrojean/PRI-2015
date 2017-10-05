<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Descrição</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","root");
mysql_select_db("loja",$con);
$id=$_GET["id"];
$query = mysql_query("select * from produtos where id=$id;",$con);
$prod = mysql_fetch_assoc($query);
?>
<table border="1" cellpadding="10">
	<tr>
    	<td rowspan="2"><img width="100" height="100" src="imagem.php?id=<?php echo $prod["id"]; ?>" /></td>		
        <td><?php echo $prod["nome"] ?> </td>
    </tr>
    <tr>
    	<td><?php echo "R$".$prod["preco"]; ?></td>
    </tr>
</table>
</body>
</html>