<?php isset($site) or die(); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require '../_includes/meta.php'; ?>
  </head>
  <body>
    <div class="page">
      <?php require '../_includes/header.php'; ?>
      
      <h1 class="page--title">
        <?=$page->title?>
      </h1>

      <main class="page--content">
        <?php the_content(); ?>

        <?php foreach ($site->announcements as $announcement): ?>
          <?php  require '../_includes/announcement.php'; ?>
        <?php endforeach; ?>
      </main>

      <?php require '../_includes/footer.php'; ?>
    </div>
  </body>
</html>
