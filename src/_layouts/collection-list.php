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
        
        <div class="collection-list">
          <?php foreach ($site[$page->collection] as $list): ?>
            <a href="<?=$list->url?>" class="collection-list--item">
              <?=$list->title?>
            </a>
          <?php endforeach; ?>
        </div>
      </main>

      <?php require '../_includes/footer.php'; ?>
    </div>
  </body>
</html>
