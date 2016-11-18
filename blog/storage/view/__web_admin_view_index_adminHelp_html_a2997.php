
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

    <link rel="icon" type="image/png" href="http://127.0.0.1/Hdphp/hdphp/web/admin/view/index/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="http://127.0.0.1/Hdphp/hdphp/web/admin/view/index/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="http://127.0.0.1/Hdphp/hdphp/web/admin/view/index/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="http://127.0.0.1/Hdphp/hdphp/web/admin/view/index/assets/css/admin.css">
    <link rel="stylesheet" href="http://127.0.0.1/Hdphp/hdphp/resource/hdjs/app/../css/bootstrap.min.css">
    <script src="http://127.0.0.1/Hdphp/hdphp/resource/hdjs/js/jquery.min.js"></script><!--jquery.min.js-->
    <script src="http://127.0.0.1/Hdphp/hdphp/web/admin/view/index/assets/js/amazeui.min.js"></script>
    <script src="http://127.0.0.1/Hdphp/hdphp/web/admin/view/index/assets/js/app.js"></script><!---->
    <!--这是框架的js||-->
    <script src="http://127.0.0.1/Hdphp/hdphp/resource/hdjs/app/util.js"></script>
    <script src="http://127.0.0.1/Hdphp/hdphp/resource/hdjs/require.js"></script>
    <script src="http://127.0.0.1/Hdphp/hdphp/resource/hdjs/app/config.js"></script>
    <style>
        .modal,.modal-dialog{
            top:100px;
        }
    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->



    <!-- content start -->
      
  <!--这是头部-->
    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <strong>Blog</strong> <small>后台管理模板</small>
        </div>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
                <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
                <li class="am-dropdown" data-am-dropdown>
                    <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                        <span class="am-icon-users"></span> <?php echo $_SESSION['username']?> <span class="am-icon-caret-down"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <!--<li><a href="#"><span class="am-icon-user"></span> 资料</a></li>-->
                        <li><a href="<?php echo u('index/changePwd')?>"><span class="am-icon-cog"></span> 修改密码</a></li>
                        <li><a href="<?php echo u('index/out')?>"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
            </ul>
        </div>
    </header>
    <div class="am-cf admin-main">
        <!-- sidebar start -->
        <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
            <div class="am-offcanvas-bar admin-offcanvas-bar">
                <ul class="am-list admin-sidebar-list">
                    <li><a href="<?php echo u('index/index')?>"><span class="am-icon-home"></span> 首页</a></li>
                    <li class="admin-parent">
                        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
                            <span class="am-icon-file"></span> 分类管理 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                        </a>
                        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                            <li><a href="<?php echo u('category/show')?>" class="am-cf"><span class="am-icon-check"></span> 分类列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                            <li><a href="<?php echo u('category/add')?>"><span class="am-icon-bug"></span> 分类添加</a></li>
                        </ul>
                    </li>
                    <li class="admin-parent">
                        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 页面模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nava">
                            <li><a href="<?php echo u('index/adminUser')?>" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                            <li><a href="<?php echo u('index/adminHelp')?>"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
                            <li><a href="<?php echo u('index/adminModule')?>"><span class="am-icon-puzzle-piece"></span> 组件</a></li>
                            <li><a href="<?php echo u('index/adminGallery')?>"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
                            <li><a href="<?php echo u('index/adminLog')?>"><span class="am-icon-calendar"></span> 系统日志</a></li>
                            <li><a href="<?php echo u('index/admin404')?>"><span class="am-icon-bug"></span> 404</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo u('index/adminTable')?>"><span class="am-icon-table"></span> 表格</a></li>
                    <li><a href="<?php echo u('index/adminForm')?>"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
                    <li><a href="<?php echo u('index/adminTable')?>"><span class="am-icon-table"></span> 学员管理</a></li>
                    <li><a href="#"><span class="am-icon-sign-out"></span> 网站配置</a></li>
                    <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>
                </ul>

                <div class="am-panel am-panel-default admin-sidebar-panel">
                    <div class="am-panel-bd">
                        <p><span class="am-icon-bookmark"></span> 公告</p>
                        <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
                    </div>
                </div>

                <div class="am-panel am-panel-default admin-sidebar-panel">
                    <div class="am-panel-bd">
                        <p><span class="am-icon-tag"></span> wiki</p>
                        <p>Welcome to the Amaze UI wiki!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar end -->


    <div class="admin-content">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">帮助页面</strong> / <small>Help Page</small></div>
      </div>

      <hr/>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-sm-centered">
          <h2>Amaze Beta</h2>
          <p>对于 Amaze，我们不是创造者。</p>
          <p>Amaze的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。</p>
          <p>感谢开源！感谢有你！</p>
          <hr/>
        </div>

        <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
          <h3>Bug 反馈</h3>
          <p>感谢对 Amaze 的关注和支持，如遇到 Bug 或者使用问题，可以通过以下途径反馈给我们：</p>
          <ol>
            <li>在 GitHub 项目主页提交 <a href="">Issue</a>。</li>
            <li>在 GitHub 项目主页提交 <a href="">Issue</a>。</li>
          </ol>
          <p>反馈注意事项</p>
          <p>为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。</p>
          <p>下面的几个链接是我们在几个在线调试工具上建的页面， 已经引入了 Amaze UI 样式和脚本，你可以选择你喜欢的工具【Fork】一份， 把要有问题的场景粘在里面，反馈给我们。</p>
          <ol>
            <li><a href="http://jsbin.com/kijiqu/1/edit?html,output" target="_blank">JSBin</a> </li>
            <li><a href="http://jsfiddle.net/hegfirose/W22fV/" target="_blank">JSFiddle</a> </li>
            <li><a href="http://codepen.io/minwe/pen/AEeup" target="_blank">CodePen</a> </li>
          </ol>
        </div>
      </div>
    </div>
    
</div>
    <!--<footer class="admin-content-footer">-->
        <!--<hr>-->
        <!--<p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>-->
    <!--</footer>-->
    <!--</div>-->
    <a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>


    <!-- content end -->

</body>
</html>

