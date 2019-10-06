<?php
	namespace App;

	#Arquivos de diretorios raiz

	/**
	 * 
	 */
	class Config
	{	
		private $_pastaInterna;
		private $_dirpage;
		private $_dirreq;
		private $_dirpublic;
		private $_dirmedia;
		private $_dirimg;
		private $_diraudio;
		private $_dirvideo;
		private $_dirres;
		private $_dircss;
		private $_dirfonts;
		private $_dirjs;
		
		public function __construct($_pastaInterna = "")
		{
			$this->_dirpage = "http://{$_SERVER['HTTP_HOST']}/{$_pastaInterna}";
			if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
				$this->_dirreq = "{$_SERVER['DOCUMENT_ROOT']}{$_pastaInterna}";
			}else{
				$this->_dirreq = "{$_SERVER['DOCUMENT_ROOT']}/{$_pastaInterna}";
			}
			$this->_dirpublic = $this->_dirpage."";
			$this->_dirmedia = $this->_dirpublic."media/";
			$this->_dirimg = $this->_dirmedia."img/";
			$this->_diraudio = $this->_dirmedia."audio/";
			$this->_dirvideo = $this->_dirmedia."video/";
			$this->_dirres = $this->_dirpublic."resources/";
			$this->_dircss = $this->_dirres."css/";
			$this->_dirfonts = $this->_dirres."fonts/";
			$this->_dirjs = $this->_dirres."js/";
		}

		public function __get($atributo)
		{
			return $this->$atributo;
		}
	}

	//Conexão local
	//Para criar novas conexões vasta instanciar passando os seguintes dados
	// //$conexao = new Conexao('ENDERECO_HOST', 'NOME_BANCODEDADOS', 'USUARIO', 'SENHA');

	// $conexao = new Conexao('localhost', 'estrutura_basica', 'root', '');

?>