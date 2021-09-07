<?php echo $this->extend('_partials/template'); ?>

<?php echo $this->section('content'); ?>
<article class="article">
  <h1 class="post-title"><?= $article['title'] ? $article['title'] : "No Title" ?></h1>
  <div class="post-meta">
    Published at <?= $article['created_at'] ?>
  </div>
  <div class="post-body">
    <?= $article['content'] ?>
  </div>
</article>
<?php echo $this->endSection(); ?>