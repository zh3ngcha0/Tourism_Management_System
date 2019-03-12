<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>贵州景源旅游</title>
    <meta name="description" content="贵州景源旅游" /> 
    <meta name="keywords" content="州景源旅游" />
    <meta name="author" content="js代码" />
    <meta name="Copyright" content="js代码" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="./libs/layui/src/css/layui.css">    
    <script type="text/javascript" src="./libs/layui/src/layui.js" charset="utf-8"></script>
    <script type="text/javascript">
function stops(){
   return false;
}
document.oncontextmenu=stops;
</script>
</head>
<body>
<!--headerTop-->
<div class="header-top">
    <div class="container clear">
        <div class="fl">
            <ul class="clear">
                <li class="fl navbar-nav" style="padding: 0"><a href="javascript:">贵州景源旅游</a> <span>|</span></li>
                <li class="fl navbar-nav"><a href="user_login/register.html">用户注册</a><span>|</span></li>
                <li class="fl navbar-nav"><a href="user_login/login.html">用户登录</a><span>|</span></li>
                <li class="fl navbar-nav"><a href="javascript:">供销商注册</a><span>|</span></li>
                <li class="fl navbar-nav"><a href="javascript:">供销商登录</a><span>|</span></li>
                <li class="fl navbar-nav"><a href="xadmin/login.php">管理员登录</a><span>|</span></li>
                <li class="fl navbar-nav"><a href="javascript:">当前用户 <?php echo $_SESSION['user'] ?> </a><span>|</span></li>
                <li class="fl navbar-nav"><a href="./user_login/logout.php">退出</a><span>|</span></li>
            </ul>
        </div>
    </div>
</div>

<!--navbar-->
<div class="header-navbar container">
        <ul class="clear nav-item">
            <li class="fl "><a class="link" href="javascript:"><span class="text">首页</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">周边</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">国内</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">国际</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">出境</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">游轮</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">自驾游</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">保险</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">热卖品</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">签证</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">小包团</span></a></li>
            <li class="fl"><a class="link" href="javascript:"><span class="text">旅游攻略</span></a></li>
         </ul>
</div>

<!--category slider-->
<div class="container">
    <div class="slider ">
        <ul class='slider-main'>
            <li><a href="javascript:"><img src="img/slider/5.jpg" alt=""/></a></li>
            <li><a href="javascript:"><img src="img/slider/6.jpg" alt=""/></a></li>
            <li><a href="javascript:"><img src="img/slider/7.jpg" alt=""/></a></li>
            <li><a href="javascript:"><img src="img/slider/8.jpg" alt=""/></a></li>
            <li><a href="javascript:"><img src="img/slider/9.jpg" alt=""/></a></li>
        </ul>
        <ul class='index'>
            <li class='active'></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <a class='btn pre' href="javascript:"></a>
        <a class='btn next' href="javascript:"></a>
        <div class="category">
            <ul id="categoryList" class="category-list clear">
                
                    <li class="category-item">
                    <a class="title" href="javascript:">周边旅游<span class="iconfont">&#xe63f;</span></a>
                    <div class="children clear children-col-2" style="display: none;">
                        <ul class="children-list children-list-col children-list-col-1">
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">贵阳</span></a>
                            </li>
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">安顺</span></a>
                            </li>
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">遵义</span></a>
                            </li>
                        </ul>
                        <ul class="children-list children-list-col ">
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">遵义</span></a>
                            </li>
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">遵义</span></a>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="category-item">
                    <a class="title" href="javascript:">国内旅游<span class="iconfont">&#xe63f;</span></a>
                    <div class="children clear children-col" style="display: none;">
                        <ul class="children-list children-list-col">
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">北京</span></a>
                            </li>
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">上海</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="category-item">
                    <a class="title" href="javascript:">出境旅游<span class="iconfont">&#xe63f;</span></a>
                    <div class="children clear children-col-3" style="display: none;">
                        <ul class="children-list children-list-col children-list-col-1">
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">美国</span></a>
                            </li>
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">日本</span></a>
                            </li>
                        </ul>
                        <ul class="children-list children-list-col children-list-col-2">
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">泰国</span></a>
                            </li>
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">新加坡</span></a>
                            </li>
                        </ul>
                        <ul class="children-list children-list-col children-list-col-3">
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">泰国</span></a>
                            </li>
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">新加坡</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="category-item">
                    <a class="title" href="javascript:">单项服务<span class="iconfont">&#xe63f;</span></a>
                    <div class="children clear children-col-2" style="display: none;">
                        <ul class="children-list children-list-col children-list-col-1">
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">高铁</span></a>
                            </li>
                            <li class="star-goods">
                                <a class="link" href="javascript:"><span class="text">飞机</span></a>
                            </li>
                              
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--推荐产品-->
<div class="container">
    <div class="start-product">
        <div class="box-hd">
            <h2 class="title">推荐旅游线路</h2>
            <div class="arrow">
                <a class=" arrow-r" href="javascript:"><i class="iconfont">&#xe649;</i></a>
                <a class="arrow-l" href="javascript:"><i class="iconfont">&#xe63f;</i></a>
            </div>
        </div>
        <div class="xm-carousel-wrapper" style="height: 340px; overflow:hidden;">
            <ul class="main-banner" style="left:0">
                <?php $sql = "SELECT * from products limit 0,5";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                        foreach($results as $result)
                        {       ?>
                            <li class="rainbow-item-1">
                                <a class="thumb" href="javascript:">
                                    <img src="./xadmin/upload/<?php echo htmlentities($result->pro_imagename);?>" alt="推荐线路">
                                </a>
                                <h3><a href="javascript:"><?php echo htmlentities($result->pro_name);?></a></h3>
                                <p class="desc"><?php echo htmlentities($result->comment);?></p>
                                <p class="price"><?php echo htmlentities($result->reward);?>元起</p>
                                <button onclick="product_book(this)" pro_id = <?php echo htmlentities($result->id);?>  href="javascript:;" class="layui-btn">点击预定</button>
                            </li>

                       <?php }} ?>
            </ul>
            <ul class="main-banner">
                <?php $sql = "SELECT * from products limit 5,10";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                        foreach($results as $result)
                        {       ?>
                            <li class="rainbow-item-1">
                                <a class="thumb" href="javascript:">
                                    <img src="./xadmin/upload/<?php echo htmlentities($result->pro_imagename);?>" alt="推荐线路">
                                </a>
                                <h3><a href="javascript:"><?php echo htmlentities($result->pro_name);?></a></h3>
                                <p class="desc"><?php echo htmlentities($result->comment);?></p>
                                <p class="price"><?php echo htmlentities($result->reward);?>元起</p>
                            </li>

                       <?php }} ?>
            </ul>
        </div>
    </div>
</div>
<!--main-home-->
<div class="main-home">
    <div class="container ">
        <!--周边旅游-->
        <div class="home-brick-row-box home-brick-box">
            <div class="box-hd">
                <h2 class="title">周边旅游</h2>
                <div class="more ">
                    <a class="more-link" href="javascript:">
                        查看全部
                        <i class="iconfont rt">&#xe63f;</i>
                    </a>
                </div>
            </div>
            <div class="box-wrapper">
                <div class="box-lf">
                    <ul>
                        <li>
                            <a href="javascript:">
                                <img src="img/38e26bb4-bc07-424f-aa3d-540f2c80e073.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="box-rt">
                    <ul class="clear">
                        <li class="box-pro">
                            <a href="javascript:"><img src="img/p3.png" alt=""></a>
                            <h3 class="title"><a href="javascript:">旅游产品名称</a></h3>
                            <p class="desc">产品描述</p>
                            <p class="price">999元</p>
                        </li>
                        <li class="box-pro">
                            <a href="javascript:"><img src="img/p3.png" alt=""></a>
                            <h3 class="title"><a href="javascript:">旅游产品名称</a></h3>
                            <p class="desc">产品描述</p>
                            <p class="price">1999元</p>
                        </li>
                        <li class="box-pro">
                            <a href="javascript:"><img src="img/p3.png" alt=""></a>
                            <h3 class="title"><a href="javascript:">游产品名称</a></h3>
                            <p class="desc">产品描述</p>
                            <p class="price">199元</p>
                        </li>
                        <li class="box-pro">
                            <a href="javascript:"><img src="img/p3.png" alt=""></a>
                            <h3 class="title"><a href="javascript:">旅游产品名称</a></h3>
                            <p class="desc">品描述</p>
                            <p class="price">1999元</p>
                            <div class="flag flag-new">新品</div>
                        </li>
                        <li class="box-pro">
                            <a href="javascript:"><img src="img/p3.png" alt=""></a>
                            <h3 class="title"><a href="javascript:">游产品名称</a></h3>
                            <p class="desc">描述</p>
                            <p class="price">199元</p>
                        </li>
                        <li class="box-pro">
                            <a href="javascript:"><img src="img/p3.png" alt=""></a>
                            <h3 class="title"><a href="javascript:">产品名称</a></h3>
                            <p class="desc">描述</p>
                            <p class="price">1699元</p>
                        </li>
                        <li class="box-pro">
                            <a href="javascript:"><img src="img/p3.png" alt=""></a>
                            <h3 class="title"><a href="javascript:">产品名称</a></h3>
                            <p class="desc"></p>
                            <p class="price">179元
                                <del><span class="num">199</span>元</del>
                            </p>
                            <div class="flag flag-saleoff">享9折</div>
                        </li>
                        <li class="box-pro">
                            <a href="javascript:"><img src="img/p3.png" alt=""></a>
                            <h3 class="title"><a href="javascript:">产品名称</a></h3>
                            <p class="desc">描述</p>
                            <p class="price">399元</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--国内旅游-->
        <div class="home-brick-row-2-box home-brick-box-1">
            <div class="slider-banner">
                <div class="box-hd">
                    <h2 class="title">国内旅游</h2>
                    <div class="arrow">
                        <a class=" arrow-r-1" href="javascript:"><i class="iconfont">&#xe649;</i></a>
                        <a class="arrow-l-1" href="javascript:"><i class="iconfont">&#xe63f;</i></a>
                    </div>
                </div>
                <div class="xm-carousel-wrapper-1 clear">
                    <ul class="xm-carousel-list clear" style="left:0;">
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:">北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">4999元</dd>
                                <dd class="xm-recommend-tips"> 5290人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="北京一日游">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:">北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">79元</dd>
                                <dd class="xm-recommend-tips"> 1.7万人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">129元</dd>
                                <dd class="xm-recommend-tips"> 187人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">5999元</dd>
                                <dd class="xm-recommend-tips"> 5270人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">799元</dd>
                                <dd class="xm-recommend-tips"> 472人好评</dd>
                            </dl>
                        </li>
                    </ul>
                    <ul class="xm-carousel-list clear">
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">399元</dd>
                                <dd class="xm-recommend-tips"> 5290人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">349元</dd>
                                <dd class="xm-recommend-tips"> 1.6万人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">99元</dd>
                                <dd class="xm-recommend-tips"> 187人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">199元</dd>
                                <dd class="xm-recommend-tips"> 1204人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                       <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">2999元</dd>
                                <dd class="xm-recommend-tips"> 697人好评</dd>
                            </dl>
                        </li>
                    </ul>
                    <ul class="xm-carousel-list clear">
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                       <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:">北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">4999元</dd>
                                <dd class="xm-recommend-tips"> 5290人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:">北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">79元</dd>
                                <dd class="xm-recommend-tips"> 1.7万人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">129元</dd>
                                <dd class="xm-recommend-tips"> 187人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">5999元</dd>
                                <dd class="xm-recommend-tips"> 5270人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">799元</dd>
                                <dd class="xm-recommend-tips"> 472人好评</dd>
                            </dl>
                        </li>
                    </ul>
                    <ul class="xm-carousel-list clear">
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">399元</dd>
                                <dd class="xm-recommend-tips"> 5290人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">349元</dd>
                                <dd class="xm-recommend-tips"> 1.6万人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:">北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">99元</dd>
                                <dd class="xm-recommend-tips"> 187人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">199元</dd>
                                <dd class="xm-recommend-tips"> 1204人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">2999元</dd>
                                <dd class="xm-recommend-tips"> 697人好评</dd>
                            </dl>
                        </li>
                    </ul>
                    <ul class="xm-carousel-list clear">
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:">北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">4999元</dd>
                                <dd class="xm-recommend-tips"> 5290人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:">北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">79元</dd>
                                <dd class="xm-recommend-tips"> 1.7万人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                        <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">129元</dd>
                                <dd class="xm-recommend-tips"> 187人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                       <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">5999元</dd>
                                <dd class="xm-recommend-tips"> 5270人好评</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <a href="javascript:">
                                       <img src="img/p4.png" alt="">
                                    </a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="javascript:"> 北京一日游 </a>
                                </dd>
                                <dd class="xm-recommend-price">799元</dd>
                                <dd class="xm-recommend-tips"> 472人好评</dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--视频-->
        <div class="home-brick-row-5-box home-brick-box-1">
            <div class="video">
                <div class="box-hd">
                    <h2 class="title">旅游视频</h2>
                    <div class="more ">
                        <a class="more-link" href="javascript:">
                            查看全部
                            <i class="iconfont rt">&#xe63f;</i>
                        </a>
                    </div>
                </div>
                <div class="box-bd">
                    <ul class="video-list clear">
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a href="javascript:">
                                    <img src="img/p6.png" alt="">
                                    <span class="play">
                                            <img src="img/play.png" alt="">
                                        </span>
                                </a>
                            </div>
                            <h3 class="title"><a href="javascript:">旅游视频</a></h3>
                            <p class="desc">World Order星机械人受邀访问地球</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a href="javascript:">
                                    <img src="img/p6.png" alt="">
                                    <span class="play">
                                            <img src="img/play.png" alt="">
                                        </span>
                                </a>
                            </div>
                            <h3 class="title"><a href="javascript:">旅游视频</a></h3>
                            <p class="desc">旅游视频</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a href="javascript:">
                                    <img src="img/p6.png" alt="">
                                    <span class="play">
                                            <img src="img/play.png" alt="">
                                        </span>
                                </a>
                            </div>
                            <h3 class="title"><a href="javascript:">一面科技，一面艺术</a></h3>
                            <p class="desc">梁朝伟讲述双面人生</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a href="javascript:">
                                    <img src="img/p6.png" alt="">
                                    <span class="play">
                                            <img src="img/play.png" alt="">
                                        </span>
                                </a>
                            </div>
                            <h3 class="title"><a href="javascript:">旅游视频</a></h3>
                            <p class="desc">旅游视频</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--视频播放-->
<div class="modal">
    <div  class="modal-video " >
        <div class="modal-hd">
            <h3 class="title">旅游视频11</h3>
            <a class="close" href="javascript:">&times;</a>
        </div>
        <div class="modal-bd">
            <video src="http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v" controls style="display: block;"></video>
            <video src="http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v" controls ></video>
            <video src="http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v" controls ></video>
            <video src="http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v" controls ></video>
        </div>
    </div>
</div>
<!--footer-->
<div class="footer">
 </div>
</div>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/index.js"></script>


<script>
      layui.use('layer', function(){
          var layer = layui.layer;
      }); 


      function product_book(obj,id){
                 
                window.location = "product_buy.php?id=" + $(obj).attr('pro_id');

              
      }

</script>



































</body>
</html>
