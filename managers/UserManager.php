<?php

class UserManager extends AbstractManager {


public function findAll(): array {
return $this->db->query("SELECT * FROM user")->fetchAll();
}


public function findById(int $id): ?array {
$stmt = $this->db->prepare("SELECT * FROM user WHERE id = :id");
$stmt->execute(['id' => $id]);
return $stmt->fetch() ?: null;
}


public function findByEmail(string $email): ?array {
$stmt = $this->db->prepare("SELECT * FROM user WHERE email = :email");
$stmt->execute(['email' => $email]);
return $stmt->fetch() ?: null;
}
}



?>