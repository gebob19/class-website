<?php isset($site) or die(); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require '../_includes/meta.php' ?>
  </head>
  <body>
    <div class="page">
      <?php require '../_includes/header.php' ?>
      
      <h1 class="page--title">
        <?=$page->title?>
      </h1>

      <main class="page--content">
        <?php the_content() ?>

        <?php require '../_includes/attachments.php' ?>
      </main>

      <?php require '../_includes/footer.php' ?>
    </div>
  </body>
</html>
