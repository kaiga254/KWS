# Kids With Solutions Foundation, Ltd.

Kids With Solutions Foundation, Ltd. is a PHP-based website for a Kenyan social enterprise that equips young people with practical digital, financial, and innovation skills. It presents the foundation's mission, program areas, impact priorities, support options, contact placeholders, and a learner-interest form backed by MySQL.

## Project Overview

This project is built with a lightweight custom PHP MVC structure and Tailwind CSS via CDN. It is designed to run on a local Apache/MySQL stack such as XAMPP.

### Main Sections

- Home page with hero content, program areas, impact priorities, and audience-specific calls to action
- About page with mission, vision, values, and founders
- Programs page with bootcamp details
- Contact page with contact information and message form
- Support page with donor- and partner-focused content
- Register page with a learner-interest form that stores submissions in the database

## Features

- Responsive front-end layout built with Tailwind CSS
- Custom PHP MVC routing with clean controller/view separation
- Program registration form with database persistence
- Reusable layout wrapper for navigation and footer
- Image-driven hero and content sections
- Mobile-friendly navigation menu

## Requirements

- PHP 8.x or newer
- MySQL / MariaDB
- Apache web server
- XAMPP, MAMP, WAMP, or a similar local PHP stack

## Folder Structure

```text
app/
	core/         Framework core classes
	controllers/  Page controllers
	views/        Page templates and shared layout
config.php      Database connection settings
public/         Web entry point and public assets
img/            Source image assets
```

## How It Works

- `public/index.php` is the web entry point.
- `app/init.php` loads the app bootstrap, controller base class, and configuration.
- `app/core/App.php` parses the URL and loads the correct controller and method.
- `app/views/layout/main.php` wraps each page with the shared header, navigation, and footer.
- Each controller loads a matching view through the shared layout.

## Setup Instructions

### 1. Place the project in your web server directory

If you are using XAMPP on macOS, the project should be inside:

`/Applications/XAMPP/xamppfiles/htdocs/KWSF`

### 2. Start Apache and MySQL

Open XAMPP and start both services.

### 3. Create the database

Create a MySQL database named:

`register`

### 4. Create the required table

The registration form writes to a table named `registrations`.

Example schema:

```sql
CREATE TABLE registrations (
		id INT AUTO_INCREMENT PRIMARY KEY,
		first_name VARCHAR(100) NOT NULL,
		last_name VARCHAR(100) NOT NULL,
		email VARCHAR(150) NOT NULL,
		phone_number VARCHAR(30) NOT NULL,
		module VARCHAR(150) NOT NULL,
		child_first_name VARCHAR(100) NOT NULL,
		child_last_name VARCHAR(100) NOT NULL,
		child_age INT NOT NULL,
		child_gender VARCHAR(20) DEFAULT NULL,
		created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 5. Update database credentials if needed

Edit `config.php` and update the MySQL settings for your local environment.

### 6. Open the site in your browser

If the project is hosted in the XAMPP htdocs folder, open:

`http://localhost/KWSF/public/home`

## Available Routes

- `/public/home`
- `/public/programs`
- `/public/about`
- `/public/contact`
- `/public/donate`
- `/public/register`

## Asset Paths

Public images are served from:

`public/img/`

Program images are stored under:

`public/img/programs/`

## Notes

- Tailwind is loaded from a CDN, so no npm build step is required.
- The site currently uses static content for most pages.
- The registration form is the only page with server-side database writes.
- If images do not appear, confirm they exist inside `public/img/` and that Apache is serving the project from the expected base path.

## Troubleshooting

- If pages return 404 errors, confirm the URL includes `/public/`.
- If the registration form fails, verify the MySQL database, table, and credentials in `config.php`.
- If images fail to load, clear the browser cache and confirm the files exist in `public/img/`.

## License

No explicit license is defined in this repository.
