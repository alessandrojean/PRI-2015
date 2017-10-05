<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#b1
{
	width:100px;
	height:30px;
	cursor:pointer;	
}

#b2
{
	width:100px;
	height:30px;	
}
</style>

<script type="text/javascript">
function Verificar()
{
	if(document.f1.t1.value=="")
	{
		alert("O campo <Nota 1> não foi preenchido\n\nTente novamente...");
		document.f1.tn.focus();
		return false;	
	}
	
	if(document.f1.t2.value=="")
	{
		alert("O campo <Nota 2> não foi preenchido\n\nTente novamente...");
		document.f1.t1.focus();
		return false;	
	}
	
	if(document.f1.t1.value<0 || document.f1.t1.value>10)
	{
		alert("O campo <Nota 1> não foi preenchido\n\nTente novamente...");
		document.f1.t1.focus();
		return false;
	}
	
	if(document.f1.t2.value<0 || document.f1.t2.value>10)
	{
		alert("O campo <Nota 2> não foi preenchido\n\nTente novamente...");
		document.f1.t1.focus();
		return false;
	}
	
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<form method="post" action="notas.php" onsubmit="return Verificar(this);" name="f1">
1ª Nota:&nbsp;<input type="text" name="t1" /><br/><br/>
2ª Nota:&nbsp;<input type="text" name="t2" /><br/><br/>
<input type="submit" id="b1" name="b1" value="Calcular" />
<input type="button" id="b2" name="b2" value="Limpar" onclick="document.f1.t1.focus();" />
</form>
</body>
</html>