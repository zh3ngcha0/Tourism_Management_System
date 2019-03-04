<?php
require_once "./include.php";
$page = isset($_REQUEST['page']) ? (int)$_REQUEST['page'] : 1;
$sql = "SELECT * FROM `products`";
$totalRows = getResultNum(connect(), $sql);
$pageSize = 8;
$totalPage = ceil($totalRows / $pageSize);
if ($page < 1 || $page == null || !is_numeric($page)) {
    $page = 1;
}
$offset = ($page - 1) * $pageSize;
$sql = "SELECT `id`, `pro_name`, `pro_imagename`, `type`, `subtype`, `getratio`, `reward`, `comment`, `status` FROM `products` ORDER BY `id` LIMIT {$offset},{$pageSize}";
$rows = fetchAll(connect(), $sql);

if (!$rows) {
    #alertMessage("没有任何产品，请先添加！", "product_add.html");
    echo "<script>alert('没有任何产品，请先添加')</script>";
}

?>



<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>景源后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="layui-anim layui-anim-up">
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">演示</a>
        <a>
          <cite>导航元素</cite></a>
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body">
      <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
          <input class="layui-input" placeholder="开始日" name="start" id="start">
          <input class="layui-input" placeholder="截止日" name="end" id="end">
          <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
      </div>
      <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
        <button class="layui-btn" onclick="x_admin_show('添加用户','./product_add.html',600,400)"><i class="layui-icon"></i>添加产品</button>
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
      </xblock>
      <table class="layui-table">
        <thead>
          <tr>
            <th>
              <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>
            <th>ID</th>
            <th>产品名</th>
            <th>图片</th>
            <th>大类</th>
            <th>第二大类</th>
            <th>返点比例</th>
            <th>人头费</th>
            <th>描述</th>
            <th>状态</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>

            <?php foreach ($rows as $row): ?>
               <tr>
                   <td>
                       <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id=<?= $row['id'] ?>><i class="layui-icon">&#xe605;</i></div>
                   </td>
                   <td><?= $row['id'] ?></td>
                   <td><?= $row['pro_name'] ?></td>
                   <td><?= $row['pro_imagename'] ?></td>
                   <td><?= $row['type'] ?></td>
                   <td><?= $row['subtype'] ?></td>
                   <td><?= $row['getratio'] ?></td>
                   <td><?= $row['reward'] ?></td>
                   <td><?= $row['comment'] ?></td>
                   <!-- <td><?= $row['status'] ?></td> -->
                   
                   <?php if ($row['status'] > "0"): ?>
                       <td class="td-status"> <span class="layui-btn layui-btn-normal layui-btn-mini">已审批</span></td>
                   <?php else: ?>
                       <td class="td-status"> <span class="layui-btn layui-btn-disabled layui-btn-mini">未审批</span></td>
                   <?php endif; ?>
                   
                   <td class="td-manage">

                       <?php if ($row['status'] > "0"): ?>
                           
                           <a onclick="member_stop(this)" pro_id = <?= $row['id'] ?> href="javascript:;"  title="下架">
                               <i class="layui-icon">&#xe601;</i>
                           </a>
                       <?php else: ?>
                           <a onclick="member_start(this)" pro_id = <?= $row['id'] ?> href="javascript:;"  title="审批">
                               <i class="layui-icon">&#xe601;</i>
                           </a>
                       <?php endif; ?>

                       <a onclick="x_admin_show('修改产品','member-password.html',600,400)" title="修改产品" href="javascript:;">
                           <i class="layui-icon">&#xe631;</i>
                       </a>
                       <a title="删除" onclick="product_del(this)" pro_id = <?= $row['id'] ?> href="javascript:;">
                           <i class="layui-icon">&#xe640;</i>
                       </a>
                   </td>
               </tr>
            <?php endforeach; ?>
            <?php if ($totalRows > $pageSize): ?>
            <tr>
                <td colspan="4"><?php echo showPage($page, $totalPage) ?></td>
            </tr>
            <?php endif; ?>

        </tbody>
      </table>
      <div class="page">
        <div>
          <a class="prev" href="">&lt;&lt;</a>
          <a class="num" href="">1</a>
          <span class="current">2</span>
          <a class="num" href="">3</a>
          <a class="num" href="">489</a>
          <a class="next" href="">&gt;&gt;</a>
        </div>
      </div>

    </div>
    <script>
      layui.use('laydate', function(){
        var laydate = layui.laydate;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });

       /*用户-停用*/

      function member_start(obj,id){
          layer.confirm('确认要审批吗？',function(index){

                $(obj).attr('title','下架')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-normal').html('已审批');
                layer.msg('已审批!',{icon: 5,time:1000});
              
                window.location = "active_pro_status.php?id=" + $(obj).attr('pro_id');
              
          });
      }

      function member_stop(obj,id){
          layer.confirm('确认要下架吗？',function(index){

                //发异步把用户状态进行更改
                $(obj).attr('title','审批')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已下架');
                layer.msg('已下架!',{icon: 5,time:1000});

                window.location = "dactive_pro_status.php?id=" + $(obj).attr('pro_id');

              
          });
      }

      /*用户-删除*/
      function product_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
              //发异步删除数据
              window.location = "product_del.php?id=" + $(obj).attr('pro_id');
              $(obj).parents("tr").remove();
              layer.msg('已删除!',{icon:1,time:1000});
          });
      }



      function delAll (argument) {

        var data = tableCheck.getData();
  
        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            window.location = "product_multidel.php?id=" + data;
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>
