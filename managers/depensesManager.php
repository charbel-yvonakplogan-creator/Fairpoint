<?php

class DepenseManager extends AbstractManager
{
    private string $table = "depenses";

    /*  Créer une dépense */
    public function create(Depense $depense): void
    {
        $sql = "INSERT INTO depenses (category_id, created_by, montant, created_at, motif)
                VALUES (:category_id, :created_by, :montant, :created_at, :motif)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'category_id' => $depense->getCategoryId(),
            'created_by'  => $depense->getCreatedBy(),
            'montant'     => $depense->getMontant(),
            'created_at'  => $depense->getCreatedAt(),
            'motif'       => $depense->getMotif()
        ]);
    }

    /*  Récupérer toutes les dépenses avec catégorie + créateur */
    public function findAll(): array
    {
        $sql = "
            SELECT d.*, c.name AS categorie, u.name AS createur
            FROM depenses d
            JOIN categories c ON d.category_id = c.id
            JOIN users u ON d.created_by = u.id
            ORDER BY d.created_at DESC
        ";

        return $this->db->query($sql)->fetchAll();
    }

    /*  Récupérer une dépense par ID */
    public function findById(int $id): ?Depense
    {
        $stmt = $this->db->prepare("SELECT * FROM depenses WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();

        if (!$row) {
            return null;
        }

        return new Depense(
            $row['id'],
            $row['category_id'],
            $row['created_by'],
            $row['montant'],
            $row['created_at'],
            $row['motif']
        );
    }

    /*  Supprimer une dépense */
    public function delete(int $id): void
    {
        $stmt = $this->db->prepare("DELETE FROM depenses WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
