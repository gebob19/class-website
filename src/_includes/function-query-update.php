<?php
/**
 * @example
 * update('Users', (object) [
 *   'set' => [
 *     'username' => '',
 *   ],
 *   'set_types' => '',
 *   'where' => [
 *     '' => '',
 *   ],
 *   'where_types' => '',
 * ]);
 */
function query_update($table, $query) {
  $types = '';

  if (isset($query->set)) {
    $stmt_set = [];
    foreach ($set_columns as $column) {
      $stmt_set[] = "`$column` = ?";
    }
    $stmt_set = implode(', ', $stmt_set);
    $types .= $query->set_types;
  }
  
  if (isset($query->where)) {
    $stmt_where = [];
    foreach ($where_columns as $column) {
      $stmt_where[] = "`$column` = ?";
    }
    $stmt_where = implode(', ', $stmt_where);
    $types .= $query->where_types;
  }

  return query("UPDATE `$table` SET $stmt_set WHERE $stmt_where", array_merge(
    $types,
    isset($query->set) ? [ $set_values ] : [],
    isset($query->where) ? [ $where_values ] : []
  ));
}
