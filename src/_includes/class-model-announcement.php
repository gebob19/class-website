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
      FOREIGN KEY (`author_username`) REFERENCES User(`username`)
    )");
  }

  public static function select() {
    return query("SELECT `id`,
    `title`,
    `content`,
    `author_username`,
    `created_at`,
    `updated_at`
    FROM `Announcement`");
  }

  public static function selectById($id) {
    return query("SELECT `title`,
      `content`,
      `author_username`,
      `created_at`,
      `updated_at`
      FROM `Announcement`
      WHERE `id` = ?", [
        'i',
        $id
      ]);
  }

  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `Announcement` (
      `title`,
      `content`,
      `author_username`,
      `created_at`,
      `updated_at`
      ) VALUES (
        ?,
        ?,
        ?,
        ?,
        ?
      )", [
        'sssss',
        $data->title,
        $data->content,
        $data->author_username,
        $now,
        $now
      ]);
  }
}
