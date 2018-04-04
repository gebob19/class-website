<?php
function debug() {
  $args = func_get_args();
  foreach ($args as $arg) {
    highlight_string("<? " . var_export($arg, true) . " ?>");
    echo '<br>';
  }
  echo '<br>';
}
