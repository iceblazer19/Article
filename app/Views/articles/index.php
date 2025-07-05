<?= $this->include('layout/head') ?>
<?= $this->include('layout/side_nav') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Articles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="<?= base_url('articles/create') ?>" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-plus"></i> New Article
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= esc($article['title']) ?></td>
                    <td>
                        <span class="badge bg-<?= $article['status'] == 'published' ? 'success' : 'warning' ?>">
                            <?= ucfirst($article['status']) ?>
                        </span>
                    </td>
                    <td><?= date('Y-m-d H:i', strtotime($article['created_at'])) ?></td>
                    <td>
                        <a href="<?= base_url('articles/edit/' . $article['id']) ?>" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button onclick="confirmDelete('<?= base_url('articles/delete/' . $article['id']) ?>')" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?= $this->include('layout/footer') ?>