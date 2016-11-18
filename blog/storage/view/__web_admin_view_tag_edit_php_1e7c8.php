
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
                    <li><a href="<?php echo u('index/index')?>"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                    <li class="admin-parent">
                        <a class="am-cf am-collapsed" data-am-collapse="{target: '#category'}">
                            <span class="glyphicon glyphicon-th-list"></span> 分类管理 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                        </a>
                        <ul class="am-list am-collapse admin-sidebar-sub" id="category">
                            <li><a href="<?php echo u('category/show')?>" class="am-cf"><span class="am-icon-check"></span> 分类列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                            <li><a href="<?php echo u('category/add')?>"><span class="glyphicon glyphicon-plus"></span> 分类添加</a></li>
                        </ul>
                    </li>
                    <li class="admin-parent">
                        <a class="am-cf am-collapsed" data-am-collapse="{target: '#tag'}">
                            <span class="glyphicon glyphicon-bookmark"></span> 标签管理 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                        </a>
                        <ul class="am-list am-collapse admin-sidebar-sub" id="tag">
                            <li><a href="<?php echo u('tag/show')?>" class="am-cf"><span class="am-icon-check"></span> 标签列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                            <li><a href="<?php echo u('tag/add')?>"><span class="glyphicon glyphicon-plus"></span> 标签添加</a></li>
                        </ul>
                    </li>
                    <li class="admin-parent">
                    <a class="am-cf am-collapsed" data-am-collapse="{target: '#article'}">
                        <span class="glyphicon glyphicon-pushpin"></span> 文章管理 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                    </a>
                    <ul class="am-list am-collapse admin-sidebar-sub" id="article">
                        <li><a href="<?php echo u('article/show')?>" class="am-cf"><span class="glyphicon glyphicon-align-left"></span> 文章列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                        <li><a href="<?php echo u('article/add')?>"><span class="glyphicon glyphicon-plus"></span> 文章添加</a></li>
                        <li><a href="<?php echo u('article/trash')?>"><span class="glyphicon glyphicon-trash"></span> 文章回收站</a></li>
                    </ul>
                </li>
                    <li class="admin-parent">
                        <a class="am-cf am-collapsed" data-am-collapse="{target: '#link'}">
                            <span class="glyphicon glyphicon-magnet"></span> 网站链接 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                        </a>
                        <ul class="am-list am-collapse admin-sidebar-sub" id="link">
                            <li><a href="<?php echo u('link/show')?>" class="am-cf"><span class="am-icon-check"></span> 链接列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                            <li><a href="<?php echo u('link/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加链接</a></li>
                        </ul>
                    </li>
                    <li class="admin-parent">
                        <a class="am-cf am-collapsed" data-am-collapse="{target: '#webset'}">
                            <span class="glyphicon glyphicon-cog"></span> 站点配置 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                        </a>
                        <ul class="am-list am-collapse admin-sidebar-sub" id="webset">
                            <li><a href="<?php echo u('webset/show')?>" class="am-cf"><span class="am-icon-check"></span> 站点配置<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                        </ul>
                    </li>
                    <li class="admin-parent">
                        <a class="am-cf am-collapsed" data-am-collapse="{target: '#page_module'}"><span class="am-icon-file"></span> 页面模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                        <ul class="am-list am-collapse admin-sidebar-sub" id="page_module">
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
                    <!--<li><a href="#"><span class="am-icon-sign-out"></span> 网站配置</a></li>-->
                    <!--<li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>-->
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
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">标签管理</strong> / <small>edit</small></div>
                </div>

                <hr>

                <div class="am-g" style="padding: 0 20px">
                    <form action="" class="form-horizontal" method="post" role="form">
                        <div class="form-group" style="padding: 0 20px;">
                            <label for="tag">标签名称</label>
                            <input type="text" name="tname" value="<?php echo $oldData['tname']?>" class="form-control" id="tag" placeholder="标签名称">
                        </div>
                        <div class="form-group" style="padding: 0 20px;">
                            <input type="submit" class="btn btn-primary btn-block submit" id="" value="提交">
                        </div>
                        <input type="hidden" name="tid" value="<?php echo q('get.tid','','intval')?>">
                    <input type='hidden' name='__TOKEN__' value='2588d0378c9f41e938039dfb1b828803'/></form>
                </div>
            </div>

            <footer class="admin-content-footer">
                <hr>
                <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
            </footer>
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


<script>
    $(function(){
        $('.submit').click(function () {
            var data = $(this).parents('form').serialize();
            $.post("<?php echo u('edit')?>",data,function (res) {
                if(res.valid){
                    require(['util'], function (util) {
                        util.message(res.message, "<?php echo u('show')?>", 'success');
                    })
                }else{
                    require(['util'], function (util) {
                        util.message(res.message,"",'error');
                    })
                }

            },'json');
            return false;
        })
    })
</script>