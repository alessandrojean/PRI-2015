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
</style>
</head>
<?php
$n=$_REQUEST["t1"];

function fact($n) {
  if ($n === 0) {
     return 1;
  }
  else {
     return $n * fact($n-1);
  }
}

echo $n."!=".fact($n);
?>
<body>
</body>
</html>
