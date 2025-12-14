<?php

class RemboursementController extends AbstractController
{
    private RemboursementManager $remboursementManager;

    public function __construct()
    {
        parent::__construct();
        $this->remboursementManager = new RemboursementManager();
    }

    public function index(): void
    {
        $this->requireLogin();

        $remboursements = $this->remboursementManager->findAll();
        $this->render('remboursements/index', compact('remboursements'));
    }
}
