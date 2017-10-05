<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<center><?php
$n1=$_POST['t1'];
$n=$_POST['t2'];
$np=$_POST['t3'];
$na=$_POST['t4'];

echo "Número: "."<font color='#0000FF'>".$n1."</font><br/>";

echo "Nome: "."<font color='#0000FF'>".$n."</font><br/>";
if($np<0 || $np>10 || $na<0 || $na>10  )
{

echo 'Nota Invalida'; 
}
else
{
if($np<5)
{
	echo "Nota de Prova: "."<font color='#FF0000'>".$np."</font><br/>";
}
else
{
	echo "Nota de Prova: "."<font color='#0000FF'>".$np."</font><br/>";
}


if($na<5)
{
	echo "Nota de Atividade: "."<font color='#FF0000'>".$na."</font><br/><br/><br/>";
}
else
{
	echo "Nota de Atividade: "."<font color='#0000FF'>".$na."</font><br/><br/><br/>";
}


if((($na+$np)/2)<5)
{
	echo "Menção Final: "."<font color='#FF0000'>".(($na+$np)/2)." - I - Insatisfatório</font><br/>";
}
else
if((($na+$np)/2)>=5  && (($na+$np)/2)<7)
{
	echo "Menção Final: "."<font color='#0000FF'>".(($na+$np)/2)." - R - Regular</font><br/>";
}

else
if((($na+$np)/2)>=7  && (($na+$np)/2)<9)
{
	echo "Menção Final: "."<font color='#0000FF'>".(($na+$np)/2)." - B – Bom</font><br/>";
}
else
{
	echo "Menção Final: "."<font color='#0000FF'>".(($na+$np)/2)." - MB – Muito Bom</font><br/>";
}
}
?></center>
</body>
</html>