Scaffold PHP website (responsive, minimal UI, DB schema)

Summary
- Initial PHP 8+ scaffold with minimal, responsive UI using Bootstrap 5 (CDN).
- Simple router via /public/index.php with shared header/footer partials.
- Pages: Home, About, Courses, Charity, Donation, News, Contact, Auth (Login/Signup), Dashboards (Admin/Member), and single pages (Post/Event/Teacher).
- Database schema (MySQL/PDO) for users, posts, events, teachers, board members, members, courses, donations, saves.
- .env.example and README with setup instructions.

Notes
- Pages currently use static placeholders to illustrate layout and flows; next iteration will wire up full CRUD, auth, RBAC, media handling, and pagination/filters.
- No deployment performed.

Setup
1) cp .env.example .env and configure DB
2) Import database/schema.sql into MySQL
3) composer install
4) Serve: php -S localhost:8000 -t public
5) Open /?page=home

Links
- Link to Devin run: https://app.devin.ai/sessions/084adec2d6f346348410807939c079a4
- Requested by: Erkhembayar Myagmarjav (@mediaconceptllc)
