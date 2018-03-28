<?php
/**
 * @example
 * query_insert('User', (object) [
 *   'values_types': 'sssss',
 *   'values' => [
 *     'username' => 'chehabom',
 *     'password' => '158dsjknh3859ayh5kjwhekf',
 *     'role' => 'student',
 *     'created_at' => '2018-03-27 12:00:00',
 *     'updated_at' => '2018-03-27 12:00:00'
 *   ]
 * ]);
 */
function query_insert($table, $query) {
  $stmt_columns = [];
  $stmt_values = [];
  foreach ($query->values as $column => $value) {
    $stmt_columns[] = "`$column`";
    $stmt_values[] = "?";
  }
  $stmt_columns = implode(', ', $stmt_columns);
  $stmt_values = implode(', ', $stmt_values);
  $types .= $query->set_types;
  debug($stmt_columns);
  debug($stmt_values);
  
  return query("INSERT INTO `$table` ($stmt_columns) VALUES ($stmt_values)", array_merge([
    $query->values_types,
    array_values($query->values)
  ]));
}
