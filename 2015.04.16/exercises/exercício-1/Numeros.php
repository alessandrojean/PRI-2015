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
</style>
</head>

<?php
$n = $_REQUEST["t1"];
$i=$n;
$n=$n-10;
echo 'Os 10 Predecessores do número '.($i).':</br></br>';
for(;$n<$i;$n++)
{
	echo($n).' ';
}
$n+=1;
echo'</br><hr/>';
echo 'Os 10 Sucessores do número '.($i).':</br></br>';
$i=$i+11;
for(;$n<$i;$n++)
{
	echo($n).' ';
}
echo'</br><hr/>';

?>

<body>
</body>
</html>