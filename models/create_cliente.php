<?php
require_once '../config/Database.php';
require_once '../models/Cliente.php';
require_once '../dao/ClienteDAO.php';

$data = json_decode(file_get_contents("php://input"));

$database = new Database();
$db = $database->getConnection();

$cliente = new Cliente();
$cliente->setNome($data->nome);
$cliente->setEmail($data->email);
$cliente->setTelefone($data->telefone);

$clienteDAO = new ClienteDAO($db);
if ($clienteDAO->create($cliente)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>
