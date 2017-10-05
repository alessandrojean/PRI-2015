<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta de Aluno</title>
</head>

<body>
<?php
mysql_connect("localhost","root","root");
mysql_select_db("alunos");

$numero=0;
$nome="";
$turma="";
$email="";

if(isset($_POST["numero"]))
{
	$res = mysql_query("select * from aluno where Numero=".$_POST["numero"].";");
	
	$aluno = mysql_fetch_assoc($res);
	
	$nome=$aluno["Nome"];
	$turma=$aluno["Turma"];
	$email=$aluno["Email"];
	$numero=$_POST["numero"];
}
?>
<form method="post" action="">
<p> <label>Número: </label>
<select name="numero">
<?php
	for($i=1;$i<=40;$i++)
		echo "<option value='$i'>$i</option>";
?>
</select>&nbsp;&nbsp;<input type="submit" value="Pesquisar"/></p>
<p> <label>Nome: </label><input type="text" id="nome" name="nome" disabled value="<?php echo $nome; ?>"/></p>
<p> <label>Turma: </label><input type="text" id="turma" name="turma" disabled  value="<?php echo $turma; ?>"/></p>
<p> <label>E-mail: </label><input type="text" id="email" name="email" disabled  value="<?php echo $email; ?>"/></p>
<p> <label for="imagem">Foto: </label><img width="200" height="200" src="getImagem.php?PicNum=<?php echo $numero; ?>"></p>
</p>
</form>
</body>
</html>