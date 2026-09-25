<section class="page-banner compact">
    <div class="container">
        <p class="eyebrow">Staff directory</p>
        <h1>User Accounts</h1>
        <p class="lead">Staff records retrieved from the MarketMate POS database.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="table-summary">
            <div>
                <p class="eyebrow">User records</p>
                <h2>Authorized staff</h2>
            </div>
            <span class="record-count"><?= count($users) ?> records</span>
        </div>

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td data-label="Username"><strong><?= esc($user['username']) ?></strong></td>
                            <td data-label="Full name"><?= esc($user['full_name']) ?></td>
                            <td data-label="Email"><?= esc($user['email'] ?? '') ?></td>
                            <td data-label="Phone"><?= esc($user['phone'] ?? '') ?></td>
                            <td data-label="Role"><span class="role-badge"><?= esc($user['role']) ?></span></td>
                            <td data-label="Status"><span class="status-badge <?= $user['account_status'] === 'Active' ? 'is-active' : 'is-inactive' ?>"><?= esc($user['account_status']) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
