<?php
class RemboursementManager extends AbstractManager
{
    public function findAll(): array
    {
        $sql = "
            SELECT r.*, u1.name AS from_user, u2.name AS to_user
            FROM remboursements r
            JOIN users u1 ON r.user_from_id = u1.id
            JOIN users u2 ON r.user_to_id = u2.id
        ";

        return $this->db->query($sql)->fetchAll();
    }
}
