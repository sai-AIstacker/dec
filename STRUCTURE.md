# Decan SIS Project Structure

This document provides an overview of the directory and file structure of **Decan Version 1.0**.

## 📂 Root Directories

| Directory | Description |
| :--- | :--- |
| `assets/` | Frontend resources including CSS, JavaScript, local themes, and branding logos. |
| `classes/` | Core PHP object-oriented logic and integrated third-party libraries (e.g., PHPMailer, Symfony). |
| `functions/` | Reusable procedural PHP functions for common tasks (Searching, Formatting, DB logic). |
| `modules/` | Main application features (Attendance, Grades, Scheduling, School Setup, etc.). |
| `plugins/` | Extensible standalone features that hook into the core system. |
| `locale/` | Internationalization files for multi-language support (PO and MO files). |
| `ProgramFunctions/` | Specific backend logic for core processes like first-time setup and system updates. |
| `sessions/` | Server-side user session data (Ignored by Git). |

## 📄 Key Files

### Configuration & Entry
-   `config.inc.php`: Main system configuration (DB credentials, base URL).
-   `index.php`: The main entry point and login gateway.
-   `Warehouse.php`: Core application engine responsible for layout, headers, and global session management.
-   `diagnostic.php`: Essential utility for verifying server requirements and file permissions.

### Branding & Assets
-   `favicon.ico` / `apple-touch-icon.png`: Updated Decan icons with built-in cache busters in the code.
-   `assets/themes/FlatSIS/logo.png`: The primary Decan dashboard logo.

### Database & Documentation
-   `decan.sql` / `decan_mysql.sql`: Freshly branded database schema files for system initialization.
-   `README.md`: High-level project overview and feature list.
-   `INSTALL.md`: Setup instructions for various environments.
-   `LICENSE` / `COPYRIGHT`: Legal documentation preserving the GNU/GPL ecosystem.

---
**Launched with Decan Version 1.0**
