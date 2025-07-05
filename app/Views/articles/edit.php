<?= $this->include('layout/head') ?>
<?= $this->include('layout/side_nav') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Article</h1>
    </div>

    <?php if(session()->has('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach(session('errors') as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('articles/update/' . $article['id']) ?>" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" 
                   value="<?= old('title', $article['title']) ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" 
                      rows="10"><?= old('content', $article['content']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="draft" <?= old('status', $article['status']) == 'draft' ? 'selected' : '' ?>>Draft</option>
                <option value="published" <?= old('status', $article['status']) == 'published' ? 'selected' : '' ?>>Published</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Article</button>
        <a href="<?= base_url('articles') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</main>

<?= $this->include('layout/footer') ?>