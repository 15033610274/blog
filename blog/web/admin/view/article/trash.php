<extend file='../index/master.html'/>
<block name="content">
    <parent name="header" title="这是标题">
        <div class="admin-content">
            <div class="admin-content-body">
                <div class="am-cf am-padding am-padding-bottom-0">
                    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">分类管理</strong> / <small>Trash</small></div>
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
                        <div class="am-form-group">
                            <select data-am-selected="{btnSize: 'sm'}" class="am-selected-btn am-btn am-dropdown-toggle am-btn-sm am-btn-default select">
                                <option value="all">所有类别</option>
                                <foreach from = "$bigCname" key="$key" value = "$value">
                                    <option value="{{$value['cid']}}">{{$value['cname']}}</option>
                                </foreach>
                            </select>
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
                                    <th class="table-title">标题</th>
                                    <th class="table-type">添加时间</th>
                                    <th class="table-author am-hide-sm-only">作者</th>
                                    <th class="table-date am-hide-sm-only">管理员</th>
                                    <th class="table-date am-hide-sm-only">分类</th>
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>
                                <tbody class="tbody">
                                <foreach from = "$oldData" key="$key" value = "$value">
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" value="{{$value['cid']}}">
                                        </td>
                                        <td>{{$key+1}}</td>
                                        <td><a href="#">{{$value['title']}}</a></td>
                                        <td class="am-hide-sm-only">{{$value['sendtime']}}</td>
                                        <td class="am-hide-sm-only">{{$value['author']}}</td>
                                        <td class="am-hide-sm-only">{{Db::table('user')->where('uid',$value['user_uid'])->pluck('username')}}</td>
                                        <td class="am-hide-sm-only">{{Db::table('category')->where('cid',$value['category_cid'])->pluck('cname')}}</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="revocation({{$value['aid']}})"><span class="am-icon-pencil-square-o"></span> 撤销</button>
                                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="removeDel({{$value['aid']}})"><span class="am-icon-trash-o"></span> 删除</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </foreach>
                                </tbody>
                            </table>
                            <div class="am-cf">
                                共 <b class="count" style="color: #ff0000;">{{count($oldData)}} </b>条记录
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
    function removeDel(aid){
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
                        location.href = "{{u(removeDel)}}" + "&aid=" + aid;
                    }
                }
            });
            //显示模态框
            obj.modal('show');
        });
    }
    function revocation(aid) {
        require(['util'], function (util) {
            var obj = util.modal({
                title:'友情提示你哟',//标题
                content:'确定撤销么?',//内容
                footer:'<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button><button type="button" class="btn btn-default confirm" data-dismiss="modal">确定</button>',//底部
                option:{top:300},
                width:600,//宽度
                events:{
                    confirm:function(){
                        //哪个元素上有.confirm类，被点击就执行这个回调
                        location.href = "{{u(revocation)}}" + "&aid=" + aid;
                    }
                }
            });
            //显示模态框
            obj.modal('show');
        });
    }
    $(function(){
        $('.select').change(function(){
            var cid = $(this).val();
            $.post('{{u(showCategory)}}',{cid:cid},function (res) {
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
    function search(){
        var searchText = $('.search').val();
        $.post('{{u(searchDel)}}',{'searchText':searchText},function (res) {
            if(res != ''){
                $('.tbody').html(res);
                var length = $('.tbody input[name="check"]').length;
                $('.count').html(length);
            }else{
                $('.tbody').html('<tr><td colspan="8">您搜索的数据为空</td><tr>');
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
                        location.href = "{{u(delAll)}}" + "&aidAll=" + str;
                    }
                }
            });
            //显示模态框
            obj.modal('show');
        });
    }
</script>