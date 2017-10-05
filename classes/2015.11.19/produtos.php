<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Produtos</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","root");
mysql_select_db("loja",$con);

$query = mysql_query("select * from produtos;",$con);
?>
<table cellpadding="10" border="1">
	<tr>
    	<?php while($row=mysql_fetch_array($query)) :?>
        	<td><center><img width="100" height="100" src="imagem.php?id=<?php echo $row["id"]; ?>" /><br/><a href="descprod.php?id=<?php echo $row["id"]; ?>"><?php echo $row["nome"]; ?></a></center></td>
        <?php endwhile; ?>
    </tr>
</table>
</body>
</html>