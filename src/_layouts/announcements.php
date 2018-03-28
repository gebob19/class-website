<?php isset($site) or die(); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include '../_includes/meta.php'; ?>
  </head>
  <body>
    <div class="page">
      <?php include '../_includes/header.php'; ?>
      
      <h1 class="page--title">
        <?=$page->title?>
      </h1>

      <main class="page--content">
        <?php foreach ($site->announcements as $announcement): ?>
          <?php  include '../_includes/announcement.php'; ?>
        <?php endforeach; ?>
      </main>

      <?php include '../_includes/footer.php'; ?>
    </div>
  </body>
</html>
