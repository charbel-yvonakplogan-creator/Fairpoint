<?php

class Depense
{
    public function __construct(
        private ?int $id = null,
        private ?int $category_id = null,
        private ?int $created_by = null,
        private string $montant,
        private string $created_at,
        private string $motif
    ) {}

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getCategoryId(): ?int {
        return $this->category_id;
    }

    public function setCategoryId(?int $category_id): void {
        $this->category_id = $category_id;
    }

    public function getCreatedBy(): ?int {
        return $this->created_by;
    }

    public function setCreatedBy(?int $created_by): void {
        $this->created_by = $created_by;
    }

    public function getMontant(): string {
        return $this->montant;
    }

    public function setMontant(string $montant): void {
        $this->montant = $montant;
    }

    public function getCreatedAt(): string {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): void {
        $this->created_at = $created_at;
    }

    public function getMotif(): string {
        return $this->motif;
    }

    public function setMotif(string $motif): void {
        $this->motif = $motif;
    }
}
