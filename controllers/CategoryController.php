<?php

class CategoryController extends AbstractController
{
    private CategoryManager $categoryManager;

    public function __construct()
    {
        parent::__construct();
        $this->categoryManager = new CategoryManager();
    }

    public function index(): void
    {
        $this->requireLogin();

        $categories = $this->categoryManager->findAll();
        $this->render('categories/index', compact('categories'));
    }

    public function create(): void
    {
        $this->requireLogin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $category = new Category(null, $_POST['name']);
            $this->categoryManager->create($category);
            $this->redirect('index.php?controller=category');
        }

        $this->render('categories/create');
    }
}
