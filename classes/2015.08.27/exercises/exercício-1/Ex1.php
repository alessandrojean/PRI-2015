<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabela Zebrada em PHP</title>
</head>

<body>
<?php
$saida="";
$saida.="<table width='50%' border='1' cellspacing='0' cellpading='0'>";
for($x=1;$x<15;$x++)
{
	$saida.="<tr>";
	if($x%2==0)
	{
		$saida.="<td bgcolor='#C0C0FF'>Esta é a linha PAR da tabela</td>";	
	}
	else
	{
		$saida.="<td bgcolor='#FFFFFF'>Esta é a linha ÍMPAR da tabela</td>";	
	}
	$saida.="</tr>";
}
$saida.="</table>";
?>
<h2>Impressão de uma tabela zebrada com 1 coluna e 15 linhas</h2>
<?php echo $saida; ?>
</body>
</html>