<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark min-vh-100">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white <?= current_url() == base_url() ? 'active' : '' ?>" href="<?= base_url('/') ?>">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?= strpos(current_url(), 'articles') !== false ? 'active' : '' ?>" href="<?= base_url('articles') ?>">
                            <i class="fas fa-newspaper me-2"></i> Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?= strpos(current_url(), 'feedback') !== false ? 'active' : '' ?>" href="<?= base_url('feedback') ?>">
                            <i class="fas fa-comments me-2"></i> Feedback
                        </a>
                    </li>
                </ul>
            </div>
        </nav>