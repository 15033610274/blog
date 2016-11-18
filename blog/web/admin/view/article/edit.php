<extend file='../index/master.html'/>
<block name="content">
    <parent name="header" title="这是标题">
        <div class="admin-content">
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">文章管理</strong> / <small>edit</small></div>
                </div>

                <hr>

                <div class="am-g" style="padding: 0 20px">
                    <form class="form-horizontal" id="form" onsubmit="return add()" action="" method="post">
                        <div class="panel panel-default" style="border: 0;">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章标题</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$oldData['title']}}" name="title" class="form-control" placeholder="文章标题">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章作者</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="author" value="{{$oldData['author']}}" class="form-control" placeholder="文章作者">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">所属分类</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single form-control" name="category_cid">
                                            <option value="0">请选择分类</option>.
                                            <foreach from="$cateData" key="$key" value="$value">
                                                <option value="{{$value['cid']}}" <if value="$value['cid']==$oldData['category_cid']">selected</if> >{{$value['_cname']}}</option>
                                            </foreach>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">标签</label>
                                    <div class="col-sm-9">
                                        <foreach from="$tagData" key="$key" value="$value">
                                            <foreach from="$oldData['tid']" key="$k" value="$v">
                                                <label class="checkbox-inline">
                                                        <input type="checkbox" name="tag_tid[]" value="{{$value['tid']}}" <if value="$v==$value['tid']">checked</if> > {{$value['tname']}}
                                                </label>
                                            </foreach>
                                        </foreach>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">缩略图</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{$oldData['thumb']}}" name="thumb" readonly="">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" onclick="upImage(this)">选择图片
                                                </button>
                                            </div>
                                        </div>
                                        <div class="input-group" style="margin-top:5px;">
                                            <img src="{{$oldData['thumb']}}" class="img-responsive img-thumbnail haibao" width="150">
                                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                                        </div>
                                        <span class="help-block">建议大小(宽100高100)</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章摘要</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="digest" class="form-control" placeholder="文章摘要">{{$oldData['digest']}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">关键字</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="keywords" class="form-control" placeholder="关键字">{{$oldData['keywords']}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章描述</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="des" class="form-control" placeholder="文章摘要">{{$oldData['des']}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">文章内容</label>
                                    <div class="col-sm-9">
                                        <textarea name="content" class="form-control" placeholder="文章内容">{{$oldData['content']}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary submit" type="submit">确定</button>
                        <input type="hidden" name="__TOKEN__" value="5d1030b3b265acce00112b738c640dd3">
                        <input type="hidden" name="aid" value="{{q('get.aid','0','intval')}}">
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
            $.post("{{u('edit')}}",data,function (res) {
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
                $("[name='thumb']").val(images[0]);
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