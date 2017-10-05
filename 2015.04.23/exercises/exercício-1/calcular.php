<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<style type="text/css">
body
{
text-align:center;	
}
body,table
{
font-family:Arial;	
}
</style>
</head>
<?php
$n=$_REQUEST['t1'];

Tabuada($n);
Tabuada2($n);
Tabuada3($n);

function Tabuada ($x)
{
	$i=0;
	echo'<center><table border="1"><tr><th colspan="2"><center>Tabuada</center></th></tr>
	<tr><td><center>Conta</center></td><td><center>Resultado</center></td></tr>';
	for(;$i<=10;$i++)
	{
		echo '<tr><td><center>'.$x.' x '.$i.'</center></td><td><center>'.($x*$i).'</center></td></tr>';
	}
	echo'</table></center>';
	echo '</br><hr/>';
	return;
}
function Tabuada2 ($x)
{
	echo '√'.$x.'='.sqrt($x);
	echo '</br><hr/>';
	return;
}
function Tabuada3 ($x)
{
	if($x%2==0)
	{
	echo 'O número '.$x.' é par';
	}
	else
	{
	echo 'O número '.$x.' é impar';
	}
	echo '</br><hr/>';
	return;
}

?>

<body>
</body>
</html>