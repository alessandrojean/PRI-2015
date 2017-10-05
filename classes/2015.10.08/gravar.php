<?php
$numero=$_POST["numero"];
$nome=$_POST["nome"];
$turma=$_POST["turma"];
$email=$_POST["email"];
$imagem=$_FILES["imagem"];

if($imagem!=NULL)
{
	$nomeFinal=time().'.jpg';
	
	if(move_uploaded_file($imagem['tmp_name'],$nomeFinal))
	{
		$tamanhoImg=filesize($nomeFinal);
		$mysqlImg=addslashes(fread(fopen($nomeFinal,"r"),$tamanhoImg));
		mysql_connect("localhost","root","root") or die("Impossível Conectar");
		@mysql_select_db("alunos") or die("Impossivel Conectar");
		mysql_query("insert into aluno values (null,'$nome','$turma','$email','$mysqlImg');");
		
		unlink($nomeFinal);
		
		header("location:consaluno.php");		
	}
}
else
{
	echo"Você não realizou o upload de forma satisfatória.";
}


?>