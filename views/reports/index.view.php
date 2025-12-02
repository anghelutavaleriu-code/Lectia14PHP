<?php include __DIR__ . '/../components/nav.view.php'; ?>
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Rapoarte</h1>
        <a href="/reports/create" class="btn btn-primary">Crează raport nou</a>
    </div>

    <?php if(empty($reports)): ?>
        <div class="alert alert-info">Nu există rapoarte.</div>
    <?php else: ?>
        <div class="list-group">
            <?php foreach($reports as $r): ?>
                <div class="list-group-item mb-2">
                    <h5 class="mb-1"><?= htmlspecialchars($r->title) ?></h5>
                    <div class="small text-muted">Autor: <?= htmlspecialchars($r->author) ?> | Categorie: <?= htmlspecialchars($r->category) ?></div>
                    <p class="mb-0 mt-2"><?= htmlspecialchars(mb_substr($r->content, 0, 120)) ?><?= mb_strlen($r->content) > 120 ? '...' : '' ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/../components/footer.view.php'; ?>
