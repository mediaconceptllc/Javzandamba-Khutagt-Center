<?php
declare(strict_types=1);

namespace App;

class Auth
{
    public static function start(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login(string $email, string $password): bool
    {
        self::start();
        if ($email === '' || $password === '') {
            return false;
        }
        $pdo = Database::pdo();
        $stmt = $pdo->prepare('SELECT id, email, password_hash, role FROM users WHERE email = ? LIMIT 1');
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if (!$user || !password_verify($password, $user['password_hash'] ?? '')) {
            return false;
        }
        $_SESSION['user'] = [
            'id' => (int)$user['id'],
            'email' => $user['email'],
            'role' => $user['role'] ?? 'member',
        ];
        return true;
    }

    public static function register(string $name, string $email, string $phone, string $password): bool
    {
        $name = trim($name);
        $email = trim(strtolower($email));
        $phone = trim($phone);
        if ($name === '' || $email === '' || $password === '') {
            return false;
        }
        $pdo = Database::pdo();
        $exists = $pdo->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
        $exists->execute([$email]);
        if ($exists->fetch()) {
            return false;
        }
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO users (name, email, phone, password_hash, role, created_at) VALUES (?, ?, ?, ?, ?, NOW())');
        return $stmt->execute([$name, $email, $phone, $hash, 'member']);
    }

    public static function logout(): void
    {
        self::start();
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }
        session_destroy();
    }

    public static function user(): ?array
    {
        self::start();
        return $_SESSION['user'] ?? null;
    }

    public static function checkRole(array $roles): bool
    {
        $u = self::user();
        if (!$u) return false;
        return in_array($u['role'] ?? 'member', $roles, true);
    }
}
