<extend file='../index/master.html'/>
<block name="content">
    <parent name="header" title="这是标题">
        <div class="admin-content">
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">标签管理</strong> / <small>Show</small></div>
                </div>

                <hr>

                <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-6">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <button type="button" class="am-btn am-btn-default" onclick="location.href='{{u("add")}}'"><span class="am-icon-plus" ></span> 新增</button>
                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                                <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
                                <button type="button" class="am-btn am-btn-default" onclick="delAll()"><span class="am-icon-trash-o"></span> 删除</button>
                            </div>
                        </div>
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
                                    <th class="table-title">标签名</th>
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>
                                <tbody class="tbody">
                                <foreach from = "$data" key="$key" value = "$value">
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" value="{{$value['tid']}}">
                                        </td>
                                        <td>{{$key+1}}</td>
                                        <td><a href="#">{{$value['tname']}}</a></td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit({{$value['tid']}})"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({{$value['tid']}})"><span class="am-icon-trash-o"></span> 删除</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </foreach>
                                </tbody>
                            </table>
                            <div class="am-cf">
                                共 <b class="count" style="color: #ff0000;">{{count($data)}} </b>条记录
                                <div class="am-fr">
                                    {{$page}}
                                </div>
                            </div>
                            <hr>
                            <p>注：.....</p>
                        </form>
                    </div>

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
    function del(tid){
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
                        location.href = "{{u(del)}}" + "&tid=" + tid;
                    }
                }
            });
            //显示模态框
            obj.modal('show');
        });
    }
    function edit(tid) {
        window.location.href = "{{u(edit)}}" + '&tid=' + tid;
    }
    $(function(){
        $('.select').change(function(){
            var tid = $(this).val();
            $.post('{{u(showCategory)}}',{tid:tid},function (res) {
                if(res){
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
    function search() {
        var searchText = $('.search').val();
        $.post('{{u(search)}}',{'searchText':searchText},function (res) {
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
                        location.href = "{{u(delAll)}}" + "&tidAll=" + str;
                    }
                }
            });
            //显示模态框
            obj.modal('show');
        });
    }
</script>