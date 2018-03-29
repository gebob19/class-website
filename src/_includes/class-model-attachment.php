<?php
class Attachment implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Attachment` (
      `page_path` varchar(255) NOT NULL,
      `url` varchar(255) NOT NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      CONSTRAINT PK_Attachment PRIMARY KEY (`page_path`,`url`))");
  }

  public static function selectByPagePath($page_path) {
    return query("SELECT `page_path`,
      `url`,
      `created_at`,
      `updated_at`
      FROM `Attachment`
      WHERE `page_path` = ?
    ", [
      's',
      $page_path,
    ]);
  }

  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `Attachment` (
      `page_path`,
      `url`,
      `created_at`,
      `updated_at`
    ) VALUES (
      ?,
      ?,
      ?,
      ?
    )", [
      'ssss',
      $data->page_path,
      $data->url,
      $now,
      $now,
    ]);
  }

  public static function updateByPagePathAndUrl($page_path, $url, $types, $set) {
    $now = now();
    
    $stmt_set = [];
    $stmt_values = [];
    foreach ($set as $column => $value) {
      $stmt_set[] = "`$column` = ?";
      $stmt_values[] = $value;
    }

    $types .= 's';
    $stmt_set[] = "`updated_at` = ?";
    $stmt_values[] = $now;

    $stmt_set = implode(', ', $stmt_set);
    $types .= 'ss';
    
    return query("UPDATE `Attachment` SET $stmt_set WHERE `page_path` = ? AND `url` = ?", array_merge(
      [$types],
      $stmt_values,
      [$page_path, $url]
    ));
  }

  public static function deleteByPagePathAndUrl($page_path, $url) {
    return query("DELETE FROM `Attachment` WHERE `page_path` = ? AND `url` = ?", [
      'ss',
      $page_path,
      $url,
    ]);
  }
}
