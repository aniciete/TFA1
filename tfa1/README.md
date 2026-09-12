# Point-of-Sale (POS) Foundations

**Course:** IT0049 (Web System Technologies)  
**Assessment:** Technical Formative Assessment 1 (TFA1)  
**Framework:** CodeIgniter 4 (v4.7.4)  
**Hosted Application:** [https://tfa1.freedev.app](https://tfa1.freedev.app)  
**GitHub Repository:** [https://github.com/aniciete/TFA1](https://github.com/aniciete/TFA1)

---

## 1. Project Overview

This project is the initial foundation of a Point-of-Sale (POS) system built using CodeIgniter 4 and the Model-View-Controller (MVC) architectural pattern. It focuses on establishing clear URL routing, controller actions, view layouts, and temporary in-memory static array data structures before introducing relational database persistence in future modules.

### Required Pages and Route Table

| URL Route | Controller Action | View Template | Purpose |
| :--- | :--- | :--- | :--- |
| `/` | `App\Controllers\Pages::home` | `pages/home.php` | POS application landing page with architectural overview and quick links |
| `/about` | `App\Controllers\Pages::about` | `pages/about.php` | MVC request execution flow and design documentation |
| `/customers` | `App\Controllers\Customers::index` | `customers/index.php` | Customer accounts directory listing full name, email, and phone |
| `/users` | `App\Controllers\Users::index` | `users/index.php` | Staff user accounts directory listing username, full name, and role |

---

## 2. Technical Stack & Prerequisites

- **Language:** PHP 8.2 or higher (tested on PHP 8.5)
- **Required PHP Extensions:** `intl`, `mbstring`, `json`, `curl`
- **Package Manager:** Composer 2.x
- **Framework:** CodeIgniter 4.7.4
- **Database:** None (TFA1 intentionally uses in-memory static PHP arrays inside controller methods; see `database/no_database_required.sql`)

---

## 3. Local Development Setup

### 3.1 Clone the Repository
```bash
git clone https://github.com/aniciete/TFA1.git
cd TFA1/tfa1
```

### 3.2 Install Dependencies
```bash
composer install
```

### 3.3 Configure Environment File
Copy the example environment template to `.env`:
```bash
cp env .env
```
Ensure the following variables are set in `.env`:
```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'
app.indexPage = ''
```

### 3.4 Start the Local Development Server
```bash
php spark serve
```
Access the application locally at: **[http://localhost:8080](http://localhost:8080)**

---

## 4. Architectural & Data Design

### Static Data Source Implementation
In accordance with the TFA1 laboratory instructions, the application does not connect to a database:
- `App\Controllers\Customers::index()` defines a static array containing 5 customer profiles (`full_name`, `email`, `phone`).
- `App\Controllers\Users::index()` defines a static array containing 5 staff profiles (`username`, `full_name`, `role`).
- Views render these records dynamically using PHP `foreach` loops with `esc()` data sanitization.
- The repository provides `database/no_database_required.sql` as a documented no-op reference fulfilling the submission rubric.

---

## 5. Running Automated Tests

Run the test suite using PHPUnit:
```bash
vendor/bin/phpunit
```
The test suite validates:
- System and path health (`HealthTest`).
- HTTP 200 responses across all four defined routes (`PosFoundationsTest`).
- Semantic HTML table rendering, accessible navigation (`aria-current="page"`), and record counts.
- 404 handling on non-existent routes with auto-routing disabled.

---

## 6. InfinityFree Deployment Procedure

This project includes automated packaging and shared-hosting configurations for InfinityFree Apache hosting:

1. Generate a lean production build archive (excluding development packages and test suites):
   ```bash
   ./build-infinityfree-zip.sh
   ```
2. In the InfinityFree **Control Panel (VistaPanel)**:
   - Ensure the PHP version is set to **PHP 8.2** or **PHP 8.3**.
3. Open the **Online File Manager** and navigate into the `htdocs/` folder (or `tfa1.freedev.app/htdocs/`).
4. Delete default placeholder files (`index2.html` or `default.php`).
5. Upload `tfa1-infinityfree.zip` and select **Extract**.
6. Verify the live site at: **[https://tfa1.freedev.app](https://tfa1.freedev.app)**.
