<?php

class DepenseController extends AbstractController
{
    private DepenseManager $depenseManager;
    private CategoryManager $categoryManager;

    public function __construct()
    {
        parent::__construct();
        $this->depenseManager = new DepenseManager();
        $this->categoryManager = new CategoryManager();
    }

    public function index(): void
    {
        $this->requireLogin();

        $depenses = $this->depenseManager->findAll();
        $this->render('depenses/index', compact('depenses'));
    }

    public function create(): void
    {
        $this->requireLogin();

        $categories = $this->categoryManager->findAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $depense = new Depense(
                null,
                $_POST['category_id'],
                $_SESSION['user_id'],
                $_POST['montant'],
                date('Y-m-d H:i:s'),
                $_POST['motif']
            );

            $this->depenseManager->create($depense);
            $this->redirect('index.php?controller=depense');
        }

        $this->render('depenses/create', compact('categories'));
    }
}
