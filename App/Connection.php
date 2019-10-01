<?php 
	namespace App;

    class Connection
    {
        private $host = null;
        private $db = null;
        private $user = null;
        private $pass = null;

        private $conexao = null;
        private $string_conexao = null;

        public function __construct($s_host, $s_db, $s_user, $s_pass)
        {
            $this->host = $s_host;
            $this->db = $s_db;
            $this->user = $s_user;
            $this->pass = $s_pass;
        }

        //HOST
        public function getHost(){
            return $this->host;
        }

        public function setHost($s_host){
            $this->host = $s_host;
        }

        //DATA BASE
        public function getDB(){
            return $this->db;
        }

        public function setDB($s_db){
            $this->db = $s_db;
        }

        //DATA USER
        public function getUser(){
            return $this->user;
        }

        public function setUser($s_user){
            $this->user = $s_user;
        }

        //DATA BASE
        public function getPass(){
            return $this->pass;
        }

        public function setPass($s_pass){
            $this->pass = $s_pass;
        }

        //Abrir Conexão
        public function abrir()
        {   
            $this->string_conexao = "mysql:host={$this->host};dbname={$this->db};";

            try {		
                $this->conexao = new \PDO($this->string_conexao, $this->user, $this->pass);
                $this->conexao->exec('set names UTF8');
                $this->conexao ->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo 'ERRO: ' . $e->getMessage();
            }

            return $this->conexao;
        }

        //Fazer consulta no BD
        public function selectTable($table)
        {
            $select_query = "SELECT * FROM {$table}";            

            if ($this->conexao == null) {
                $this->abrir();
            }

            $prepare = $this->conexao->prepare($select_query);

            $prepare->execute();

            $linha = $prepare->fetchAll(\PDO::FETCH_OBJ);

            return $linha;
        }
    }
?>