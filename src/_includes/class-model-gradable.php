<?php
class Gradable implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Gradable` (
      `id` varchar(255) NOT NULL UNIQUE,
      `weight` numeric NOT NULL,
      `createdAt` datetime not null,
      `updatedAt` datetime not null,
      PRIMARY KEY (id)
    )");
  }
}
