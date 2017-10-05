<?php
	mysql_connect("localhost","root","root") or die("Impossível conectar");
	@mysql_select_db("alunos") or die("Impossível conectar ao banco.");
	$res = mysql_query("select * from aluno where Numero=".$_GET["PicNum"].";");
	$row = mysql_fetch_object($res);
	header("Content-type:image/gif");
	echo $row->Foto;
?>