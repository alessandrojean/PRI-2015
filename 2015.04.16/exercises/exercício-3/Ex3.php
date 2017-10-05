<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>

<?php
$saida1="";
$saida2="";
for($a=10;$a>=1;$a--)
{
	$saida1="";
	for($b=0;$b<$a;$b++)
	{
		$saida1=$saida1."*";	
	}
	echo $saida1."<br/>";
}
echo "<br/>";
for($c=1;$c<=10;$c++)
{
	$saida2="";
	for($d=0;$d<$c;$d++)
	{
		$saida2=$saida2."*";	
	}
	echo $saida2."<br/>";
}
?>

</body>
</html>