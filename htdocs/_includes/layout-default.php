<?php function layout_default() { ?>
  <?php global $page; ?>
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
        </main>

        <?php component_footer(); ?>
      </div>
    </body>
  </html>
<?php } ?>
