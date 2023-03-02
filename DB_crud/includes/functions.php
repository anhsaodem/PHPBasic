<?php
function show_data($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
function query($sql, $data = [], $isStatus = true)
{
    global $conn;
    $statement = null;
    $status = null;
    try {
        $statement = $conn->prepare($sql);
        $status = $statement->execute($data);
        if ($isStatus) {
            return $status;
        } else {
            return $statement;
        }
    } catch (PDOException $e) {
        // echo $e->getMessage();
        require_once 'error.php';
        die();
    }
}


function create($table, $attributes = [])
{
    // global $conn;
    if (!empty($attributes)) {
        $sql = "INSERT INTO $table(" . implode(',', array_keys($attributes)) . ") VALUES (:" . implode(', :', array_keys($attributes)) . ")";
        // $statement = $conn->prepare($sql);
        // $status = $statement->execute($attributes);
        $status = query($sql, $attributes);
        return $status;
    } else {
        return false;
    }
}
/**
 * Function get id of last created row(data)
 * return id|| false
 */

function createGetId($table, $attributes = [])
{
    global $conn;
    if (!empty($attributes)) {
        create($table, $attributes);
        return $conn->lastInsertId();
    }
    return false;
}
/**
 * Function update data with condition
 * return 
 */
function update($table, $attributes = [], $condition)
{
    //$sql = "UPDATE groups SET name=:name WHERE id=:id";
    global $conn;
    if (!empty($attributes)) {
        $key = array_keys($attributes);
        $update = "";
        foreach ($key as $key) {
            $update .= $key . '=:' . $key . ', ';
        }
        $update = rtrim($update, ", ");
        $sql = "UPDATE {$table} SET " . $update . " WHERE " . $condition;
        // $statement = $conn->prepare($sql);
        // $status = $statement->execute($attributes);
        $status = query($sql, $attributes);
        return $status;
    } else {
        return false;
    }
}
/**
 * Function delete
 */
function delete($table, $condition)
{
    // global $conn;
    $sql = "DELETE FROM {$table} WHERE " . $condition;
    // $statement = $conn->prepare($sql);
    $status = query($sql);
    echo "Xóa thành công";
}

/**
 * Function get list data used binding data
 */
function get($sql, $data = [])
{
    global $conn;
    $statement = query($sql, $data, false);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result);
    return $result;
}
/**
 * Function get one data 
 */

function first($sql, $data = [])
{
    global $conn;
    $statement = query($sql, $data, false);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}

/**
 * Function return number of row  data
 */
function countRow($sql, $data = [])
{
    global $conn;
    $statement = query($sql, $data, false);
    return $statement->rowCount();
}

/**
 * Get date format
 */

 function getDateFormat($date,$format){
    $dateObj = date_create($date);
    return date_format($dateObj,$format);
 }

 /**
  * Redirect
  */
  function redirect($to){
    ob_start();
    header("Location: ?action=".$to);
  }