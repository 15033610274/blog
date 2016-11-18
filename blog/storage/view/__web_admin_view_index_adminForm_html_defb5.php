
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
          <div class="am-fl am-cf">
            <strong class="am-text-primary am-text-lg">表单</strong> /
            <small>form</small>
          </div>
        </div>

        <hr>

        <div class="am-tabs am-margin" data-am-tabs="">
          <ul class="am-tabs-nav am-nav am-nav-tabs">
            <li class="am-active"><a href="#tab1">基本信息</a></li>
            <li><a href="#tab2">详细描述</a></li>
            <li><a href="#tab3">SEO 选项</a></li>
          </ul>

          <div class="am-tabs-bd" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
            <div class="am-tab-panel am-fade am-in am-active" id="tab1">
              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">所属类别</div>
                <div class="am-u-sm-8 am-u-md-10">
                  <select data-am-selected="{btnSize: 'sm'}" style="display: none;">
                    <option value="option1">选项一...</option>
                    <option value="option2">选项二.....</option>
                    <option value="option3">选项三........</option>
                  </select><div class="am-selected am-dropdown " id="am-selected-iotoe" data-am-dropdown="">  <button type="button" class="am-selected-btn am-btn am-dropdown-toggle am-btn-sm am-btn-default">    <span class="am-selected-status am-fl">选项一...</span>    <i class="am-selected-icon am-icon-caret-down"></i>  </button>  <div class="am-selected-content am-dropdown-content">    <h2 class="am-selected-header"><span class="am-icon-chevron-left">返回</span></h2>       <ul class="am-selected-list">                     <li class="am-checked" data-index="0" data-group="0" data-value="option1">         <span class="am-selected-text">选项一...</span>         <i class="am-icon-check"></i></li>                                 <li class="" data-index="1" data-group="0" data-value="option2">         <span class="am-selected-text">选项二.....</span>         <i class="am-icon-check"></i></li>                                 <li class="" data-index="2" data-group="0" data-value="option3">         <span class="am-selected-text">选项三........</span>         <i class="am-icon-check"></i></li>            </ul>    <div class="am-selected-hint"></div>  </div></div>
                </div>
              </div>

              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">显示状态</div>
                <div class="am-u-sm-8 am-u-md-10">
                  <div class="am-btn-group" data-am-button="">
                    <label class="am-btn am-btn-default am-btn-xs">
                      <input type="radio" name="options" id="option1"> 正常
                    </label>
                    <label class="am-btn am-btn-default am-btn-xs">
                      <input type="radio" name="options" id="option2"> 待审核
                    </label>
                    <label class="am-btn am-btn-default am-btn-xs">
                      <input type="radio" name="options" id="option3"> 不显示
                    </label>
                  </div>
                </div>
              </div>

              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">推荐类型</div>
                <div class="am-u-sm-8 am-u-md-10">
                  <div class="am-btn-group" data-am-button="">
                    <label class="am-btn am-btn-default am-btn-xs">
                      <input type="checkbox"> 允许评论
                    </label>
                    <label class="am-btn am-btn-default am-btn-xs">
                      <input type="checkbox"> 置顶
                    </label>
                    <label class="am-btn am-btn-default am-btn-xs">
                      <input type="checkbox"> 推荐
                    </label>
                    <label class="am-btn am-btn-default am-btn-xs">
                      <input type="checkbox"> 热门
                    </label>
                    <label class="am-btn am-btn-default am-btn-xs">
                      <input type="checkbox"> 轮播图
                    </label>
                  </div>
                </div>
              </div>

              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                  发布日期
                </div>
                <div class="am-u-sm-8 am-u-md-10">
                  <form action="" class="am-form am-form-inline">
                    <div class="am-form-group am-form-icon">
                      <i class="am-icon-calendar"></i>
                      <input type="date" class="am-form-field am-input-sm" placeholder="日期">
                    </div>
                  <input type='hidden' name='__TOKEN__' value='6e3513265fb756f45a0f6ba0ce2ced6b'/></form>
                </div>
              </div>

              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                  发布时间
                </div>
                <div class="am-u-sm-8 am-u-md-10">
                  <form action="" class="am-form am-form-inline">
                    <div class="am-form-group am-form-icon">
                      <i class="am-icon-calendar"></i>
                      <input type="datetime-local" class="am-form-field am-input-sm" placeholder="时间">
                    </div>
                  <input type='hidden' name='__TOKEN__' value='6e3513265fb756f45a0f6ba0ce2ced6b'/></form>
                </div>
              </div>

            </div>

            <div class="am-tab-panel am-fade" id="tab2">
              <form class="am-form">
                <div class="am-g am-margin-top">
                  <div class="am-u-sm-4 am-u-md-2 am-text-right">
                    文章标题
                  </div>
                  <div class="am-u-sm-8 am-u-md-4">
                    <input type="text" class="am-input-sm">
                  </div>
                  <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                </div>

                <div class="am-g am-margin-top">
                  <div class="am-u-sm-4 am-u-md-2 am-text-right">
                    文章作者
                  </div>
                  <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                    <input type="text" class="am-input-sm">
                  </div>
                </div>

                <div class="am-g am-margin-top">
                  <div class="am-u-sm-4 am-u-md-2 am-text-right">
                    信息来源
                  </div>
                  <div class="am-u-sm-8 am-u-md-4">
                    <input type="text" class="am-input-sm">
                  </div>
                  <div class="am-hide-sm-only am-u-md-6">选填</div>
                </div>

                <div class="am-g am-margin-top">
                  <div class="am-u-sm-4 am-u-md-2 am-text-right">
                    内容摘要
                  </div>
                  <div class="am-u-sm-8 am-u-md-4">
                    <input type="text" class="am-input-sm">
                  </div>
                  <div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>
                </div>

                <div class="am-g am-margin-top-sm">
                  <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                    内容描述
                  </div>
                  <div class="am-u-sm-12 am-u-md-10">
                    <textarea rows="10" placeholder="请使用富文本编辑插件"></textarea>
                  </div>
                </div>

              <input type='hidden' name='__TOKEN__' value='6e3513265fb756f45a0f6ba0ce2ced6b'/></form>
            </div>

            <div class="am-tab-panel am-fade" id="tab3">
              <form class="am-form">
                <div class="am-g am-margin-top-sm">
                  <div class="am-u-sm-4 am-u-md-2 am-text-right">
                    SEO 标题
                  </div>
                  <div class="am-u-sm-8 am-u-md-4 am-u-end">
                    <input type="text" class="am-input-sm">
                  </div>
                </div>

                <div class="am-g am-margin-top-sm">
                  <div class="am-u-sm-4 am-u-md-2 am-text-right">
                    SEO 关键字
                  </div>
                  <div class="am-u-sm-8 am-u-md-4 am-u-end">
                    <input type="text" class="am-input-sm">
                  </div>
                </div>

                <div class="am-g am-margin-top-sm">
                  <div class="am-u-sm-4 am-u-md-2 am-text-right">
                    SEO 描述
                  </div>
                  <div class="am-u-sm-8 am-u-md-4 am-u-end">
                    <textarea rows="4"></textarea>
                  </div>
                </div>
              <input type='hidden' name='__TOKEN__' value='6e3513265fb756f45a0f6ba0ce2ced6b'/></form>
            </div>

          </div>
        </div>

        <div class="am-margin">
          <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
          <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
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

