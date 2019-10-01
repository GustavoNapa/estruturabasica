<?php
	namespace App;

	#Arquivos de diretorios raiz
	$pastaInterna="";
	define("DIRPAGE", "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
	if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");} else {define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");}

	#Diretorios Especificos
	define("DIRPUBLIC", DIRPAGE."public/");

	//MEDIA
	define("DIRMEDIA", DIRPUBLIC."media/");

	define("DIRIMG", DIRMEDIA."img/");
	define("DIRAUDIO", DIRMEDIA."audio/");
	define("DIRVIDEO", DIRMEDIA."video/");

	//RESOURCES
	define("DIRRES", DIRPUBLIC."resources/");

	define("DIRCSS", DIRRES."css/");
	define("DIRFONTS", DIRRES."fonts/");
	define("DIRJS", DIRRES."js/");

	//Conexão local
	//Para criar novas conexões vasta instanciar passando os seguintes dados
	// //$conexao = new Conexao('ENDERECO_HOST', 'NOME_BANCODEDADOS', 'USUARIO', 'SENHA');

	// $conexao = new Conexao('localhost', 'estrutura_basica', 'root', '');

?: