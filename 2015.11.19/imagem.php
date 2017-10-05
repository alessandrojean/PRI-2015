<?php
	$id=$_GET["id"];
	header("Content-type: image/jpeg");
	
	$con = mysql_connect("localhost","root","root");
	mysql_select_db("loja",$con);

	$query = mysql_query("select * from produtos where id=$id;",$con);
	$prod = mysql_fetch_assoc($query);
	
	echo $prod["imagem"];
?>