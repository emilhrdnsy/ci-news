<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Beritacoding</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>" />
</head>

<body>
  <?php echo $this->include('/admin/_partials/side-nav'); ?>

  <?php echo $this->renderSection('content'); ?>

  <footer class="footer">
    &copy; <?= Date('Y') ?> Beritacoding.com Version 1.0.0
  </footer>
</body>

</html>