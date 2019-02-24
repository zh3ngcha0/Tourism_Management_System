<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style>
        *{margin:0;padding:0;}
        #leftMenu ul{width:100px;position:absolute;background:#DADADA;list-style:none;}
        #leftMenu li{width:100px;position: relative;}
        #leftMenu li>ul{left: 100px;top: 0;}
        #leftMenu li>ul{left: 100px;top: 0;display: none;}
        #leftMenu li:hover>ul{display: block;}

    </style>
</head>
<body>



<div class="col-xs-3" id="leftMenu">
            <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="225">
                    
                <li class="active"><a href="index.php">周边旅游</a>
                </li>

                <li class="active"><a href="index.php">国内旅游</a></li>
                <li class="active"><a href="index.php">出境旅游</a></li>
                <li class="active"><a href="index.php">单项服务</a></li>
            </ul>
        </div>


</body>
</html>


