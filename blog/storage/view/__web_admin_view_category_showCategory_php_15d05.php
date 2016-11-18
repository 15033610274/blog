
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
                        <li><a href="<?php echo u(changePwd)?>"><span class="am-icon-cog"></span> 修改密码</a></li>
                        <li><a href="<?php echo u(out)?>"><span class="am-icon-power-off"></span> 退出</a></li>
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
                    <li><a href="<?php echo u(index)?>"><span class="am-icon-home"></span> 首页</a></li>
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
                            <li><a href="<?php echo u(adminUser)?>" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                            <li><a href="<?php echo u(adminHelp)?>"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
                            <li><a href="<?php echo u(adminModule)?>"><span class="am-icon-puzzle-piece"></span> 组件</a></li>
                            <li><a href="<?php echo u(adminGallery)?>"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
                            <li><a href="<?php echo u(adminLog)?>"><span class="am-icon-calendar"></span> 系统日志</a></li>
                            <li><a href="<?php echo u(admin404)?>"><span class="am-icon-bug"></span> 404</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo u(adminTable)?>"><span class="am-icon-table"></span> 表格</a></li>
                    <li><a href="<?php echo u(adminForm)?>"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
                    <li><a href="<?php echo u(adminTable)?>"><span class="am-icon-table"></span> 学员管理</a></li>
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
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">分类管理</strong> / <small>Show</small></div>
                </div>

                <hr>

                <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-6">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-3">
                        <div class="am-form-group">
                            <select data-am-selected="{btnSize: 'sm'}" class="am-selected-btn am-btn am-dropdown-toggle am-btn-sm am-btn-default select">
                                <option value="all">所有类别</option>
                                <?php foreach ((array)$bigCname as $key=>$value){?>
                                    <option value="<?php echo $value['cid']?>"><?php echo $value['cname']?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-3">
                        <div class="am-input-group am-input-group-sm">
                            <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
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
                                        <input type="checkbox">
                                    </th>
                                    <th class="table-id">ID</th>
                                    <th class="table-title">名称</th>
                                    <th class="table-type">标题</th>
                                    <th class="table-author am-hide-sm-only">描述</th>
                                    <th class="table-date am-hide-sm-only">关键词</th>
                                    <th class="table-date am-hide-sm-only">排序</th>
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ((array)$data as $key=>$value){?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check">
                                        </td>
                                        <td><?php echo $key?></td>
                                        <td><a href="#"><?php echo $value['_cname']?></a></td>
                                        <td class="am-hide-sm-only"><?php echo $value['ctitle']?></td>
                                        <td class="am-hide-sm-only"><?php echo $value['cdes']?></td>
                                        <td class="am-hide-sm-only"><?php echo $value['ckeywords']?></td>
                                        <td class="am-hide-sm-only"><?php echo $value['csort']?></td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="addSon(<?php echo $value['cid']?>)"><span class="am-icon-plus"></span> 添加分类</button>
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(<?php echo $value['cid']?>)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $value['cid']?>)"><span class="am-icon-trash-o"></span> 删除</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                            <div class="am-cf">
                                共 <?php echo count($data)?> 条记录
                                <div class="am-fr">
                                    <ul class="am-pagination">
                                        <li class="am-disabled"><a href="#">«</a></li>
                                        <li class="am-active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <p>注：.....</p>
                        <input type='hidden' name='__TOKEN__' value='59057b7517df2bf3d53d81a6d986807b'/></form>
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
    function addSon(cid) {
        location.href = "<?php echo u('addSon')?>" + '&cid=' + cid;
    }
    function del(cid){
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
                        location.href = "<?php echo u(del)?>" + "&cid=" + cid;
                    }
                }
            });
            //显示模态框
            obj.modal('show');
        });
    }
    function edit(cid) {
        window.location.href = "<?php echo u(edit)?>" + '&cid=' + cid;
    }
    $(function(){
        $('.select').change(function(){
            var cid = $(this).val();
            $.post('<?php echo u(showCategory)?>',{'cid':cid},function (res) {
                location.href = 'http://127.0.0.1/Hdphp/hdphp/index.php?s=admin/category/showCategory';
            });
        })
    })
</script>