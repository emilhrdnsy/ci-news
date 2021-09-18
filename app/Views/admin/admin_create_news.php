<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<form action="/admin/news/save" method="post" id="text-editor">
  <?= csrf_field(); ?>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" placeholder="News title" value="<?= old('title'); ?>">
    <div class="invalid-feedback">
      <?= $validation->getError('title'); ?>
    </div>
  </div>
  <div class="form-group">
    <textarea name="content" class="form-control <?= ($validation->hasError('content')) ? 'is-invalid' : ''; ?>" cols="30" rows="8" placeholder="Write a great news!"><?= old('content'); ?></textarea>
    <div class="invalid-feedback">
      <?= $validation->getError('content'); ?>
    </div>
  </div>
  <div class="form-group">
    <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
    <button type=" submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
  </div>
</form>
<?= $this->endSection() ?>