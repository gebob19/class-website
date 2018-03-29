<?php
/**
 * @example
 * query('SELECT username, password FROM Users WHERE role = ? OR role = ?', [
 *   'ss',
 *   'student',
 *   'ta'
 * ]);
 */
function query($query, $params = []) {
  global $db;
  
  if (($stmt = $db->prepare($query)) == FALSE) {
    throw new DatabaseException($db->error);
  }
  
  if (count($params) >= 2) {
    call_user_func_array([$stmt, 'bind_param'], array_references($params));
  }
    
  if ($stmt->execute() == FALSE) {
    throw new DatabaseException($stmt->error);
  }

  $type = strtoupper(explode(' ', $query)[0]);
  switch ($type) {
    case 'SELECT':
      $meta = $stmt->result_metadata();
      $fields = [];
      $row = [];
      while ($field = $meta->fetch_field()) {
        $fields[] = &$row[$field->name]; 
      }

      call_user_func_array([$stmt, 'bind_result'], array_references($fields));

      $result = [];
      while ($stmt->fetch()) {
        $c = [];
        foreach ($fields as $field => $val) {
          $c[$field] = $val;
        }
        $result[] = $c;
      }
      break;
      
    case 'INSERT':
    case 'UPDATE':
    case 'DELETE':
      $result = $stmt->affected_rows;
      break;

    default:
      $result = TRUE;
  }

  $stmt->close();

  return $result;
}

function array_references($array) {
  $references = [];
  foreach( $array as $key => $value) {
    $references[$key] = &$array[$key];
  }
  return $references;
}
