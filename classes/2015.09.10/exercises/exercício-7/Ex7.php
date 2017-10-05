<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
$ginastas[0]['nome'] = "Jade";
$ginastas[0]['nota'] = 12.95;
$ginastas[0]['pais'] = "Brasil";

$ginastas[1]['nome'] = "Shawn";
$ginastas[1]['nota'] = 13.50;
$ginastas[1]['pais'] = "EUA";

$ginastas[2]['nome'] = "Daiane";
$ginastas[2]['nota'] = 14.35;
$ginastas[2]['pais'] = "Brasil";

$ginastas[3]['nome'] = "Nadia";
$ginastas[3]['nota'] = 12.90;
$ginastas[3]['pais'] = "Romênia";

//Ex a
echo "<h3>Exercício A</h3>";
foreach($ginastas as $ginasta)
{
	echo $ginasta['nome']."</br>";	
}


//Ex b
echo "<h3>Exercício B</h3>";
$media=0;
$cont=0;
foreach($ginastas as $ginasta)
{
	
	$media=$media+$ginasta['nota'];	
	$cont++;
}

echo"Média:".$media/$cont;


//Ex c
echo "<h3>Exercício C</h3>";
foreach($ginastas as $ginasta)
{
	if ($ginasta['nota']>13)
	echo $ginasta['nome']."</br>";	
}

//Ex d
echo "<h3>Exercício D</h3>";
foreach($ginastas as $ginasta)
{
	if ($ginasta['pais']=="EUA")
	echo $ginasta['nome']."</br>";	
}

//Ex e
$valorEua=0;
$valorBrasil=0;
$valorRom=0;
echo "<h3>Exercício E</h3>";
foreach($ginastas as $ginasta)
{
	if ($ginasta['pais']=="EUA"):
	$valorEua++;
	endif;
	if ($ginasta['pais']=="Brasil"):
	$valorBrasil++;	
	endif;
	if ($ginasta['pais']=="Romênia"):
	$valorRom++;	
	endif;
}
echo"Eua: ".$valorEua."<br>";
echo"Brasil: ".$valorBrasil."<br>";
echo"Romênia: ".$valorRom."<br>";

//Ex f
echo "<h3>Exercício F</h3>";
$maior=0;
$nome="";
foreach($ginastas as $ginasta)
{
	if ($ginasta['nota']>$maior)
	{
	$maior=$ginasta['nota'];	
	$nome=$ginasta['nome'];
	}
}

echo $nome;
?>
</body>
</html>