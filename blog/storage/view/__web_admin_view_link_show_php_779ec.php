
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
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">链接管理</strong> / <small>Show</small></div>
                </div>

                <hr>

                <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-6">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <button type="button" class="am-btn am-btn-default" onclick="location.href='<?php echo u("add")?>'"><span class="am-icon-plus" ></span> 新增</button>
                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
                                <button type="button" class="am-btn am-btn-default" onclick="delAll()"><span class="am-icon-trash-o"></span> 删除</button>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-3">
                    </div>
                    <div class="am-u-sm-12 am-u-md-3">
                        <div class="am-input-group am-input-group-sm">
                            <input type="text" class="am-form-field search">
                          <span class="am-input-group-btn">
                            <button class="am-btn am-btn-default" type="button" onclick="search()">搜索</button>
                          </span>
                        </div>
                    </div>
                </div>

                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form" action="" method="post">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                <tr>
                                    <th class="table-check">
                                        <input type="checkbox" class="allCheck">
                                    </th>
                                    <th class="table-id">ID</th>
                                    <th class="table-title">链接名称</th>
                                    <th class="table-type">添加时间</th>
                                    <th class="table-date am-hide-sm-only">网站地址</th>
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>
                                <tbody class="tbody">
                                <?php foreach ((array)$oldData as $key=>$value){?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" value="<?php echo $value['cid']?>">
                                        </td>
                                        <td><?php echo $key+1?></td>
                                        <td><a href="#"><?php echo $value['lname']?></a></td>
                                        <td class="am-hide-sm-only"><?php echo $value['addtime']?></td>
                                        <td class="am-hide-sm-only">
                                            <a href="<?php echo $value['url']?>" target="_blank"><?php echo $value['url']?></a>
                                        </td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(<?php echo $value['lid']?>)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $value['lid']?>)"><span class="am-icon-trash-o"></span> 删除</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                            <div class="am-cf">
                                共 <b class="count" style="color: #ff0000;"><?php echo count($oldData)?> </b>条记录
                                <div class="am-fr">
                                    <?php echo $page?>
                                </div>
                            </div>
                            <hr>
                            <p>注：.....</p>
                        <input type='hidden' name='__TOKEN__' value='c578b6b612677441de30053007355c10'/></form>
                    </div>

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
    function del(lid){
        require(['util'], function (util) {
            var obj = util.modal({
                title:'友情提示你哟',//标题
                content:'确定删除么?',//内容
                footer:'<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button><button type="button" class="btn btn-default confirm" data-dismiss="modal">确定</button>',//底部
                option:{top:300},
                width:600,//宽度
                events:{
                    confirm:function(){
                        //哪个元素上有.confirm类，被点击就执行这个回调
                        location.href = "<?php echo u(del)?>" + "&lid=" + lid;
                    }
                }
            });
            //显示模态框
            obj.modal('show');
        });
    }
    function edit(lid) {
        window.location.href = "<?php echo u(edit)?>" + '&lid=' + lid;
    }
    $(function(){
        $('.select').change(function(){
            var cid = $(this).val();
            $.post('<?php echo u(showCategory)?>',{cid:cid},function (res) {
                if(res != ''){
                    $('.tbody').html(res);
                    var length = $('.tbody input[name="check"]').length;
                    $('.count').html(length);
                }
            });
        })
        //给Checkbox提供全选功能
        $(".allCheck").click(function(){
            if(this.checked){
                $('.tbody input[name="check"]').each(function(){
                    this.checked = true;
                });
            }else{
                $('.tbody input[name="check"]').each(function(){
                    this.checked = false;
                });
            }
        });
    })
    function search(){
        var searchText = $('.search').val();
        $.post('<?php echo u(search)?>',{'searchText':searchText},function (res) {
            if(res != ''){
                $('.tbody').html(res);
                var length = $('.tbody input[name="check"]').length;
                $('.count').html(length);
            }else{
                $('.tbody').html('<div style="width:300px">您搜索的内容为空</div>');
                var length = $('.tbody input[name="check"]').length;
                $('.count').html(length);
            }
        });
    }
    function delAll() {
        var ck = $('.tbody input[name="check"]');
        var str = '';
        ck.each(function(){
            if($(this).is(':checked')){
                str += $(this).val() + '.';
            }
        })
        if(str == ''){
            return;
        }
        require(['util'], function (util) {
            var obj = util.modal({
                title:'友情提示你哟',//标题
                content:'确定删除么?',//内容
                footer:'<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button><button type="button" class="btn btn-default confirm" data-dismiss="modal">确定</button>',//底部
                option:{top:300},
                width:600,//宽度
                events:{
                    confirm:function(){
                        //哪个元素上有.confirm类，被点击就执行这个回调
                        location.href = "<?php echo u(delAll)?>" + "&lidAll=" + str;
                    }
                }
            });
            //显示模态框
            obj.modal('show');
        });
    }
</script>