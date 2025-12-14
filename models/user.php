<?php

class User {

    private ?int $id;            
    private string $name;
    private string $email;
    private string $password;
    private string $created_at;

    public function __construct(
        string $name,
        string $email,
        string $password,
        string $created_at = ""
    ) {
        $this->id = null;  // pas encore en BDD
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->created_at = $created_at ?: date("Y-m-d H:i:s");
    }

    // --- GETTERS ---

    public function getId() : ?int {
        return $this->id;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function getPassword() : string {
        return $this->password;
    }

    public function getCreatedAt() : string {
        return $this->created_at;
    }

    // --- SETTERS ---

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function setName(string $name) : void {
        $this->name = $name;
    }

    public function setEmail(string $email) : void {
        $this->email = $email;
    }

    public function setPassword(string $password) : void {
        $this->password = $password;
    }

    public function setCreatedAt(string $created_at) : void {
        $this->created_at = $created_at;
    }
}
