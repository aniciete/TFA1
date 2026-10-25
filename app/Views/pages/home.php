<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="home-layout">
    <section class="overview-section">
        <h1 class="page-title">Point-of-Sale Foundations</h1>
        <p class="page-lead">
            A modular four-page web application demonstrating Model-View-Controller fundamentals, clean route resolution, and controller-managed data structures.
        </p>

        <div class="actions-grid">
            <article class="action-card">
                <h2 class="card-heading">Customer Accounts</h2>
                <p class="card-text">
                    Browse active client profiles and accounts retrieved through the <code>CustomerController</code> data layer.
                </p>
                <div class="card-action">
                    <a href="<?= site_url('customers') ?>" class="button button-primary">Open Customers</a>
                </div>
            </article>

            <article class="action-card">
                <h2 class="card-heading">User Accounts</h2>
                <p class="card-text">
                    Audit system operators, cashier staff, and administrative personnel managed through the <code>UserController</code> data layer.
                </p>
                <div class="card-action">
                    <a href="<?= site_url('users') ?>" class="button button-primary">Open Users</a>
                </div>
            </article>
        </div>
    </section>

    <section class="overview-section" aria-labelledby="details-heading">
        <h2 id="details-heading" class="section-title">System Overview</h2>
        <div class="details-card">
            <ul class="details-list">
                <li>
                    <strong>Configured Routes:</strong>
                    <span>Home, About, Customers, Users</span>
                </li>
                <li>
                    <strong>Framework:</strong>
                    <span>CodeIgniter 4 MVC</span>
                </li>
                <li>
                    <strong>Data Model:</strong>
                    <span>In-memory structured PHP datasets</span>
                </li>
                <li>
                    <strong>Templating:</strong>
                    <span>Modular layouts with semantic HTML landmarks</span>
                </li>
            </ul>
        </div>
    </section>
</div>
<?= $this->endSection() ?>
