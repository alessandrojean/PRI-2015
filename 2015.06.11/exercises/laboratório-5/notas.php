<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
$n1=$_REQUEST["t1"];
$n2=$_REQUEST["t2"];
$media=($n1+$n2)/2;

$mencao="";

if($media<=5)
{
	$mencao="<font color='red'><b>I - Insatisfatório</b></font>";	
}
else
if($media>5 && $media<=7)
{
	$mencao="<font color='brown'><b>R - Regular</b></font>";	
}
else
if($media>7 && $media<=9)
{
	$mencao="<font color='green'><b>B - Bom</b></font>";	
}
else
if($media>9)
{
	$mencao="<font color='blue'><b>MB - Muito Bom</b></font>";	
}

print "<table border='1'>
	   <tr>
	   <td colspan='2'><center>Média</center></td>
	   </tr>
	   <tr>
	   <td>Média</td>
	   <td>$media</td>
	   </tr>
	   <tr>
	   <td>Menção</td>
	   <td>$mencao</td>
	   </tr>
	   </table>";
?>
</body>
</html>