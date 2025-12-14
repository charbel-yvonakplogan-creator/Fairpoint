<?php

class depense_participants
{
    public function __construct(private ? int $depense_id = null, private ?int $user_id = null)
    {

    }
    
   public function getDepense_id(): ?int {

        return $this->depense_id;
    }
    public function setDepense_id(?int $depense_id): void {

        $this->depense_id = $depense_id;
    }
    

    public function getUser_id(): ?int {

        return $this->user_id;
    }

    public function setUser_id(?int $user_id): void {

        $this->user_id = $user_id;
    }
}