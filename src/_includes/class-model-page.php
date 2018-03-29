<?php
class Page implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Page` (
      `path` varchar(255) unique,
      `title` TEXT,
      `content` TEXT, 
      PRIMARY KEY (`path`)
    )");
  }
}
