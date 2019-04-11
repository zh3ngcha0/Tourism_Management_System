<?php
include('includes/config.php');
session_start();
if(empty($_SESSION['user'])){
    echo "<script> {window.alert('您还没有登录,请先登录');location.href='./user_login/login.html'} </script>";
}



$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

//echo $id;

$sql = "SELECT * FROM products "." where id = ".$id;

                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                        foreach($results as $result)
                        {       

                        }
                     } 
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品预定</title>
	<meta name="renderer" content="webkit">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<meta name="apple-mobile-web-app-status-bar-style" content="black">	
	<meta name="apple-mobile-web-app-capable" content="yes">	
	<meta name="format-detection" content="telephone=no">	
	<link rel="stylesheet" type="text/css" href="common/layui/css/layui.css" media="all">
	<link rel="stylesheet" type="text/css" href="common/bootstrap/css/bootstrap.css" media="all">
	<link rel="stylesheet" type="text/css" href="common/global.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/personal.css" media="all">
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="./libs/layui/src/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>

</head>
<body>


<section class="layui-larry-box">
	<div class="larry-personal">
		<header class="larry-personal-tit">
			<span>产品预定 | 当前用户: <?php echo $_SESSION['user'] ?> </span>
		</header><!-- /header -->
		<div class="larry-personal-body clearfix">
			<form class="layui-form col-lg-5" action="" method="post">
				<div class="layui-form-item">
                                    <div class="rom-btm">
                                        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                            <img src="./xadmin/upload/<?php echo htmlentities($result->pro_imagename);?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                            <h4>产品名称: <?php echo htmlentities($result->pro_name);?></h4>
                                            <h6>产品类型 : <?php echo htmlentities($result->type);?></h6>
                                            <p><b>产品二级类型:</b> <?php echo htmlentities($result->subtype);?></p>
                                            <p><b>价格:</b> <?php echo htmlentities($result->reward);?></p>
                                            <p><b>产品介绍</b> <?php echo htmlentities($result->comment);?></p>
                                            <p><b>行程</b> <?php echo htmlentities($result->trip);?></p>
                                        </div>
                                       <div class="clearfix"></div>
                                       </div>

                                    </div>
                                <div class="layui-form-item">
                                    <label for="L_subtype" class="layui-form-label">
                                        <span class="x-red">*</span>人数
                                    </label>
                                    <div class="layui-input-inline">
                                        <input type="text" id="L_numbers" name="numbers" required="" lay-verify="numbers"
                                            autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
          <input class="layui-input" placeholder="开始日" name="start" id="start">
          <input class="layui-input" placeholder="截止日" name="end" id="end">
        </form>
      </div>
                                </div>
                                 
				<div class="layui-form-item">
					<div class="layui-input-block">
						<button onclick="member_stop(this)" pro_id = <?= $row['id'] ?> href="javascript:;" 
                                                class="layui-btn" lay-submit="" lay-filter="demo1">立即预定</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

    

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

</script>




































</body>
</html>
