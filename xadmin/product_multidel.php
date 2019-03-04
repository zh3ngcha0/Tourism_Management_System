<?php
require_once "./include.php";
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

#var_dump($id);

$sql = "DELETE FROM products "." where id in (".$id.")";
var_dump($sql);
$result = mysqli_query(connect(), $sql);
require_once "./product_list_sort.php";

?>
