<?php
class Announcement implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Announcement` (
      `id` bigint auto_increment,
      `title` TEXT NOT NULL,
      `content` TEXT NOT NULL,
      `author_username` varchar(255) NOT NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      PRIMARY KEY (`id`),
      FOREIGN KEY ('author_username') REFERENCES User(`username`)
    )");
  }
}
