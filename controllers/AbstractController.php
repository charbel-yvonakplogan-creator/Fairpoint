<?php

abstract class AbstractController
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    protected function render(string $view, array $data = []): void
    {
        extract($data);
        require "views/$view.php";
    }

    protected function redirect(string $url): void
    {
        header("Location: $url");
        exit;
    }

    protected function isLogged(): bool
    {
        return isset($_SESSION['user_id']);
    }

    protected function requireLogin(): void
    {
        if (!$this->isLogged()) {
            $this->redirect('index.php?controller=user&action=login');
        }
    }
}
