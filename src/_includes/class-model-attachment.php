<?php
class Attachment implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Attachment` (
      `page_id` varchar(255),
      `url` varchar(255),
      CONSTRAINT PK_Attachment PRIMARY KEY (`page_id`,`url`))");
  }

}
