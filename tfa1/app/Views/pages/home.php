<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero-section">
    <div class="hero-content">
        <span class="pill-badge">CodeIgniter 4 Core Architecture</span>
        <h1 class="page-title">Point-of-Sale Foundations</h1>
        <p class="hero-lead">
            A modular four-page web application demonstrating Model-View-Controller fundamentals, clean route resolution, and controller-managed data structures.
        </p>
    </div>
</section>

<section class="card-grid">
    <article class="feature-card">
        <div class="card-header">
            <span class="card-icon" aria-hidden="true">&#9638;</span>
            <h2 class="card-title">Customer Accounts</h2>
        </div>
        <p class="card-description">
            View customer directories populated from static PHP array structures before permanent database integration.
        </p>
        <div class="card-footer">
            <a href="<?= site_url('customers') ?>" class="button button-primary">Open Customers</a>
        </div>
    </article>

    <article class="feature-card">
        <div class="card-header">
            <span class="card-icon" aria-hidden="true">&#9779;</span>
            <h2 class="card-title">User Accounts</h2>
        </div>
        <p class="card-description">
            Browse staff accounts, operational roles, and access credentials maintained inside the controller layer.
        </p>
        <div class="card-footer">
            <a href="<?= site_url('users') ?>" class="button button-primary">Open Users</a>
        </div>
    </article>

    <article class="feature-card">
        <div class="card-header">
            <span class="card-icon" aria-hidden="true">&#9881;</span>
            <h2 class="card-title">Architecture &amp; Flow</h2>
        </div>
        <p class="card-description">
            Examine how HTTP requests map through CodeIgniter routing, execute controller methods, and populate view templates.
        </p>
        <div class="card-footer">
            <a href="<?= site_url('about') ?>" class="button button-secondary">Learn About MVC</a>
        </div>
    </article>
</section>
<?= $this->endSection() ?>
