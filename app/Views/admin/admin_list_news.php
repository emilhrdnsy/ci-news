<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
<?php endif; ?>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if (isset($newses)) { ?>
      <?php $i = 1; ?>
      <?php foreach ($newses as $news) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td>
            <strong><?= $news['title'] ?></strong><br>
            <small class="text-muted"><?= $news['created_at'] ?></small>
          </td>
          <td>
            <?php if ($news['status'] === 'published') : ?>
              <small class="text-success"><?= $news['status'] ?></small>
            <?php else : ?>
              <small class="text-danger">[<?= $news['status'] ?>]</small>
            <?php endif ?>
          </td>
          <td>
            <a href="<?= base_url('admin/news/' . $news['id'] . '/preview') ?>" class="btn btn-sm btn-info" target="_blank">Preview</a>
            <a href="<?= base_url('admin/news/' . $news['id'] . '/edit') ?>" class="btn btn-sm btn-secondary">Edit</a>
            <!-- onclick="confirmToDelete(this) -->
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
      <?php endforeach ?>
    <?php } ?>
  </tbody>
</table>

<div class="modal fade" id="exampleModalCenter" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <form action="/admin/news/<?= $news['id']; ?>/preview" method="post">
          <?= csrf_field(); ?>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger"">Delete</button>
        </form>
        <!-- <a href=" #" role=" button" id="delete-button" class="btn btn-danger" style="color: white;">Delete</a> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
  function confirmToDelete(el) {
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
  }
</script>
<?= $this->endSection() ?>