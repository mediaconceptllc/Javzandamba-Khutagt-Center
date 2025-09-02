<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$root = dirname(__DIR__);
$envPath = $root;
if (file_exists($envPath.'/.env')) {
    Dotenv\Dotenv::createImmutable($envPath)->load();
}
App\Auth::start();

function view(string $name, array $data = []) {
    extract($data);
    include __DIR__ . '/../views/partials/header.php';
    include __DIR__ . '/../views/' . $name . '.php';
    include __DIR__ . '/../views/partials/footer.php';
}

function route(): string {
    return $_GET['page'] ?? 'home';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['_action'] ?? '';
    if ($action === 'login') {
        $ok = App\Auth::login(trim($_POST['email'] ?? ''), (string)($_POST['password'] ?? ''));
        header('Location: ' . ($ok ? '/?page=dashboard/member' : '/?page=login'));
        exit;
    }
    if ($action === 'logout') {
        App\Auth::logout();
        header('Location: /?page=home');
        exit;
    }
    if ($action === 'signup') {
        $ok = App\Auth::register(
            (string)($_POST['name'] ?? ''),
            (string)($_POST['email'] ?? ''),
            (string)($_POST['phone'] ?? ''),
            (string)($_POST['password'] ?? '')
        );
        if ($ok) {
            App\Auth::login((string)$_POST['email'], (string)$_POST['password']);
            header('Location: /?page=dashboard/member');
        } else {
            header('Location: /?page=signup');
        }
        exit;
    }
}

$page = route();

if ($page === 'news') {
    $category = $_GET['category'] ?? null;
    $p = max(1, (int)($_GET['p'] ?? 1));
    $perPage = 12;
    try {
        $posts = App\Models\Post::list($category, $p, $perPage);
    } catch (\Throwable $e) {
        $posts = [];
    }
    view('news', ['posts' => $posts, 'category' => $category, 'page' => $p, 'perPage' => $perPage]);
    exit;
}

if ($page === 'post') {
    $id = (int)($_GET['id'] ?? 0);
    try {
        $post = $id ? App\Models\Post::find($id) : null;
    } catch (\Throwable $e) {
        $post = null;
    }
    if (!$post) {
        http_response_code(404);
        view('errors/404');
    } else {
        view('single/post', ['post' => $post]);
    }
    exit;
}

$routes = [
    'home' => fn() => view('home'),
    'about' => fn() => view('about'),
    'courses' => fn() => view('courses'),
    'events' => fn() => view('events'),
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
