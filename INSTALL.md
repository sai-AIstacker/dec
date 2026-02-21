# Installing Decan 1.0

This guide will walk you through setting up **Decan** on your local machine or server.

## Prerequisites
- **PHP**: 8.1 or higher (with `pgsql`, `mysqli`, `mbstring`, `gd`, `curl`, `xml`, `gettext` extensions).
- **Database**: PostgreSQL 14+ (Recommended) or MySQL 8.0+.
- **Web Server**: Apache 2.4+ or Nginx.

## Installation Steps
1.  **Database Creation**: Create a new database and user in your database system.
2.  **Configuration**: 
    - Copy `config.inc.sample.php` to `config.inc.php`.
    - Edit `config.inc.php` with your database credentials.
3.  **Schema Import**:
    - For PostgreSQL: Import `decan.sql`.
    - For MySQL: Import `decan_mysql.sql`.
4.  **Web Access**: Point your web server to the project root and navigate to `index.php`.
5.  **First Login**:
    - Default Username: `admin`
    - Default Password: `admin`
    - (You will be prompted to change your password on first login).

## Troubleshooting
Run the `diagnostic.php` script in your browser to check for missing dependencies or configuration errors.

---
For production deployment, refer to the [Deployment Strategy](file:///home/sai/.gemini/antigravity/brain/62292a93-8b20-4a74-8f76-15f371647488/deploy.md).
