<?php

class remboursements
{
    public function __construct(private ? int $id = null, private ? int $depense_id = null, private ? int $dequi_id = null, private ? int $a_qui_id = null, private string $montant, private string $payer_a)
    {

    }
    
    public function getPayer_a(): string
    {
        return $this->payer_a;
    }

    public function setPayer_a(string $payer_a): void
    {
        $this->$payer_a;
    }

    public function getMontant(): string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): void
    {
        $this->montant = $montant;
    }

    public function getA_qui_id(): string
    {
        return $this->a_qui_id;
    }

    public function setA_qui_id(int $a_qui_id): void
    {
        $this->a_qui_id = $a_qui_id;
    }

  
    
    public function getDequi_id(): ?int {

        return $this->dequi_id;
    }

    public function setDequi_id( int $dequi_id): void{
        $this-> dequi_id = $dequi_id;
    }
    
      public function getDepense_id(): ?int {

        return $this->depense_id;
    }
    public function setDepense_id(?int $depense_id): void {

        $this->depense_id = $depense_id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }
}