<?php
declare(strict_types=1);

namespace App\Models;

use App\Database;
use PDO;

class Post
{
    public static function list(?string $category, int $page, int $perPage): array
    {
        $pdo = Database::pdo();
        $offset = ($page - 1) * $perPage;
        $params = [];
        $where = '';
        if ($category) {
            $where = 'WHERE category = ?';
            $params[] = $category;
        }
        $stmt = $pdo->prepare("SELECT id, title, excerpt, image_url, category, created_at FROM posts $where ORDER BY created_at DESC LIMIT ? OFFSET ?");
        foreach ($params as $i => $val) {
            $stmt->bindValue($i + 1, $val);
        }
        $stmt->bindValue(count($params) + 1, $perPage, PDO::PARAM_INT);
        $stmt->bindValue(count($params) + 2, $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function find(int $id): ?array
    {
        $pdo = Database::pdo();
        $stmt = $pdo->prepare('SELECT id, title, content, image_url, category, created_at FROM posts WHERE id = ? LIMIT 1');
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
}
