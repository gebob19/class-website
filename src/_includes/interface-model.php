<?php
interface Model {
  public static function create_table();
  
  public static function select($where_columns, $where_types, $where_values);
  
  public static function insert($data);
  
  public static function update($set_columns, $set_types, $set_values, $where_columns, $where_types, $where_values);

  public static function delete($where_columns, $where_types, $where_values);
}
