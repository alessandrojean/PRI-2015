<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<style type="text/css">
body
{
	text-align:center;
    font-family:Arial;
}
#b1,#b2,#b3
{
	cursor:pointer;
	background-color:#006;
	color:#FF9;
	font-weight:bold;
}

</style>
</head>

<body>
<form id="f1" name="f1" method="post" action="Media.php" onsubmit="return Verificar(this)">
<p><label><h2>Simulador de Média</h2></label></p>
<p>&nbsp;</p>
<p><label for="tn"><strong>Nome: </strong></label><input id="tn" name="tn" type="text" size="40"/></p>
<p><label for="t1"><strong>1ª Nota: </strong></label><input id="t1" name="t1" type="text" size="10"/></p>
<p><label for="t2"><strong>2ª Nota: </strong></label><input id="t2" name="t2" type="text" size="10"/></p>
<p><label for="tm"><strong>Média: </strong></label><input id="tm" name="tm" type="text" size="10" disabled="disabled"/></p>
<p>&nbsp;</p>
<p><input type="button" id="b1" name="b1" value="Calcular" onclick="Calcular()"/>
<input type="submit" id="b2" name="b2" value="Enviar"/>
<input type="reset" id="b3" name="b3" value="Cancelar" onclick="document.f1.tn.focus();"></p>
</form>

<script>
function Verificar()
{
	if(document.f1.tn.value=="")
	{
		alert("O campo <Nome> não foi preenchido\n\nTente novamente...");
		document.f1.tn.focus();
		return false;	
	}
	
	if(document.f1.t1.value=="")
	{
		alert("O campo <1ª Nota> não foi preenchido\n\nTente novamente...");
		document.f1.t1.focus();
		return false;	
	}
	
	if(document.f1.t2.value=="")
	{
		alert("O campo <2ª Nota> não foi preenchido\n\nTente novamente...");
		document.f1.t2.focus();
		return false;	
	}
	
	if(document.f1.tm.value=="")
	{
		alert("O campo <Média> não foi calculado\n\nTente novamente...");
		return false;	
	}
	
}
function Calcular()
{
	
	if(document.f1.t1.value<0 || document.f1.t1.value>10)
	{
		alert("O valor preenchido no campo <1ª Nota> não é válido\n\nTente novamente...");
		document.f1.t1.focus();
		return false;	
	}
	else
	if(document.f1.t2.value<0 || document.f1.t2.value>10)
	{
		alert("O valor preenchido no campo <2ª Nota> não é válido\n\nTente novamente...");
		document.f1.t2.focus();
		return false;	
	}
	else
	{
		document.f1.tm.value=((parseInt(document.f1.t1.value)+parseInt(document.f1.t2.value))/2);	
	}
}
</script>
</body>
</html>