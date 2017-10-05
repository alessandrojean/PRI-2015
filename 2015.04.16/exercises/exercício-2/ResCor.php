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
$n=$_REQUEST["Cores"];
if($n=='Vermelho')
{
	echo"Sua cor preferida é ".$cores[0];
	echo"<body style='background-color:red'>";
}
else
if($n=='Azul')
{
	echo"Sua cor preferida é ".$cores[1];
	echo"<body style='background-color:blue'>";
}
else
if($n=='Verde')
{
	echo"Sua cor preferida é ".$cores[2];
	echo"<body style='background-color:green'>";
}
else
if($n=='Amarelo')
{
	echo"Sua cor preferida é ".$cores[3];
	echo"<body style='background-color:yellow'>";
}


?>

<body>
</body>
</html>