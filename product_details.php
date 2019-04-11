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



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>产品预定</title>
<link rel="stylesheet" href="css/css.css" type="text/css" />
<link rel="stylesheet" href="css/zzsc.css" type="text/css" />
<link type="text/css" href="css/flexslider.min.css" rel="stylesheet" />
<link type="text/css" href="css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/js.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
<link rel="stylesheet" type="text/css" href="./libs/layui/src/css/layui.css" media="all">
        <link rel="stylesheet" type="text/css" href="common/bootstrap/css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="common/global.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/personal.css" media="all">
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="./libs/layui/src/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>


<script type="text/javascript">

/* $(window).load(function() {
$('.flexslider').flexslider();
});

$(document).ready(function() {
$('.flexslider').hover(function() {
$('.flex-direction-nav li a.prev').css('display', 'block');
$('.flex-direction-nav li a.next').css('display', 'block');
}, function() {
$('.flex-direction-nav li a.prev').css('display', 'none');
$('.flex-direction-nav li a.next').css('display', 'none');
});

});*/

</script>
</head>



<body>

<!-------------------------  a_box s ---------------------->
<div class="a_box">


<!-------------------------  a_r s ---------------------->
<div class="a_r">

<div class="a_rt">
<div class="a_rt_title">产品预定<span>/ 当前用户: <?php echo $_SESSION['user'] ?> </span></div>
</div>

<div class="products_main">

<div class="products_maint">
<div class="products_maintl"><div class="products_maintll"><img src="./xadmin/upload/<?php echo htmlentities($result->pro_imagename);?>" width="80" height="234"/></div></div>
<div class="products_maintr">
<div class="products_maintrt">产品名称: <?php echo htmlentities($result->pro_name);?></div>
<div class="products_maintrd"><table width="328" border="1">
  <tr>
    <td>产品类型 : <?php echo htmlentities($result->type);?></td>
  </tr>
  <tr>
    <td>产品二级类型:</b> <?php echo htmlentities($result->subtype);?></td>
  </tr>
  <tr>
    <td>格：￥<span style="color:#a10033; font-size:18px;"><?php echo htmlentities($result->reward);?></span></td>
  </tr>
   <tr>
    <td>产品介绍</b> <?php echo htmlentities($result->comment);?>DOC</td>
  </tr>
</table>
</div>
</div>
</div>

<div class="products_maind">
<div class="products_maindt"><div class="products_maindt_title">>>行程</div></div>
<div class="products_maindd">
<?php echo htmlentities($result->trip);?>
</div>
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

                                <hr class="layui-bg-blue">
                                <div class="layui-form-item">
                                    <label for="L_order" class="layui-form-label">
                                    </label>
                                        <button  class="layui-btn" lay-filter="order" lay-submit="">
                                          立即预定
                                        </button>
                                </div>

<div class="clear"></div>
</div>
<!-------------------------  a_r e ---------------------->


</div>
<!-------------------------  a_box e ---------------------->



<div class="H20"></div>
<!-------------------------  footer s ---------------------->
<div class="footer">
<div class="footer_main">
<div class="H20"></div>
Copyright © 贵州景源旅游  版权所有<br/>
  电子邮箱：zh3ngcha0@gmail.com<br/>
公司地址：贵州省安顺市平坝区
</div>
</div>
<!-------------------------  footer e ---------------------->


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
 
      layui.use(['form','jquery','layer'], function () {
        var form   = layui.form;
        var $      = layui.jquery;
        var layer  = layui.layer;
 
        //
        //添加表单监听事件,提交注册信息
        form.on('submit(order)', function() {
            $.ajax({
                url:'order_add.php',
                type:'post',
                dataType:'text',
                data:{
                    L_proid:$_REQUEST['id'],
                    L_reward:$('#L_reward').val(),
                    L_username:$_SESSION['user'],
                    L_numbers:$('#L_numbers').vali(),
                    L_datestart:$('#start').vali(),
                    L_dateend:$('#end').vali(),
                },
                success:function(data){
                    if (data == 1) {
                        layer.alert("预定成功", {icon: 6},function () {
                            // 获得frame索引
                            var index = parent.layer.getFrameIndex(window.name);
                            //关闭当前frame
                            parent.layer.close(index);
                        });


                    }else {
                        layer.msg('预定失败');
                    }
                }
            })
            //防止页面跳转
            return false;
        });
 
    });

</script>

</body>

</html>
