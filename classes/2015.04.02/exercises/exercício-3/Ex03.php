﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<center><h3>Fatorial</h3><br />
<?php
$fat=1;
for($i=0;$i<=10;$i++)
{
	for($a=1;$a<=$i;$a++)
	{
		$fat=$fat*$a;	
	}
	echo $i."!=".$fat."<br/>";
	$fat=1;
}
?>
</body>
</html>