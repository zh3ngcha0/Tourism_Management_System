<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
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
  
  <body>
    <div class="x-body layui-anim layui-anim-up">
        <form class="layui-form">
          <div class="layui-form-item">
              <label for="L_proname" class="layui-form-label">
                  <span class="x-red">*</span>产品名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_proname" name="proname" required="" lay-verify="proname"
                  autocomplete="off" class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_protype" class="layui-form-label">
                  <span class="x-red">*</span>产品类型
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_protype" name="protype" required="" lay-verify="protype"
                  autocomplete="off" class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_subtype" class="layui-form-label">
                  <span class="x-red">*</span>产品二级类型
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_subtype" name="subtype" required="" lay-verify="subtype"
                  autocomplete="off" class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_getratio" class="layui-form-label">
                  <span class="x-red">*</span>返点比例
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_getratio" name="getratio" required="" lay-verify="getratio"
                  autocomplete="off" class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_reward" class="layui-form-label">
                  <span class="x-red">*</span>人头费
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_reward" name="reward" required="" lay-verify="reward"
                  autocomplete="off" class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <button type="button" class="layui-btn" id="test1">
                  <i class="layui-icon">&#xe67c;</i>产品图片
              </button>
          </div>
          <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">产品描述</label>
                  <div class="layui-input-block">
                      <textarea placeholder="既然选择了远方，便只顾风雨兼程；路漫漫其修远兮，吾将上下而求索" value="" class="layui-textarea"></textarea>
                  </div>
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  增加
              </button>
          </div>
      </form>
    </div>

<script>
layui.use('upload', function(){
  var upload = layui.upload;
   
  //执行实例
  var uploadInst = upload.render({
    elem: '#test1' //绑定元素
    ,url: '/upload/' //上传接口
    ,done: function(res){
      //上传完毕回调
    }
    ,error: function(){
      //请求异常回调
    }
  });
});
</script>



    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
          form.verify({
            proname: function(value){
              if(value.length > 10){
                return '产品名称必须小于十个字符';
              }
            }
          });

          //监听提交
          form.on('submit(add)', function(data){
            console.log(data);
            //发异步，把数据提交给php
            layer.alert("增加成功", {icon: 6},function () {
                // 获得frame索引
                var index = parent.layer.getFrameIndex(window.name);
                //关闭当前frame
                parent.layer.close(index);
            });
            return false;
          });
          
          
        });
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>
