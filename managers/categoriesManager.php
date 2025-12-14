<?php

class CategoryManager extends AbstractManager
{
    private string $table = "categories";

    /*  Récupérer toutes les catégories */
    public function findAll(): array
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY name ASC";
        return $this->db->query($sql)->fetchAll();
    }

    /*  Récupérer une catégorie par ID */
    public function findById(int $id): ?Category
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();

        if (!$row) {
            return null;
        }

        return new Category(
            $row['id'],
            $row['name']
        );
    }

    /*  Créer une catégorie */
    public function create(Category $category): void
    {
        $stmt = $this->db->prepare(
            "INSERT INTO {$this->table} (name) VALUES (:name)"
        );

        $stmt->execute([
            'name' => $category->getName()
        ]);
    }

    /* Supprimer une catégorie */
    public function delete(int $id): void
    {
        $stmt = $this->db->prepare(
            "DELETE FROM {$this->table} WHERE id = :id"
        );

        $stmt->execute(['id' => $id]);
    }
}
