<?php function layout_collection_list() { ?>
  <?php global $site, $page; ?>
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
          
          <div class="collection-list">
            <?php foreach ($page->collection as $item): ?>
              <a href="<?=$item->path?>" class="collection-list--item">
                <?=$item->title?>
              </a>
            <?php endforeach; ?>
          </div>
        </main>

        <?php component_footer(); ?>
      </div>
    </body>
  </html>
<?php } ?>
