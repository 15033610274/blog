<extend file='../index/master.html'/>
<block name="content">
    <parent name="header" title="这是标题">
        <div class="admin-content">
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">站点配置</strong> / <small>set</small></div>
                </div>

                <hr>

                <div class="am-g" style="padding: 0 20px">
                    <form action="" method="post">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th width="80">名称</th>
                                        <th>值</th>
                                        <th>标题</th>
                                        <th>描述</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <foreach from="$oldData" key="$key" value="$value">
                                        <tr>
                                            <th width="80">{{$value['name']}}</th>
                                            <td>
                                                <input type="text" class="form-control" name="value[]" value="{{$value['value']}}" placeholder="请输入配置值">
                                            </td>
                                            <td>{{$value['title']}}</td>
                                            <td>{{$value['desc']}}</td>
                                        </tr>
                                    </foreach>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button class="btn btn-primary submit" type="submit">确定</button>
                        <input type="hidden" name="__TOKEN__" value="5d1030b3b265acce00112b738c640dd3"></form>
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
            $.post("{{u('show')}}",data,function (res) {
                if(res.valid){
                    require(['util'], function (util) {
                        util.message(res.message, "", 'success');
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