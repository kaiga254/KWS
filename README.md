# Kids With Solutions Foundation, Ltd. (KWSF)

Kids With Solutions Foundation, Ltd. is a custom PHP website for a Kenyan social enterprise that equips young people with practical digital, financial, and innovation skills. The website presents the foundation's mission, program bootcamps, donation channels, contact portals, and handles student enrollment applications.

For a detailed technical handover, refer to the **[DEVELOPER_GUIDE.md](file:///Applications/XAMPP/xamppfiles/htdocs/KWSF/DEVELOPER_GUIDE.md)** in the project root.

---

## Project Overview

The website is built using a lightweight custom PHP Model-View-Controller (MVC) architecture styled with Tailwind CSS (via CDN) and tailored interactive styling.

### Key Features

- **Clean Routing**: Custom URL rewriting routing rules (`.htaccess` to controller mapping).
- **Responsive Layout**: Designed for mobile and desktop viewports, with dynamic navbar highlighting.
- **Double-Loop Mailing System**: Automatic branded HTML auto-replies sent to parents/guardians and notification emails sent to KWSF administrators.
- **Database Backup**: Form submissions are locally backed up in a MySQL/MariaDB database (with automated table creation).
- **Interactive Visuals**: A custom-animated SVG diagram highlighting the "Innovation Cycle" (Discover, Imagine, Create, Evolve) on the home and programs pages.

---

## Project Structure

```text
KWSF/
├── app/
│   ├── controllers/      # MVC Page Controllers
│   │   ├── About.php
│   │   ├── Contact.php
│   │   ├── Donate.php
│   │   ├── Home.php
│   │   ├── Programs.php
│   │   └── Register.php
│   ├── core/             # Core Framework Classes
│   │   ├── App.php       # URL routing/bootstrap entry
│   │   ├── Controller.php# Base Controller class
│   │   └── Mailer.php    # cPanel-optimized mailing class
│   ├── views/            # MVC Views (HTML templates)
│   │   ├── about/
│   │   ├── contact/
│   │   ├── donate/
│   │   ├── home/
│   │   ├── layout/       # Shared main site layout wrap
│   │   ├── programs/
│   │   └── register/
│   └── init.php          # Framework bootstrapper
├── public/               # Web Server Root (publicly exposed assets)
│   ├── css/              # Stylesheets (e.g. innovation-cycle.css)
│   ├── img/              # Images, illustrations, and logos
│   └── index.php         # Entry script
├── config.php            # Global DB credentials and mail configurations
├── DEVELOPER_GUIDE.md    # Detailed architecture & database specs
└── CONTENT_REVIEW_NOTES.md # Content guidelines & image requirements
```

---

## Local Development Setup

To run this project locally, you need a PHP stack (e.g. XAMPP, MAMP, WAMP, or LocalWP).

### 1. Project Location

Clone or extract the repository inside your web server's public folder. For example, using XAMPP on macOS:

```bash
/Applications/XAMPP/xamppfiles/htdocs/KWSF
```

### 2. Launch Services

Start the **Apache Web Server** and **MySQL Database** from the XAMPP Control Panel.

### 3. Database Setup

Create a new database named `register` inside phpMyAdmin (`http://localhost/phpmyadmin/`) or via the MySQL CLI:

```sql
CREATE DATABASE register;
```

_Note: The required database tables (`registrations` and `enquiries`) are automatically created on the first form submission._

### 4. Configuration

Open **[config.php](file:///Applications/XAMPP/xamppfiles/htdocs/KWSF/config.php)** and adjust your database connection credentials if necessary. The codebase includes fallback support to connect to standard port `3306` or custom port `3308` (common in local XAMPP macOS installations).

### 5. Access in Web Browser

Open your browser and navigate to:

```text
http://localhost/KWSF/public/home
```

---

## Available Pages and Routes

The Apache `.htaccess` rewriting maps clean URLs dynamically. The primary routes are:

- **Home**: `http://localhost/KWSF/public/home`
- **About**: `http://localhost/KWSF/public/about`
- **Programs**: `http://localhost/KWSF/public/programs`
- **Support Our Work**: `http://localhost/KWSF/public/donate`
- **Contact Us**: `http://localhost/KWSF/public/contact`
- **Enrollment Form**: `http://localhost/KWSF/public/register`

---

## Technical Specifications

For full details on the custom MVC engine, database schema field mappings, validation logic, SPF/DKIM mailing constraints, interactive SVG animations, and production cPanel deployment checklists, please read the **[DEVELOPER_GUIDE.md](file:///Applications/XAMPP/xamppfiles/htdocs/KWSF/DEVELOPER_GUIDE.md)**.
