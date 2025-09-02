Javzandamba Khutagt Center NGO Website

Tech
- PHP 8.1+
- Bootstrap 5 (CDN)
- MySQL (PDO)
- Composer (dotenv)

Quick start
1) Copy .env.example to .env and configure DB connection
2) Run database/schema.sql in your MySQL database
3) composer install
4) Serve the public directory with a PHP server (Apache/Nginx or `php -S localhost:8000 -t public`)
5) Open /?page=home

Structure
- public/ entry point, assets, .htaccess
- views/ PHP views per page with partials/header.php and partials/footer.php
- database/schema.sql for tables
- composer.json for autoloading & dotenv

Pages
- Home: YouTube hero, Latest News, Courses slider
- About: Introductions, Story, Founders, Teachers, Board members, Members
- Courses: Hero slider (3 top), Featured, Paginated cards
- Charity: Charity types, Category grid
- Donation: Top 10, Board/Teachers/Members/Other donations
- News: Hero slider (3 top posts), Category filter, Top posts, Latest posts
- Contact: Simple form
- Auth: Login, Sign-Up, Forgot Password
- Dashboards: Admin, Member
- Single pages: Post, Event, Teacher

Routing
- Simple query routing via `?page=...`
  - /?page=home
  - /?page=about
  - /?page=courses
  - /?page=charity
  - /?page=donation
  - /?page=news
  - /?page=contact
  - /?page=login
  - /?page=signup
  - /?page=forgot
  - /?page=dashboard/admin
  - /?page=dashboard/member
- Single pages:
  - /?page=post&amp;id={id}
  - /?page=event&amp;id={id}
  - /?page=teacher&amp;id={id}

User roles
- admin, staff, moderator, member

Notes
- This is a scaffold with static placeholders. Replace with real DB reads, authentication, RBAC, and CRUD in next iterations.
