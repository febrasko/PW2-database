<?php

Class Sql
{
    private $conn;
    private function getConn() {
		return $this->conn;
	}

    private $database = [
        'host' => 'localhost',
        'name' => 'pw2',
        'user' => 'root',
        'pass' => ''
    ];

    /* Inserindo os dados de conexão de forma que possam ser editados
    facilmente na array $database 
    (Por algum motivo só é possível criar um objeto PDO dentro do método 
    construtor 🤷‍♀️)*/
    public function __construct(){
        $this->conn = new PDO(
            "mysql:host=" . $this->database['host'] . ";".
            "dbname=" . $this->database['name'],
            $this->database['user'],
            $this->database['pass']
        );
    }

    public function Select(string $table){
        if ($table != '') {
            $conn = $this->getConn();
            $cmd = "SELECT * FROM {$table}";
            $statement = $conn->prepare($cmd);
            $statement->execute();
            $select = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $select;
        } else return '';
    }
}