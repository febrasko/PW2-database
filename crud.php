<?php

// CONEXÃO
$conn = new PDO('mysql:host=localhost;dbname=teste', 'root');

// INSERT
// $insert = [
//     'nome' => 'NOVO REGISTRO',
//     'idade' => '7'
// ];
// $cmd = $conn->prepare("INSERT INTO clientes (nome, idade) VALUES (:nome, :idade)");
// $cmd->bindParam(':nome', $insert['nome']);
// $cmd->bindParam(':idade', $insert['idade']);
// $cmd->execute();

// // UPDATE
// $update = [
//     'id' => '3',
//     'nome' => 'alterado',
//     'idade' => '2'
// ];
// $cmd = $conn->prepare("UPDATE clientes SET nome = :nome, idade = :idade WHERE id = :id");
// $cmd->bindParam(':id', $update['id']);
// $cmd->bindParam(':nome', $update['nome']);
// $cmd->bindParam(':idade', $update['idade']);
// $cmd->execute();

// // DELETE
// $deleteId = '3';
// $cmd = $conn->prepare("DELETE FROM clientes WHERE id = :id");
// $cmd->bindParam(':id', $deleteId);
// $cmd->execute();

// SELECT
$cmd = $conn->prepare("SELECT * FROM clientes");
$cmd->execute();
$table = $cmd->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($table);
echo '</pre>';