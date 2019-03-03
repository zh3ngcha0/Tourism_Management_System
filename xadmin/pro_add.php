<?php
 
#接收表单注册数据
$user = $_POST['user'];
$pwd = $_POST['pwd'];
 
#连接数据库
$db = new mysqli('localhost','root','toor','0104test');
 
#设置查询数据格式
$db->query("SET NAMES UTF8");
 
#编辑sql语句
$sql = "insert into t_user values (null,\"$user\",\"$pwd\",\"php小白\")";
 
#执行sql 语句
$result = $db->query($sql);
 
#判断是否注册成功并返回数据
if ($result) {
    echo "1";
}else{
    echo "0";
}
 
?>

