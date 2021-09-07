  <?php echo $this->extend('layout/page_layout'); ?>

  <?php echo $this->section('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="" class="form">
          <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" class="form-control">
          </div>

          <div class="form-group mt-3">
            <label for="email">Message</label>
            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
          </div>

          <div class="form-group mt-3">
            <input type="submit" value="Kirim" class="btn btn-primary w-100">
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php echo $this->endSection(); ?>