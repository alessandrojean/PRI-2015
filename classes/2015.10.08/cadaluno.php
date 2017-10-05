<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Aluno</title>
</head>
<body>
<form action="gravar.php" method="post" enctype="multipart/form-data">
<p> <label>Número: </label><input type="text" id="numero" name="numero" /></p>
<p> <label>Nome: </label><input type="text" id="nome" name="nome" /></p>
<p> <label>Turma: </label><input type="text" id="turma" name="turma" /></p>
<p> <label>E-mail: </label><input type="text" id="email" name="email" /></p>
<p> <label for="imagem">Foto: </label><input type="file" id="imagem" name="imagem" /></p>
<p> <input type="submit" value="Salvar"/></p>
</form>
</body>
</html>