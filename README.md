# Menterprise - Mining Consultancy Website

This is a small PHP + MySQL site for Menterprise with a public front-end and an admin CRUD for blog/news posts.

Quick setup (Windows, XAMPP):

1. Place this folder in your web root (e.g. `C:\xampp\htdocs\menterprise_site`).
2. Ensure `uploads` folder is writable by the web server.
3. Update DB credentials in `includes/db.php` if needed.
4. Create database `menterprise_db` in MySQL (e.g., via phpMyAdmin) or use existing DB with that name.
5. Run `http://localhost/menterprise_site/setup.php` once to create tables and an admin user (admin / admin123).
6. Remove or protect `setup.php` after setup.
7. Visit `http://localhost/menterprise_site/` for the public site and `http://localhost/menterprise_site/admin/login.php` to manage posts.

Notes:
- Admin password set by default to `admin123` (change after first login).
- Posts content accepts HTML - be careful editing raw HTML in admin.
- This is a minimal starter. Extend and secure for production (HTTPS, stronger auth, CSRF protection, input sanitization).
# M-Enterprise Ghana Limited — PHP Site

A mobile-friendly mining consultancy website with a PHP backend and a simple blog/news CRUD.

## Features
- Landing page styled similar to the provided design (hero, metrics, services, testimonial, FAQ, CTA)
- Blog/News with Create, Read, Update, Delete via a JSON store
- Admin authentication (session-based)
- Responsive layout without any build step

## Getting Started (XAMPP)
1. Ensure XAMPP is installed and Apache is running.
2. Place this folder under `C:\xampp\htdocs\menterprise_site`.
3. Open `http://localhost/menterprise_site/` in your browser.

### PHP built-in server (optional)
If the PHP CLI is available:

```
C:\xampp\php\php.exe -S localhost:8000 -t C:\xampp\htdocs\menterprise_site
```

Then open `http://localhost:8000/`.

## Admin
- URL: `http://localhost/menterprise_site/admin/login.php`
- Username: `admin`
- Default password: `change-this-password`
- Change the password in `includes/config.php`.

## Content Source
Copy used from: https://menterpriseghanalimited.com/ (services and company description).

## Structure
- `index.php` — landing page
- `blog.php` — all posts
- `post.php` — single post view
- `admin/` — login, dashboard, new, edit, delete
- `data/posts.json` — JSON post storage
- `assets/` — CSS & JS
- `includes/` — shared header, footer, config, functions

Menterprice Website
ref: https://block.codescandy.com/
https://northbay-resources.com/
