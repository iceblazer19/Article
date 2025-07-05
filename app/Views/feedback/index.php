<?= $this->include('layout/head') ?>
<?= $this->include('layout/side_nav') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Feedback</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="<?= base_url('feedback/create') ?>" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-plus"></i> Submit Feedback
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feedback as $item): ?>
                <tr>
                    <td><?= esc($item['name']) ?></td>
                    <td><?= esc($item['email']) ?></td>
                    <td><?= esc($item['message']) ?></td>
                    <td><?= date('Y-m-d H:i', strtotime($item['created_at'])) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?= $this->include('layout/footer') ?>