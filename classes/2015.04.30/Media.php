<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
$nome=$_REQUEST["tn"];
$n1=$_REQUEST["t1"];
$n2=$_REQUEST["t2"];

echo strtoupper($nome);
function Calcular($x1,$x2)
{
	if(($x1+$x2)/2>=0 && ($x1+$x2)/2<5)
	{
		echo"";
	}
}

Calcular($n1,$n2);
?>
</body>
</html>