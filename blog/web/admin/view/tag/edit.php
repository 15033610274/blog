<extend file='../index/master.html'/>
<block name="content">
    <parent name="header" title="这是标题">
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
                            <input type="text" name="tname" value="{{$oldData['tname']}}" class="form-control" id="tag" placeholder="标签名称">
                        </div>
                        <div class="form-group" style="padding: 0 20px;">
                            <input type="submit" class="btn btn-primary btn-block submit" id="" value="提交">
                        </div>
                        <input type="hidden" name="tid" value="{{q('get.tid','','intval')}}">
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
</script>