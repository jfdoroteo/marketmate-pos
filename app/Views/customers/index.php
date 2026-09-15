<section class="page-banner compact">
    <div class="container">
        <p class="eyebrow">Account directory</p>
        <h1>Customer Accounts</h1>
        <p class="lead">Customer contact records supplied by a temporary static PHP array.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="table-summary">
            <div>
                <p class="eyebrow">Customer records</p>
                <h2>Registered customers</h2>
            </div>
            <span class="record-count"><?= count($customers) ?> records</span>
        </div>

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Full name</th>
                        <th scope="col">Email address</th>
                        <th scope="col">Phone number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td data-label="Full name"><strong><?= esc($customer['full_name']) ?></strong></td>
                            <td data-label="Email"><?= esc($customer['email']) ?></td>
                            <td data-label="Phone"><?= esc($customer['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
