<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="about-container">
    <header class="about-header">
        <h1 class="page-title">About This Application</h1>
        <p class="page-lead">
            Technical Formative Assessment 1 focuses on establishing the front controller, routing tables, controllers, and view rendering layers in CodeIgniter 4.
        </p>
    </header>

    <div class="about-layout">
        <section class="content-section" aria-labelledby="flow-heading">
            <h2 id="flow-heading" class="section-title">Request Execution Flow</h2>
            <p class="section-lead">
                In CodeIgniter 4, each user action follows an explicit Model-View-Controller path:
            </p>

            <ol class="flow-list">
                <li class="flow-item">
                    <div class="flow-marker">1</div>
                    <div class="flow-content">
                        <h3 class="flow-step-title">Incoming URL</h3>
                        <p class="flow-step-text">The browser issues an HTTP GET request to a path such as <code>/customers</code> or <code>/users</code>.</p>
                    </div>
                </li>

                <li class="flow-item">
                    <div class="flow-marker">2</div>
                    <div class="flow-content">
                        <h3 class="flow-step-title">Route Matching</h3>
                        <p class="flow-step-text">The router in <code>app/Config/Routes.php</code> resolves the URL to a specific controller and action method.</p>
                    </div>
                </li>

                <li class="flow-item">
                    <div class="flow-marker">3</div>
                    <div class="flow-content">
                        <h3 class="flow-step-title">Controller Execution</h3>
                        <p class="flow-step-text">The controller retrieves data collections from static PHP arrays and passes them to the view.</p>
                    </div>
                </li>

                <li class="flow-item">
                    <div class="flow-marker">4</div>
                    <div class="flow-content">
                        <h3 class="flow-step-title">View Presentation</h3>
                        <p class="flow-step-text">The controller renders data collections into view templates, producing clean HTML.</p>
                    </div>
                </li>
            </ol>
        </section>

        <section class="content-section" aria-labelledby="memo-heading">
            <h2 id="memo-heading" class="section-title">Data Storage Design Decision</h2>
            <div class="details-card">
                <p class="details-text" style="margin-bottom: 1rem;">
                    For TFA1, records are modeled as static PHP arrays in the controllers to focus on routing and template compilation before introducing database models.
                </p>
                <ul class="details-list">
                    <li>
                        <strong>Storage Model:</strong>
                        <span>In-memory static PHP arrays</span>
                    </li>
                    <li>
                        <strong>Controller Layer:</strong>
                        <span><code>CustomerController</code> and <code>UserController</code></span>
                    </li>
                    <li>
                        <strong>View Rendering:</strong>
                        <span>CodeIgniter 4 View Parser with layouts</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection() ?>
