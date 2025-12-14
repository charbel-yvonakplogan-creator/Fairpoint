<?php

class ParticipantDepenseController extends AbstractController
{
    private ParticipantDepenseManager $participantManager;

    public function __construct()
    {
        parent::__construct();
        $this->participantManager = new ParticipantDepenseManager();
    }

    public function add(): void
    {
        $this->requireLogin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->participantManager->addParticipant(
                $_POST['depense_id'],
                $_POST['user_id'],
                $_POST['montant']
            );

            $this->redirect('index.php?controller=depense');
        }
    }
}
