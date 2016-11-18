
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
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">文章管理</strong> / <small>add</small></div>
                </div>

                <hr>

                <div class="am-g" style="padding: 0 20px">
                    <form class="form-horizontal" id="form" onsubmit="return add()" action="" method="post">
                        <div class="panel panel-default" style="border: 0">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章标题</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control" placeholder="文章标题">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章作者</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="author" class="form-control" placeholder="文章作者">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">所属分类</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single form-control" name="category_cid">
                                            <option value="0">请选择分类</option>
                                            <?php foreach ((array)$cateData as $key=>$value){?>
                                                <option value="<?php echo $value['cid']?>"><?php echo $value['_cname']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">标签</label>
                                    <div class="col-sm-9">
                                        <?php foreach ((array)$tagData as $key=>$value){?>
                                            <label class="checkbox-inline">
                                                    <input type="checkbox" name="tag_tid[]" value="<?php echo $value['tid']?>"> <?php echo $value['tname']?>
                                            </label>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">缩略图</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="thumb" readonly="">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" onclick="upImage(this)">选择图片
                                                </button>
                                            </div>
                                        </div>
                                        <div class="input-group" style="margin-top:5px;">
                                            <img src="resource/images/nopic.jpg" class="img-responsive img-thumbnail haibao" width="150">
                                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                                        </div>
                                        <span class="help-block">建议大小(宽100高100)</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章摘要</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="digest" class="form-control" placeholder="文章摘要"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">关键字</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="keywords" class="form-control" placeholder="文章摘要"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章描述</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="des" class="form-control" placeholder="文章摘要"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章内容</label>
                                    <div class="col-sm-9">
                                        <textarea name="content" class="form-control" placeholder="文章内容"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary submit" type="submit">确定</button>
                        <input type="hidden" name="__TOKEN__" value="5d1030b3b265acce00112b738c640dd3"><input type='hidden' name='__TOKEN__' value='4ce6715361f260d233e956e34d61c875'/></form>
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


<script>
    $(function(){
        $('.submit').click(function () {
            var data = $(this).parents('form').serialize();
            $.post("<?php echo u('add')?>",data,function (res) {
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
    function upImage(obj) {
        require(['util'], function (util) {
            options = {
                multiple: false,//是否允许多图上传
                data:'',
                hash:1
                //hash为确定上传文件标识（可以以用户编号，标识为此用户上传的文件，系统使用这个字段值来显示文件列表），data为数据表中的data字段值，开发者根据业务需要自行添加
            };
            util.image(function (images) {             //上传成功的图片，数组类型 
                $("[name='thumb']").val(images[0]);
                $(".img-thumbnail").attr('src', images[0]);
            }, options)
        });
    }

    //移除图片 
    function removeImg(obj) {
        $path = $(obj).prev('img').attr('src');
        $.post("<?php echo u('delImg')?>",{'path':$path},function (res) {
            
        },'json');
        $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
    }
</script>