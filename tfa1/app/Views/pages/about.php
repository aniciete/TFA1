<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<header class="section-header">
    <span class="pill-badge">System Overview</span>
    <h1 class="page-title">About This Application</h1>
    <p class="section-lead">
        Technical Formative Assessment 1 focuses on establishing the front controller, routing tables, controllers, and view rendering layers in CodeIgniter 4.
    </p>
</header>

<div class="content-stack">
    <section class="info-block">
        <h2 class="block-title">Request Execution Flow</h2>
        <p class="block-description">
            In CodeIgniter 4, each user action follows an explicit Model-View-Controller path without runtime guesswork:
        </p>
        <ol class="flow-steps">
            <li class="flow-step">
                <strong class="flow-step-title">1. Incoming URL</strong>
                <p class="flow-step-text">The browser issues an HTTP GET request to a path such as <code>/customers</code> or <code>/users</code>.</p>
            </li>
            <li class="flow-step">
                <strong class="flow-step-title">2. Route Matching</strong>
                <p class="flow-step-text">The router in <code>app/Config/Routes.php</code> resolves the URL to a specific controller and action method.</p>
            </li>
            <li class="flow-step">
                <strong class="flow-step-title">3. Controller Execution</strong>
                <p class="flow-step-text">The controller method prepares required data, such as a static array of records, and calls the view renderer.</p>
            </li>
            <li class="flow-step">
                <strong class="flow-step-title">4. View Presentation</strong>
                <p class="flow-step-text">The view iterates the data, applies HTML escaping, and returns the finished response to the client.</p>
            </li>
        </ol>
    </section>

    <section class="info-block">
        <h2 class="block-title">Data Storage Design Decision</h2>
        <p class="block-description">
            This application deliberately uses in-memory static PHP arrays inside controller methods instead of a live database. This allows validating the routing and templating pipeline before adding schema migrations, seeders, and relational queries in subsequent modules.
        </p>
    </section>
</div>
<?= $this->endSection() ?>
