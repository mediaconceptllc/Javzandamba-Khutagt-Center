Javzandamba Khutagt Center NGO Website

Tech
- PHP 8.1+
- Bootstrap 5 (CDN)
- MySQL (PDO)
- Composer (dotenv)

Quick start
1) Copy .env.example to .env and configure DB connection
2) Run database/schema.sql in your MySQL database
3) Serve the public directory with a PHP server (Apache/Nginx or `php -S localhost:8000 -t public`)
4) Open /?page=home

Structure
- public/ entry point, assets, .htaccess
- views/ PHP views per page with partials/header.php and partials/footer.php
- database/schema.sql for tables
- composer.json for autoloading & dotenv

Routing
- Simple query routing via ?page=...
- Single pages:
  - /?page=post&amp;id={id}
  - /?page=event&amp;id={id}
  - /?page=teacher&amp;id={id}

User roles
- admin, staff, moderator, member
- Extend controllers and DB queries in public/index.php or create src/ with controllers as needed.

Notes
- This is a scaffold with static placeholders. Replace with real DB reads and CRUD in next iterations.
