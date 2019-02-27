<?php
require_once "./include.php";
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

$sql = "UPDATE products SET status = 0"." where id = ".$id;
//var_dump($sql);
$result = mysqli_query(connect(), $sql);
require_once "./product_list_sort.php";

?>
