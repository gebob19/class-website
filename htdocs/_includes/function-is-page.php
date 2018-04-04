<?php
function is_page($page) {
  return $page == strtok($_SERVER["REQUEST_URI"], '?');
}
