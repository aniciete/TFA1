<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<header class="section-header with-meta">
    <div>
        <span class="pill-badge">Staff Directory</span>
        <h1 class="page-title">User Accounts</h1>
        <p class="section-lead">Authorized internal personnel, operational roles, and system operators.</p>
    </div>
    <div class="meta-stat" aria-label="User summary count">
        <span class="stat-label">Total Users</span>
        <span class="stat-value"><?= count($users) ?></span>
    </div>
</header>

<div class="table-container" tabindex="0" role="region" aria-label="Staff user accounts directory">
    <table class="data-table">
        <caption class="visually-hidden">Staff user accounts directory</caption>
        <thead>
            <tr>
                <th scope="col" class="th-num">#</th>
                <th scope="col">Username</th>
                <th scope="col">Full Name</th>
                <th scope="col">System Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td class="td-num"><?= $index + 1 ?></td>
                    <td class="cell-mono"><?= esc($user['username']) ?></td>
                    <td class="cell-primary"><?= esc($user['full_name']) ?></td>
                    <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="data-notice">
    <p>Data source: In-memory static array defined inside <code>App\Controllers\Users::index()</code>.</p>
</div>
<?= $this->endSection() ?>
