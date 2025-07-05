<?= $this->include('layout/head') ?>
<?= $this->include('layout/side_nav') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Submit Feedback</h1>
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

    <form action="<?= base_url('feedback/store') ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= old('name') ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required><?= old('message') ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Feedback</button>
        <a href="<?= base_url('feedback') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</main>

<?= $this->include('layout/footer') ?>