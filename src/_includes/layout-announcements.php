<?php function layout_announcements() { ?>
  <?php global $site; ?>
  <!DOCTYPE html>
  <html>
    <head>
      <?php component_meta(); ?>
    </head>
    <body>
      <div class="page">
        <?php component_header(); ?>
        
        <h1 class="page--title">
          <?=$page->title?>
        </h1>

        <main class="page--content">
          <?php component_content(); ?>

          <?php foreach ($site->announcements as $announcement): ?>
            <?php component_announcement($announcement); ?>
          <?php endforeach; ?>
        </main>

        <?php component_footer(); ?>
      </div>
    </body>
  </html>
<?php } ?>
