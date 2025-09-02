<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$root = dirname(__DIR__);
$envPath = $root;
if (file_exists($envPath.'/.env')) {
    Dotenv\Dotenv::createImmutable($envPath)->load();
}

function view(string $name, array $data = []) {
    extract($data);
    include __DIR__ . '/../views/partials/header.php';
    include __DIR__ . '/../views/' . $name . '.php';
    include __DIR__ . '/../views/partials/footer.php';
}

function route(): string {
    return $_GET['page'] ?? 'home';
}

function db(): PDO {
    static $pdo = null;
    if ($pdo) return $pdo;
    $host = $_ENV['DB_HOST'] ?? '127.0.0.1';
    $port = $_ENV['DB_PORT'] ?? '3306';
    $db   = $_ENV['DB_DATABASE'] ?? 'javzandamba_center';
    $user = $_ENV['DB_USERNAME'] ?? 'root';
    $pass = $_ENV['DB_PASSWORD'] ?? '';
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    return $pdo;
}

$page = route();

$routes = [
    'home' => fn() => view('home'),
    'about' => fn() => view('about'),
    'courses' => fn() => view('courses'),
    'charity' => fn() => view('charity'),
    'donation' => fn() => view('donation'),
    'news' => fn() => view('news'),
    'contact' => fn() => view('contact'),
    'login' => fn() => view('auth/login'),
    'signup' => fn() => view('auth/signup'),
    'forgot' => fn() => view('auth/forgot'),
    'dashboard/admin' => fn() => view('dashboard/admin'),
    'dashboard/member' => fn() => view('dashboard/member'),

    'post' => fn() => view('single/post'),
    'event' => fn() => view('single/event'),
    'teacher' => fn() => view('single/teacher'),
];

if (isset($routes[$page])) {
    $routes[$page]();
} else {
    http_response_code(404);
    view('errors/404');
}
