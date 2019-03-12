<?php

 
#接收表单注册数据
$L_proname = $_POST['L_proname'];
$L_imagename = $_POST['L_imagename'];
$L_protype = $_POST['L_protype'];
$L_subtype = $_POST['L_subtype'];
$L_getratio = $_POST['L_getratio'];
$L_reward = $_POST['L_reward'];
$L_comment = $_POST['L_comment'];
$L_trip = $_POST['L_trip'];

 
#连接数据库
$db = new mysqli('localhost','root','toor','tms');
 
#设置查询数据格式
$db->query("SET NAMES UTF8");
 
#编辑sql语句
$sql = "insert into products values (null,\"$L_proname\",\"$L_imagename\",\"$L_protype\",\"$L_subtype\",\"$L_getratio\",\"$L_reward\",\"$L_comment\",\"0\", \"$L_trip\")";

#var_dump($sql);
 
#执行sql 语句
$result = $db->query($sql);
 
#判断是否注册成功并返回数据
if ($result) {
    echo "1";
}else{
    echo "0";
}
 
?>

