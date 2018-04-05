<?php function component_attachments($attachments = []) { ?>
  <p>Attached Files:</p>

  <ul class="attachments">
    <?php foreach ($attachments as $attachment): ?>
      <li class="attachments--item">
        <a href="<?=$attachment?>" target="_blank">
          <img class="inline-icon"
            src="<?=BASEURL?>img/ic_attachment_4d4d4d_18px.svg"
            alt="">
          <?php
            $tmp = explode('/', $attachment);
          ?>
          <?=end($tmp)?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
<?php } ?>
