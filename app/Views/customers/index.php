<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<header class="section-header with-meta">
    <div>
        <span class="pill-badge">Records Directory</span>
        <h1 class="page-title">Customer Accounts</h1>
        <p class="section-lead">Registered retail and commercial client profiles.</p>
    </div>
    <div class="meta-stat" aria-label="Customer summary count">
        <span class="stat-label">Total Records</span>
        <span class="stat-value"><?= count($customers) ?></span>
    </div>
</header>

<div class="table-container" tabindex="0" role="region" aria-label="Customer accounts directory">
    <table class="data-table">
        <caption class="visually-hidden">Customer accounts directory</caption>
        <thead>
            <tr>
                <th scope="col" class="th-num">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $index => $customer): ?>
                <tr>
                    <td class="td-num"><?= $index + 1 ?></td>
                    <td class="cell-primary"><?= esc($customer['full_name']) ?></td>
                    <td><a href="mailto:<?= esc($customer['email']) ?>" class="table-link"><?= esc($customer['email']) ?></a></td>
                    <td class="cell-mono"><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="data-notice">
    <p>Data source: In-memory static array defined inside <code>App\Controllers\Customers::index()</code>.</p>
</div>
<?= $this->endSection() ?>
