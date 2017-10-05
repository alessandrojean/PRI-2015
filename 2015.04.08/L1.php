<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Folha de Estilo</title>

<style type="text/css">
#bt1 
{		color: #C60;
		font-weight:bold;
		background-color:blue;
		cursor:pointer;
}

body
{
text-align:center;
font-family:Arial;		
}
</style>

<script type="text/javascript">
function Colorir(obj)
{
	obj.style.backgroundColor="red";
}
function Voltar(obj)
{
	obj.style.backgroundColor="blue";
}	
</script>

<?php
$cores = array('Vermelho','Azul','Verde','Amarelo');
$op=1;
foreach($cores as $cor)
{
	echo "Você gosta de ".$op."-".$cor."?<br/>";
	$op++;	
}
?>

</head>

<body>
<form method="post" action="ResCor.php">
<p>Entre com um valor 1 - 4: <input type="text" name="text1"/></p>
<p><input type="submit" id="bt1" value="Enviar" onmouseover="Colorir(this);" onmouseout="Voltar(this);" /></p>
</form>
</body>
</html>