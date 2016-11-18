<extend file='../index/master.html'/>
<block name="content">
    <parent name="header" title="这是标题">
        <div class="admin-content">
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">链接管理</strong> / <small>add</small></div>
                </div>

                <hr>

                <div class="am-g" style="padding: 0 20px">
                    <form action="" class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label for="#lname" class="col-sm-2 control-label">链接名称</label>
                            <div class="col-sm-9">
                                <input type="text" name="lname" class="form-control" placeholder="链接名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">缩略图</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="logo" readonly="">
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
                            <label for="#url" class="col-sm-2 control-label">链接名称</label>
                            <div class="col-sm-9">
                                <input type="text" name="url" id="url" class="form-control" placeholder="链接地址" value="http://www.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="#sort" class="col-sm-2 control-label">链接排名</label>
                            <div class="col-sm-9">
                                <input type="text" name="sort" id="sort" class="form-control" placeholder="链接排名">
                            </div>
                        </div>
                        <div class="form-group" style="padding: 0 20px;">
                            <input type="submit" class="btn btn-primary btn-block submit" id="" value="提交">
                        </div>
                    </form>
                </div>
            </div>

            <footer class="admin-content-footer">
                <hr>
                <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
            </footer>
        </div>
        <parent name="footer">
</block>
<script>
    $(function(){
        $('.submit').click(function () {
            var data = $(this).parents('form').serialize();
            $.post("{{u('add')}}",data,function (res) {
                if(res.valid){
                    require(['util'], function (util) {
                        util.message(res.message, "{{u('show')}}", 'success');
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
                $("[name='logo']").val(images[0]);
                $(".img-thumbnail").attr('src', images[0]);
            }, options)
        });
    }

    //移除图片 
    function removeImg(obj) {
        $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
    }
</script>