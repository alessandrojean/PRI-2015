<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body
{
text-align:center;
font-family:Arial;	
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resposta</title>
</head>

<?php
$cores = array('Vermelho','Azul','Verde','Amarelo');
$n=$_REQUEST["text1"];
if($n==1)
{
	echo"Sua cor preferida é ".$cores[0];
	echo"<body style='background-color:red'>";
}
else
if($n==2)
{
	echo"Sua cor preferida é ".$cores[1];
	echo"<body style='background-color:blue'>";
}
else
if($n==3)
{
	echo"Sua cor preferida é ".$cores[2];
	echo"<body style='background-color:green'>";
}
else
if($n==4)
{
	echo"Sua cor preferida é ".$cores[3];
	echo"<body style='background-color:yellow'>";
}
else
if($n==404)
{
	echo"<h1 style='color:red;'>Erro 404</h1><hr>Detalhes do problema:<br/>\"Fez merda aê fera!\"";	
}
else
if($n>8000)
{
	echo"<img src=\"8000.gif\"/>";	
}
else
{
	echo"O valor digitado não corresponde a uma cor definida<br/>Fez merda aê fera!<br/>Meça suas cores parça!";
}

?>

<body>
</body>
</html>