<?php echo $this->extend('_partials/template'); ?>

<?php echo $this->section('content'); ?>
<ul>
  <?php foreach ($article as $articles) : ?>
    <li style="width: 20%;">
      <a href="/articles/show/<?= $articles['id']; ?>">
        <?= $articles['title'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>

<?php echo $this->endSection(); ?>