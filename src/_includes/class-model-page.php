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

  public static function selectByPath($path) {
    return query("SELECT `path`,
    `title`,
    `content`,
    FROM `Page`
    WHERE `path` = ?", [
      's',
      $path
    ]);
  }

  public static function insert($data) {
    return query("INSERT INTO `Page` (
      `path`,
      `title`,
      `content`,
      ) VALUES (
        ?,
        ?,
        ?
      )", [
        'sss',
        $data->path,
        $data->title,
        $data->content
      ]);
  }
}
