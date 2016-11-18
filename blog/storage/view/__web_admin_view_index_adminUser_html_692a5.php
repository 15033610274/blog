
<!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>博客后台管理系统</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="icon" type="image/png" href="http://c70_yangyuhui.houdunphp.com/hdphp/web/admin/view/index/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="http://c70_yangyuhui.houdunphp.com/hdphp/web/admin/view/index/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="http://c70_yangyuhui.houdunphp.com/hdphp/web/admin/view/index/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="http://c70_yangyuhui.houdunphp.com/hdphp/web/admin/view/index/assets/css/admin.css">
    <link rel="stylesheet" href="http://c70_yangyuhui.houdunphp.com/hdphp/resource/hdjs/app/../css/bootstrap.min.css">
    <script src="http://c70_yangyuhui.houdunphp.com/hdphp/resource/hdjs/js/jquery.min.js"></script><!--jquery.min.js-->
    <script src="http://c70_yangyuhui.houdunphp.com/hdphp/web/admin/view/index/assets/js/amazeui.min.js"></script>
    <script src="http://c70_yangyuhui.houdunphp.com/hdphp/web/admin/view/index/assets/js/app.js"></script><!---->
    <!--这是框架的js||-->
    <script src="http://c70_yangyuhui.houdunphp.com/hdphp/resource/hdjs/app/util.js"></script>
    <script src="http://c70_yangyuhui.houdunphp.com/hdphp/resource/hdjs/require.js"></script>
    <script src="http://c70_yangyuhui.houdunphp.com/hdphp/resource/hdjs/app/config.js"></script>
    <style>
        .modal,.modal-dialog{
            top:50px;
        }
    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->



    <!-- content start -->
      
  
    <div class="admin-content">
      <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
          <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">个人资料</strong> / <small>Personal information</small></div>
        </div>

        <hr>

        <div class="am-g">
          <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
            <div class="am-panel am-panel-default">
              <div class="am-panel-bd">
                <div class="am-g">
                  <div class="am-u-md-4">
                    <img class="am-img-circle am-img-thumbnail" src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/200/h/200/q/80" alt="">
                  </div>
                  <div class="am-u-md-8">
                    <p>你可以使用<a href="#">gravatar.com</a>提供的头像或者使用本地上传头像。 </p>
                    <form class="am-form">
                      <div class="am-form-group">
                        <input type="file" id="user-pic">
                        <p class="am-form-help">请选择要上传的文件...</p>
                        <button type="button" class="am-btn am-btn-primary am-btn-xs">保存</button>
                      </div>
                    <input type='hidden' name='__TOKEN__' value='c578b6b612677441de30053007355c10'/></form>
                  </div>
                </div>
              </div>
            </div>

            <div class="am-panel am-panel-default">
              <div class="am-panel-bd">
                <div class="user-info">
                  <p>等级信息</p>
                  <div class="am-progress am-progress-sm">
                    <div class="am-progress-bar" style="width: 60%"></div>
                  </div>
                  <p class="user-info-order">当前等级：<strong>LV8</strong> 活跃天数：<strong>587</strong> 距离下一级别：<strong>160</strong></p>
                </div>
                <div class="user-info">
                  <p>信用信息</p>
                  <div class="am-progress am-progress-sm">
                    <div class="am-progress-bar am-progress-bar-success" style="width: 80%"></div>
                  </div>
                  <p class="user-info-order">信用等级：正常当前 信用积分：<strong>80</strong></p>
                </div>
              </div>
            </div>

          </div>

          <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
            <form class="am-form am-form-horizontal">
              <div class="am-form-group">
                <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                <div class="am-u-sm-9">
                  <input type="text" id="user-name" placeholder="姓名 / Name">
                  <small>输入你的名字，让我们记住你。</small>
                </div>
              </div>

              <div class="am-form-group">
                <label for="user-email" class="am-u-sm-3 am-form-label">电子邮件 / Email</label>
                <div class="am-u-sm-9">
                  <input type="email" id="user-email" placeholder="输入你的电子邮件 / Email">
                  <small>邮箱你懂得...</small>
                </div>
              </div>

              <div class="am-form-group">
                <label for="user-phone" class="am-u-sm-3 am-form-label">电话 / Telephone</label>
                <div class="am-u-sm-9">
                  <input type="tel" id="user-phone" placeholder="输入你的电话号码 / Telephone">
                </div>
              </div>

              <div class="am-form-group">
                <label for="user-QQ" class="am-u-sm-3 am-form-label">QQ</label>
                <div class="am-u-sm-9">
                  <input type="number" pattern="[0-9]*" id="user-QQ" placeholder="输入你的QQ号码">
                </div>
              </div>

              <div class="am-form-group">
                <label for="user-weibo" class="am-u-sm-3 am-form-label">微博 / Twitter</label>
                <div class="am-u-sm-9">
                  <input type="text" id="user-weibo" placeholder="输入你的微博 / Twitter">
                </div>
              </div>

              <div class="am-form-group">
                <label for="user-intro" class="am-u-sm-3 am-form-label">简介 / Intro</label>
                <div class="am-u-sm-9">
                  <textarea class="" rows="5" id="user-intro" placeholder="输入个人简介"></textarea>
                  <small>250字以内写出你的一生...</small>
                </div>
              </div>

              <div class="am-form-group">
                <div class="am-u-sm-9 am-u-sm-push-3">
                  <button type="button" class="am-btn am-btn-primary">保存修改</button>
                </div>
              </div>
            <input type='hidden' name='__TOKEN__' value='c578b6b612677441de30053007355c10'/></form>
          </div>
        </div>
      </div>

      <footer class="admin-content-footer">
        <hr>
        <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
      </footer>

    </div>
  

    <!-- content end -->

</body>
</html>

