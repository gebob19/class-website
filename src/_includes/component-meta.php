<?php function component_meta() { ?>
  <?php global $site, $page; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/index.css">
  <title><?=$page->title?> | <?=$site->title?></title>
  <meta name="description" content="<?=$site->description?>">
<?php } ?>
