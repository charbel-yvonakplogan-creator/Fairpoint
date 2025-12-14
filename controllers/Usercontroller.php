<?php

class UserController extends AbstractController
{
    private UserManager $userManager;

    public function __construct()
    {
        parent::__construct();
        $this->userManager = new UserManager();
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->userManager->findByEmail($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $this->redirect('index.php');
            }
        }

        $this->render('users/login');
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userManager->create(
                $_POST['name'],
                $_POST['email'],
                password_hash($_POST['password'], PASSWORD_DEFAULT)
            );

            $this->redirect('index.php?controller=user&action=login');
        }

        $this->render('users/register');
    }

    public function logout(): void
    {
        session_destroy();
        $this->redirect('index.php');
    }
}
