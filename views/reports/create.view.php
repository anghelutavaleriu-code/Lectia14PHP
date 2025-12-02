<?php include __DIR__ . '/../components/nav.view.php'; ?>
<div class="container py-5">
    <h1>Crează raport nou</h1>

    <form method="post" action="/reports">
        <div class="mb-3">
            <label class="form-label">Titlu</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Categorie</label>
            <select name="category" class="form-select" required>
                <?php foreach($categories as $cat): ?>
                    <option value="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Conținut</label>
            <textarea name="content" class="form-control" rows="6" required></textarea>
        </div>

        <button class="btn btn-success">Salvează</button>
        <a href="/reports" class="btn btn-secondary ms-2">Anulează</a>
    </form>
</div>

<?php include __DIR__ . '/../components/footer.view.php'; ?>
