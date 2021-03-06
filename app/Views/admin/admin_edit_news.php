<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<form action="/admin/news/<?= $news['id'] ?>/update" method="post" id="text-editor">
  <?= csrf_field(); ?>
  <input type="hidden" name="slug" value="<?= $news['slug']; ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" placeholder="News title" autofocus value="<?= old('title') ? old('title') : $news['title'] ?>">
    <div class="invalid-feedback">
      <?= $validation->getError('title'); ?>
    </div>
  </div>
  <div class="form-group">
    <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Write a great news!"><?= old('content') ? old('content') : $news['content'] ?></textarea>
  </div>
  <div class="form-group">
    <button type="submit" name="status" value="published" class="btn btn-primary">Publish Update</button>
    <button type=" submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
  </div>
</form>
<?= $this->endSection() ?>