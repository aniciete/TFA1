<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS Foundations') ?></title>
    <?php
        $cssUrl = base_url('assets/css/style.css');
        if (ENVIRONMENT === 'development' && ! empty($_SERVER['HTTP_HOST'])) {
            $scheme = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
            $cssUrl = $scheme . '://' . $_SERVER['HTTP_HOST'] . '/assets/css/style.css';
        }
    ?>
    <link rel="stylesheet" href="<?= esc($cssUrl) ?>">
</head>
<body>
    <header class="site-header">
        <div class="container header-container">
            <a href="<?= site_url('/') ?>" class="brand-link">
                <span class="brand-badge">POS</span>
                <span class="brand-title">Foundations</span>
            </a>
            <nav class="site-nav" aria-label="Main Navigation">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="<?= site_url('/') ?>" class="nav-link <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>" <?= ($activePage ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('about') ?>" class="nav-link <?= ($activePage ?? '') === 'about' ? 'active' : '' ?>" <?= ($activePage ?? '') === 'about' ? 'aria-current="page"' : '' ?>>About</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('customers') ?>" class="nav-link <?= ($activePage ?? '') === 'customers' ? 'active' : '' ?>" <?= ($activePage ?? '') === 'customers' ? 'aria-current="page"' : '' ?>>Customer Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('users') ?>" class="nav-link <?= ($activePage ?? '') === 'users' ? 'active' : '' ?>" <?= ($activePage ?? '') === 'users' ? 'aria-current="page"' : '' ?>>User Accounts</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container footer-container">
            <p>IT0049 Web System Technologies &bull; Technical Formative Assessment 1</p>
            <p class="footer-subtext">CodeIgniter 4 POS Foundations &bull; In-Memory Static Records</p>
        </div>
    </footer>
</body>
</html>
