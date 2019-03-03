<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../libs/layui/src/css/layui.css" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="../frame/static/image/code.png">
  </head>


<style>

    body{
        margin: 100px 30px;
    }
    body h1{
        text-align:center;
        margin: 100px auto;
    }
    .layui-upload img{
        display: block;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        margin-left: 100px;
        -webkit-border-radius: 50%;
        border: 4px solid #44576B;
    }
</style>
  
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
              <div class="layui-upload">
                  <button type="button" name="img_upload" class="layui-btn btn_upload_img">
                      <i class="layui-icon">&#xe67c;</i>上传图片
                  </button>
                  <img class="layui-upload-img img-upload-view">
                  <p id="demoText"></p>
              </div>
          </div>

          <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">产品描述</label>
                  <div class="layui-input-block">
                      <textarea id = "L_comment" placeholder="既然选择了远方，便只顾风雨兼程；路漫漫其修远兮，吾将上下而求索" value="" class="layui-textarea"></textarea>
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


<!-- 处理上传图片-->
<script type="text/javascript">
    layui.use('upload', function(){
        var upload = layui.upload;
        var tag_token = $(".tag_token").val();
        //普通图片上传
        var uploadInst = upload.render({
            elem: '.btn_upload_img'
            ,type : 'images'
            ,exts: 'jpg|png|gif' //设置一些后缀，用于演示前端验证和后端的验证
            //,auto:false //选择图片后是否直接上传
            //,accept:'images' //上传文件类型
            ,url: 'upload.php'
            ,data:{'_token':tag_token}
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('.img-upload-view').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                //如果上传失败
                if(res.status != '0'){
                    var pro_imagename=layer.msg(res.status);
                    return layer.msg('上传成功');
                }else{//上传成功
                    layer.msg(res.message);
                }
            }
            ,error: function(){
                //演示失败状态，并实现重传
                return layer.msg('上传失败,请重新上传');
            }
        });
    });
</script>

<script src="../../layui/src/layui.js"></script>
<script type="text/javascript">

        layui.use(['form','jquery','layer'], function(){
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
          form.on('submit(add)', function() {
            $.ajax({
                url:'reg.php',
                type:'post',
                dataType:'text',
                data:{
                    user:$('#user').val(),
                    L_proname:$('#L_proname').val(),
                    L_protype:$('#L_protype').val(),
                    L_subtype:$('#L_subtype').val(),
                    L_getratio:$('#L_getratio').val(),
                    L_reward:$('#L_reward').val(),
                  //  pro_imagename:pro_imagename,
                    L_comment:$('#L_comment').val(),
                },
                success:function(data){
                    if (data == 1) {
                        layer.msg('注册成功');
                        ///location.href = "login.html";
                    }else {
                        layer.msg('注册失败');
                    }
                }
            })
            //防止页面跳转
            return false;
        });

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
