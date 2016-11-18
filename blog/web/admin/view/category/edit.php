<extend file='../index/master.html'/>
<block name="content">
    <parent name="header" title="这是标题">
        <div class="admin-content">
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">分类管理</strong> / <small>edit</small></div>
                </div>

                <hr>

                <div class="am-g" style="padding: 0 20px">
                    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return add()">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">分类修改</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">分类名称</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="cname" value="{{$oldData['cname']}}" class="form-control" placeholder="请填写分类名称">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">所属分类</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single form-control" name="pid">
                                            <foreach from="$cateData" key="$key" value="$value">
                                                <option value="0">顶级分类</option>
                                                <option value="{{$value['cid']}}">{{$value['_cname']}}</option>
                                            </foreach>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">分类标题</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ctitle" value="{{$oldData['ctitle']}}" class="form-control" placeholder="分类标题">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">分类描述</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="cdes" placeholder="分类描述">{{$oldData['cdes']}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">分类关键字</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="ckeywords" placeholder="分类关键字" value="{{$oldData['cname']}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">分类排序</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="csort" class="form-control" value="{{$oldData['csort']}}" placeholder="分类排序">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="cid" value="{{q('get.cid',0,'intval')}}">
                        <button class="btn btn-primary btn-block submit" type="submit">确定</button>
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
            var data = $(this).parent('form').serialize();
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
</script>