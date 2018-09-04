<?php

class Database {
    private $host = "localhost";
    private $username = "renato";
    private $password = "r3n@to";
    private $database = "teste";
    private $conexao = null;

    public function execute($query) {
        return $this->conexao->query($query);
    }

    public function fetch_all($resultado) {
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function connect() {
        $this->conexao = new mysqli($this->host, $this->username, $this->password, $this->database);
    }

    public function disconnect() {
        $this->conexao->close();
    }

    public function escapeString($texto) {
        return $this->conexao->real_escape_string($texto);
    }
}