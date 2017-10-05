<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Funções de Usuário em PHP</title>
</head>
<?php


echo " Neste ponto a função para cálculo do fator e chamada <br><br>";

Fatorial();

function Fatorial(){
$fat=1;
$x=0;
	while($x<11){
if($x==0){
	$fat=1;
	echo $x."!=".$fat."<br>"; 
}else{
	$fat=$fat*$x;
	echo $x."!=".$fat."<br>"; 
	
}
$x++;
}
return;
}
?>
<body>
</body>
</html>