<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="directory-container">
    <header class="directory-header">
        <div class="header-main">
            <div class="tag-row">
                <span class="market-tag">Directory // 02</span>
                <span class="status-indicator">
                    <span class="status-pip" aria-hidden="true"></span>
                    <span class="status-label">In-Memory Store</span>
                </span>
            </div>
            <h1 class="page-title">User Accounts</h1>
            <p class="section-lead">Authorized internal personnel, operational roles, and system operators.</p>
        </div>
        <div class="overlapping-stat" aria-label="User summary count">
            <span class="stat-giant" aria-hidden="true"><?= sprintf('%02d', count($users)) ?></span>
            <div class="stat-meta">
                <span class="stat-label">Total Users</span>
                <span class="stat-value"><?= count($users) ?></span>
            </div>
        </div>
    </header>

    <div class="table-container open-ledger" tabindex="0" role="region" aria-label="Staff user accounts directory">
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
                    <tr class="ledger-row-item">
                        <td class="td-num" data-label="#"><?= sprintf('%02d', $index + 1) ?></td>
                        <td class="cell-mono tabular-num" data-label="Username"><?= esc($user['username']) ?></td>
                        <td class="cell-primary" data-label="Full Name"><?= esc($user['full_name']) ?></td>
                        <td class="cell-role" data-label="System Role">
                            <span class="role-badge role-<?= strtolower(explode(' ', $user['role'])[0]) ?>"><?= esc($user['role']) ?></span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="data-notice">
        <span class="notice-icon" aria-hidden="true">&bull;</span>
        <p>Data source: In-memory static array defined inside <code>App\Controllers\Users::index()</code>.</p>
    </div>
</div>
<?= $this->endSection() ?>
