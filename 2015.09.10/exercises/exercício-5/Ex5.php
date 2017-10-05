<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
$valor=0;
echo"<table border=1><tr><td>*</td>";
while($valor<=9):
echo"<td>".$valor."</td>";
$valor++;
endwhile;
echo"</tr>";
$valor=0;
while($valor<=9):
echo"<tr><td>".$valor."</td>";
for($i=0;$i<=9;$i++):
echo"<td>".$valor*$i."</td>";
endfor;
echo"</tr>";
$valor++;
endwhile;




 
?>
</body>
</html>