<?php

class ParticipantDepenseManager extends AbstractManager
{
    public function addParticipant(int $depenseId, int $userId, string $montant): void
    {
        $sql = "INSERT INTO participant_depense (depense_id, user_id, montant)
                VALUES (:depense_id, :user_id, :montant)";

        $this->db->prepare($sql)->execute([
            'depense_id' => $depenseId,
            'user_id'    => $userId,
            'montant'    => $montant
        ]);
    }

    public function findParticipants(int $depenseId): array
    {
        $sql = "
            SELECT u.name, pd.montant
            FROM participant_depense pd
            JOIN users u ON pd.user_id = u.id
            WHERE pd.depense_id = :id
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $depenseId]);

        return $stmt->fetchAll();
    }
}
