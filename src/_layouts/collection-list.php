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
        <?=$content?>
        
        <div class="collection-list">
          <?php foreach ($site[$page->collection] as $list): ?>
            <a href="<?=$list->url?>" class="collection-list--item">
              <?=$list->title?>
            </a>
          <?php endforeach; ?>
        </div>
      </main>

      <?php include '../_includes/footer.php'; ?>
    </div>
  </body>
</html>
