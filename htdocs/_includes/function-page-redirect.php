<?php
function page_redirect($page) {
  if (!is_page($page)) {
    header("Location: $page");
    return true;
  }
  return false;
}
