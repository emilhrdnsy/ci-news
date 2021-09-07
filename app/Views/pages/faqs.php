<?php echo $this->extend('layout/page_layout'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php foreach ($data_faqs as $faq) : ?>
        <h2 class="h2"><?= $faq['question'] ?></h2>
        <p><?= $faq['answer'] ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php echo $this->endSection(); ?>