<?php echo $this->extend('admin/_partials/template'); ?>

<?php echo $this->section('content'); ?>
<main class="main">
  <div class="content">
    <h1>List Artikel</h1>
    <div class="toolbar">
      <a href="#" class="button button-primary" role="button">+ Tulis Artikel</a>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th style="width: 15%;" class="txt-center">Status</th>
          <th style="width: 25%;" class="txt-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div>Hello World!</div>
            <div class="txt-grey"><small>12 Jan 2021<small></div>
          </td>
          <td class="txt-center txt-grey">Draft</td>
          <td>
            <div class="action">
              <a href="#" class="button button-small" role="button">View</a>
              <a href="#" class="button button-small" role="button">Edit</a>
              <a href="#" class="button button-small button-danger" role="button">Delete</a>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div>Hello World!</div>
            <div class="txt-grey"><small>12 Jan 2021<small></div>
          </td>
          <td class="txt-center txt-green">Published</td>
          <td>
            <div class="action">
              <a href="#" class="button button-small" role="button">View</a>
              <a href="#" class="button button-small" role="button">Edit</a>
              <a href="#" class="button button-small button-danger" role="button">Delete</a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
</main>
<?php echo $this->endSection(); ?>