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
function Escolha()
{
	var cor=document.FormSelect.Cores.value;
	switch(cor)
	{
	case 'Vermelho':alert ('Você gosta de Vermelho');break;
	case 'Azul':alert ('Você gosta de Azul');break;
	case 'Verde':alert ('Você gosta de Verde');break;
	case 'Amarelo':alert ('Você gosta de Amarelo');break;
	}
}
function Colorir(obj)
{
	obj.style.backgroundColor="red";
}
function Voltar(obj)
{
	obj.style.backgroundColor="blue";
}	
</script>


</head>

<body>
<form method="post" name='FormSelect' action="ResCor.php">
<p>Escolha uma Cor de sua preferência: 
<select name = 'Cores' id='Cores'>
<option>Escolha cor</option>
<option>Vermelho</option>
<option>Azul</option>
<option>Verde</option>
<option>Amarelo</option>
</select></p>
<p><input type="submit" id="bt1" value="Enviar" onmouseover="Colorir(this);" onmouseout="Voltar(this);" onclick="Escolha(this)"/></p>
</form>
</body>
</html>