<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estrutura de repetição - PHP</title>
</head>

<body>
<?php
$valor = $_POST["t1"];

for($i=1;$i<=$valor;$i++)
{
	echo "<font color='#0000FF'>".$i."<br/>";
}

echo "<br/>";

for(;$valor>=1;$valor--)
{
	echo "<font color='#FF0000'>".$valor." ";
}
/*while($valor>=0)
{
	echo "<font color='#FF0000'>".$valor." ";
	$valor--;
}*/
?>
</body>
</html>