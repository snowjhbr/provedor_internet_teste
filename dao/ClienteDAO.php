<?php
class ClienteDAO {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($cliente) {
        $query = "INSERT INTO clientes (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $cliente->getNome());
        $stmt->bindParam(":email", $cliente->getEmail());
        $stmt->bindParam(":telefone", $cliente->getTelefone());

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
