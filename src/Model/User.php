<?php

namespace App\Model;

class User{
    public function getId(): int
    {
        return $_SESSION['user_id'] ?? null;
    }
    public function login(string $email = null, string $password = null): void
    {
        if (empty($email) || empty($password)) {
            throw new \Exception('Invalid username or password.');
        }
        // Check if user exists with this email and password
        
        $_SESSION['user_id'] = 1;
    }
    public function logout(): void
    {
        unset($_SESSION['user_id']);
    }
    public function isLoggedIn(): bool
    {
        return isset($_SESSION['user_id']);
    }
}