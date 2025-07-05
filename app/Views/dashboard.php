<?= $this->include('layout/head') ?>
<?= $this->include('layout/side_nav') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100 bg-light">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>


    <div class="row g-4 mb-4">
        <div class="col-12 col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body bg-primary text-white rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-subtitle mb-2">Total Articles</h6>
                            <h2 class="card-title mb-0"><?= $totalArticles ?? 0 ?></h2>
                        </div>
                        <div class="rounded-circle bg-white bg-opacity-25 p-3">
                            <i class="fas fa-newspaper fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body bg-success text-white rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-subtitle mb-2">Total Feedback</h6>
                            <h2 class="card-title mb-0"><?= $totalFeedback ?? 0 ?></h2>
                        </div>
                        <div class="rounded-circle bg-white bg-opacity-25 p-3">
                            <i class="fas fa-comments fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Articles</h5>
                <a href="<?= base_url('articles/create') ?>" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add New
                </a>
            </div>
        </div>
        <div class="card-body">
            <?php if (!empty($recentArticles)): ?>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($recentArticles as $article): ?>
                            <tr>
                                <td><?= esc($article['title']) ?></td>
                                <td>
                                    <span class="badge bg-<?= $article['status'] == 'published' ? 'success' : 'warning' ?>">
                                        <?= ucfirst($article['status']) ?>
                                    </span>
                                </td>
                                <td><?= date('Y-m-d H:i', strtotime($article['created_at'])) ?></td>
                                <td>
                                    <a href="<?= base_url('articles/edit/' . $article['id']) ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <div class="mb-3">
                        <i class="fas fa-newspaper fa-4x text-muted"></i>
                    </div>
                    <h5 class="text-muted mb-3">No Articles Yet</h5>
                    <p class="text-muted mb-3">Start by creating your first article</p>
                    <a href="<?= base_url('articles/create') ?>" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Create Article
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?= $this->include('layout/footer') ?>


<style>
.min-vh-100 {
    min-height: 100vh !important;
}

.card {
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}

.bg-opacity-25 {
    opacity: 0.25;
}

.table > :not(caption) > * > * {
    padding: 1rem 0.75rem;
}

.table tbody tr:hover {
    background-color: rgba(0,0,0,.075);
}
</style>