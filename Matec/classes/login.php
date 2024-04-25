<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matec";

$conn = new mysqli($servername, $username, $password, $dbname);

    class login{

        private $id;
        private $usuario;
        private $senha;

        public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

    }public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

    }public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function Insert($insObj)
    {
        global $wpdb;

        $tabela = "matec_login";

        $wpdb->insert($tabela, $insObj);

        // dd($wpdb);

        $id = $wpdb->insert_id;
        return $id;
    }



    }

?>